<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\DetailTransaction;
use App\Models\Transaction;
use App\Models\User;
use App\Service\UploadFileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function __construct(public UploadFileService $uploadFileService)
    {
    }

    public function index()
    {
        return view('customers.transaction');
    }

    public function datatable(Request $request)
    {
        $data = Transaction::getTransactionByUser()->get();

        return DataTables::of($data)
            ->addColumn('receipt', function ($row) {
                $icon = "";

                if ($row->receipt_number != null && $row->status == "delivery") {
                    return '
                    <div class="flex flex-col items-center gap-2">
                        <small> Receipt number: ' . $row->receipt_number . '</small>
                        <form action="' . route('customer.transaction.complete-transaction') . '" method="POST">
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            <input type="hidden" name="transaction_id" value="' . $row->id . '" />
                            <button type="submit"
                                class="inline-block focus:outline-none text-white-500 hover:bg-green-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-slate-500  text-sm font-medium py-1 px-3 rounded">
                                Complete Transaction
                            </button>
                        </form>
                    </div>
                    ';
                }

                if ($row->status == "pending" || $row->status == "process") {
                    if ($row->receipt != null) {
                        $url = Storage::url($row->receipt);

                        $icon = '<a href="' . $url . '" target="_blank">
                        <i data-lucide="file" class="top-icon w-5 h-5 text-gray-500"></i>
                        </a>';
                    }

                    return '<div class="flex flex-col items-center gap-2">' . $icon . '<button type="button" data-fc-type="modal" data-fc-target="modalcenter"
                        class="inline-block focus:outline-none text-slate-500 hover:bg-slate-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-slate-500  text-sm font-medium py-1 px-3 rounded" onclick="openModal(' . $row->id . ')">
                        Upload Receipt
                    </button>' . '</div>';
                }

                return '<div class="flex flex-col items-center gap-2">' . $icon . '<button type="button" data-fc-type="modal" data-fc-target="modal-review"
                        class="inline-block focus:outline-none text-slate-500 hover:bg-slate-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-slate-500  text-sm font-medium py-1 px-3 rounded" onclick="openModalReview(' . $row->id . ')">
                        Review
                    </button>' . '</div>';
            })
            ->rawColumns(['receipt'])
            ->toJson();
    }

    public function uploadReceipt(Request $request)
    {
        $path = $this->uploadFileService->uploadFile($request->file('receipt'));

        $transaction = Transaction::find($request->transaction_id);

        if ($transaction->receipt != null) {
            Storage::delete($transaction->receipt);
        }

        $transaction->update([
            'status' => 'process',
            'receipt' => $path
        ]);

        return redirect()->back();
    }

    public function completeTransaction(Request $request)
    {
        try {
            $transaction = Transaction::find($request->transaction_id);
            $transaction->update([
                'status' => 'complete'
            ]);

            return redirect()->back()->with('success', "Transaction completed");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function getDetailProductTransaction(Request $request)
    {
        $products = DetailTransaction::select('products.id', 'products.name', 'products.image')->leftJoin('products', 'products.id', '=', 'detail_transactions.product_id')->where('transaction_id', $request->transaction_id)->get();

        return response()->json(['data' => $products], 200);
    }

    public function reviewTransaction(Request $request)
    {
        $products = DetailTransaction::where('transaction_id', $request->transaction_id_review)->get();

        foreach ($products as $product) {
            if ($request->input("rating-" . $product->id) == null) {
                $request->request->add(['rating-' . $product->id => '5']);
            }
        }

        dd($request->all());
    }
}
