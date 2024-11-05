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
                        <h3>ADD USER PAGE</h3>
                        <a href="/user" class="btn btn-warning btn-sm">BACK</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="" class="form-label">Email</label>
                                    <input 
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <input 
                                                type="password"
                                                class="form-control"
                                                name="password"
                                                id="password"
                                                aria-describedby="helpId"
                                                placeholder=""
                                            />
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="togglePassword">
                                                    <i class="fas fa-eye" id="eyeIcon"></i>
                                                </span>
                                            </div>
                                        </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Level</label>
                                        <select name="level" id="" class="form-control" aria-describedby="helpId">
                                            <option value="">Pilih Level</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Apoteker">Apoteker</option>
                                        </select>
                                    </div>
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

<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        eyeIcon.classList.toggle('fa-eye');
        eyeIcon.classList.toggle('fa-eye-slash');
    });
</script>   

@endsection