@extends('layout')

@section('window_title') Registrar-se | S.PDF @endsection
@section('page_content')
    <main class="col-lg-6 mt-5 mx-auto shadow p-2">

        <div class="bg-white shadow mb-2 p-2">
            <div class="bg-white shadow p-2">
                <hr>
                <h2 class="text-center">Registrar-se</h2>
                <hr>
            </div>
        </div>

        <div class="p-2 bg-white shadow">
            <form class="bg-white shadow px-5 py-4" method="POST" action="{{ route('register.store') }}"> @csrf                    
                <h6 class="text-center">Registrar-se no S.PDF</h6>
                <hr>
                @include('messages.errors')
                <div class="form-group">
                    <label for="name">Nome<span class="text-danger">*</span></label>
                    <input class="form-control shadow-sm" id="name" name="name" placeholder="Informe o seu nome...">
                </div>
                <div class="form-group">
                    <label for="email">E-mail<span class="text-danger">*</span></label>
                    <input class="form-control shadow-sm" id="email" name="email" type="email" placeholder="Informe o seu e-mail...">
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="text-danger">*</span></label>
                    <input class="form-control shadow-sm" id="password" name="password" type="password" placeholder="Informe a senha de acesso...">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Repetir Senha<span class="text-danger">*</span></label>
                    <input class="form-control shadow-sm" id="password_confirmation" name="password_confirmation" type="password" placeholder="Repita a senha de acesso...">
                </div>
                <div class="form-group">
                    <button class="btn btn-info shadow-sm">Registrar-se</button>
                </div>
                <div class="d-block float-right">
                    <span class="text-danger">* </span><small class="text-secondary">Campos Obrigatórios</small>
                </div>
            </form>
        </div>
    </main>
@endsection
