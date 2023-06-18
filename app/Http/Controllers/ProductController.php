<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'gambar' => 'required|file|image|max:5000',
            'harga' => 'required|numeric|min:99',
            'stok' => 'required|numeric|min:1|max:100',
            'deskripsi' => 'required',
        ]);

        $extFile = $request->gambar->getClientOriginalExtension();
        $namaFile = Auth::user()->name . time() . "." . $extFile;
        $request->gambar->storeAs('public', $namaFile);

        $validateData['gambar'] = $namaFile;
        Product::create($validateData);
        return to_route('penjual.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('penjual.show');
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
    public function destroy(string $id)
    {
        //
    }
}
