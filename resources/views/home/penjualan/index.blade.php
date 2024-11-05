@extends('layouts.master');
@section('title','user');
@section('content')

<div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"> 
                    <h3>SALES PAGE</h3>
                    </h2>
                    <a href="/penjualan/tambah" class="btn btn-success btn-sm">ADD</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> No. </th>
                            <th> Nama Customer </th>
                            <th> Total Amount </th>
                            <th> Paid Amount </th>
                            <th> Change Amount </th>
                            <th> Date</th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($penjualan as $penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $penjualan->nama_customer }}</td>
                                                <td>Rp.{{ number_format ($penjualan->total_harga) }}</td>
                                                <td>Rp.{{ number_format ($penjualan->total_bayar) }}</td>
                                                <td>Rp.{{ number_format ($penjualan->bayar_akhir) }}</td>
                                                <td>{{ $penjualan->created_at }}</td>
                                                <td><a class="btn btn-secondary btn-sm" href="/penjualan/{{ $penjualan->id }}/edit">Add Pesanan</a>
                                                    <a class="btn btn-danger btn-sm" href="/penjualan/{{ $penjualan->id }}/delete"
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

