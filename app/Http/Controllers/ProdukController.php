<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Supplier;



class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $supplier = Supplier::all();
        return view('home.produk.index', compact('produk', 'supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Supplier::all();
        return view('home.produk.tambah', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    

        $image = $request->file('gambar');
        $image->storeAs('products', $image->hashName(),'public');
        Produk::create([
            "gambar" => $image->hashName(),         
            "nama_produk" => $request->nama_produk,           
            "harga" => $request->harga,           
            "stok" => $request->stok,   
            "id_supplier" => $request->id_supplier,   
        ]);
        return redirect('/produk')->with('succses', 'Data Berhasil Ditambahkan');;
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::find($id);
        $supplier = Supplier::all();

        return view('home.produk.edit', compact('produk', 'supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $produk = Produk::find($id);
        $supplier = Supplier::find($id);
        $image = $request->file('gambar');
        $image->storeAs('products', $image->hashName(),'public');
        $produk->update([
            'id_produk' => $request->id_produk,
            'gambar' => $image->hashName(),      
            'nama_produk' => $request->nama_produk,
            'harga'  => $request->harga,
            'stok' => $request->stok,
            'id_supplier' => $request->id_supplier,
        ]);
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $supplier = Supplier::find($id);
        $produk->delete();
        return redirect('/produk');
    }
}
