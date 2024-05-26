<?php

namespace App\Http\Controllers\Admin;

use App\Domain\ValueObjects\TransactionId;
use App\Domain\Entities\TransactionProcess;
use App\Http\Controllers\Controller;
use App\Interfaces\ProcessTransactionInterface;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class TransactionController extends Controller
{
    public function __construct(
        public ProcessTransactionInterface $processTransaction
    ) {
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Transaction::all();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $icon = "";

                    if ($row->receipt != null) {
                        $url = Storage::url($row->receipt);

                        $icon = '<a href="' . $url . '" target="_blank">
                    <i data-lucide="file" class="top-icon w-5 h-5 text-gray-500"></i>
                    </a>';
                    }

                    if ($row->status == 'process') {
                        return '<div class="flex flex-col items-center gap-2">' . $icon . '<button type="button" data-fc-type="modal" data-fc-target="modalcenter"
                            class="inline-block focus:outline-none text-slate-500 hover:bg-slate-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-slate-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-slate-500  text-sm font-medium py-1 px-3 rounded" onclick="openModal(' . $row->id . ')">
                            Process Transaction
                        </button>' . '</div>';
                    }

                    return '';
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin.transaction.index');
    }


    public function processTransaction(Request $request)
    {

        $transaction_id = new TransactionId(
            transaction_id: $request->transaction_id
        );

        $transaction = new TransactionProcess(
            transaction_id: $transaction_id,
            receipt_number: $request->receipt_number ?? "",
            valid: $request->input('switch-valid') ?? false
        );

        try {
            $this->processTransaction->processTransactionStatus(
                transaction: $transaction
            );

            return redirect()->route('admin.transactions.index')->with('success', "Transaction Process");
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
