<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        $path = $request->gambar->store('public');

        $validateData['gambar'] = substr($path, 7);
        Product::create($validateData);
        return to_route('penjual.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'gambar' => 'file|image|max:5000',
            'harga' => 'required|numeric|min:99',
            'stok' => 'required|numeric|min:1|max:100',
            'deskripsi' => 'required',
        ]);

        if (isset($request->gambar)) {
            Storage::delete('public/' . $product->gambar);
            $path = $request->gambar->store('public');
            $validateData['gambar'] = substr($path, 7);
        }

        Product::where('id', $product->id)->update($validateData);

        return to_route('penjual.products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        Storage::delete('public/' . $product->gambar);
        $product->delete();
        return to_route('penjual.products.index');
    }
}
