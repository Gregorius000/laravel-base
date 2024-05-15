<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::with('product_category')->get();

            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    return '<div class="flex flex-row items-center gap-2">
                        <a href="' . route('admin.product.edit', $row->id) . '">
                            <i data-lucide="pen" class="top-icon w-5 h-5 text-green-500"></i>
                        </a>
                        <button type="button" data-fc-type="modal" data-fc-target="modalcenter"
                            onclick="openModal(' . $row->id . ')">
                            <i data-lucide="trash" class="top-icon w-5 h-5 text-red-500"></i>
                        </button>
                    </div>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        dd($request->all());
    }
}