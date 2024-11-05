@extends('layouts.master')
@section('title', 'User')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>EDIT USER PAGE</h3>
                            <a class="btn btn-warning btn-sm" href="">BACK</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/{{ $user->id }}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        value="{{ $user->name }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Email</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        value="{{ $user->email }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Password</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="password"
                                        value="{{ $user->password }}"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <div class="mb-3">
                                    <label for="level" class="form-label">Level</label>
                                    <select name="level" id="level" class="form-control" aria-describedby="helpId">
                                        <option value="Admin" {{ $user->level == 'Admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="Apoteker" {{ $user->level == 'Apoteker' ? 'selected' : '' }}>Apoteker</option>
                                    </select>
                                </div>
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