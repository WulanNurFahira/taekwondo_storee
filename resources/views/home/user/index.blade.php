@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title"> 
        <h3>User Page</h3>
        </h2>
        <a href="/user/tambah" class="btn btn-success btn-sm">ADD</a>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th> No. </th>
                <th> Name </th>
                <th> Email </th>
                <th> Level </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            @foreach ($user as $user)
                    <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->level }}</td>
            <td><a class="btn btn-warning btn-sm" href="/user/{{ $user->id }}/show">Edit</a>
                <a class="btn btn-danger btn-sm" href="/user/{{ $user->id }}/delete"
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