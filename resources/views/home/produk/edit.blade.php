@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>EDIT MEDICINE PAGE</h3>
                            <a class="btn btn-warning btn-sm" href="">BACK</a>
                        </div>
                        <div class="card-body">
                            <form action="/produk/{{ $produk->id }}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">ID Medicine</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="id_produk"
                                        value="{{ $produk->id_produk}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id="gambar"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $produk->gambar}}"
                                    />
                                    <label for="" class="form-label">Medicine Name</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_produk"
                                        value="{{ $produk->nama_produk}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Price</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="harga"
                                        value="{{ $produk->harga}}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                        <label for="" class="form-label">Stock</label>
                                        <input 
                                            type="text"
                                            class="form-control"
                                            name="stok"
                                        value="{{ $produk->stok}}"
                                            id=""
                                            aria-describedby="helpId"
                                            placeholder=""
                                        />
                                        <div class="mb-3">
                                        <label for="" class="form-label">Name Supplier</label>
                                            <select name="id_supplier" class="form-control">
                                                <option value="">Pilih</option>
                                                @foreach ($supplier as $supplier)
                                                <option value="{{ $supplier->id }}">{{ $supplier->id }}</option>
                                                @endforeach
                                        </select>
                                </div>
                                <button class="btn btn-primary btn-sm" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection