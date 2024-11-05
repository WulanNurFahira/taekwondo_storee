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
                            <h3>EDIT SUPPLIER PAGE</h3>
                            <a class="btn btn-warning btn-sm" href="">BACK</a>
                        </div>
                        <div class="card-body">
                            <form action="/supplier/{{ $supplier->id }}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama/Company</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="nama_supplier"
                                        value="{{ $supplier->nama_supplier }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Email</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        value="{{ $supplier->email }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Phone Number</label>
                                    <input 
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        value="{{ $supplier->no_telp }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Address</label>
                                    <input 
                                        type="textarea"
                                        class="form-control"
                                        name="alamat"
                                        value="{{ $supplier->alamat }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
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