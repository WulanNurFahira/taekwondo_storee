@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<style>
    .input-group {
        position: relative;
    }
    .input-group-append {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        display: flex;
        align-items: center;
        padding: 0 10px;
        cursor: pointer;
    }
</style>

<div class="content-wrapper">
    <section class="content">
        <div class="conteiner-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h3>Halaman Tambah Taekwondo Store</h3>
                        <a href="/produk" class="btn btn-warning btn-sm">BACK</a>
                        </div>
                        <div class="card-body">
                            <form action="/produk/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">ID Medicine</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="id_produk"
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
                                    />
                                    <label for="" class="form-label">Medicine Name</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_produk"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Price</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="harga"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="number" class="form-label">Stock</label>
                                        <div class="input-group">
                                            <input 
                                                type="number"
                                                class="form-control"
                                                name="stok"
                                                id=""
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            
                                </div>
                                <div class="mb-3">
                                            <label for="" class="form-label">Name Supplier</label>
                                                <select name="id_supplier" class="form-control">
                                                    <option value="">Pilih</option>
                                                    @foreach ($supplier as $supplier)
                                                    <option value="{{ $supplier->id }}">{{ $supplier->nama_supplier }}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                <button class="btn btn-info btn-sm" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection