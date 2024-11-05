@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title"> 
                    <h3>SUPPLIER PAGE</h3>
                    </h2>
                    <a href="/supplier/tambah" class="btn btn-success btn-sm">ADD</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> No. </th>
                            <th> Name/Company </th>
                            <th> Email </th>
                            <th> Phone Number </th>
                            <th> Address </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                              @foreach ($supplier as $supplier)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $supplier->nama_supplier }}</td>
                                                <td>{{ $supplier->email }}</td>
                                                <td>{{ $supplier->no_telp }}</td>
                                                <td>{{ $supplier->alamat }}</td>
                                                <td><a class="btn btn-warning btn-sm" href="/supplier/{{ $supplier->id }}/show">Edit</a>
                                                    <a class="btn btn-danger btn-sm" href="/supplier/{{ $supplier->id }}/delete"
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