@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"> 
                    <h3>MEDICINE PAGE</h3>
                    </h2>
                    <a href="/produk/tambah" class="btn btn-success btn-sm">ADD</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> ID Medicine </th>
                            <th> Medicine Name </th>
                            <th> Price </th>
                            <th> Stock </th>
                            <th> Suppliers </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($produk as $produk)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-center">
                                            <img src="{{ asset('/storage/products/'.$produk->gambar) }}"
                                            class="rounded" style="width: 130px; height:130px;">
                                        </td>
                                                <td>{{ $produk->nama_produk }}</td>
                                                <td>{{ $produk->harga }}</td>
                                                <td>{{ $produk->stok }}</td>
                                                <td>{{ $produk->id_supplier }}</td>
                                                <td><a class="btn btn-warning btn-sm" href="/produk/{{ $produk->id }}/show">Edit</a>
                                                    <a class="btn btn-danger btn-sm" href="/produk/{{ $produk->id }}/delete"
                                                        onclick="return confirm('yakin mau di hapus ?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection

