@extends('layout')

@section('window_title') Registrar-se | S.PDF @endsection
@section('page_content')
    <div class="m-5">
        <div class="container col-lg-5 p-2 bg-white shadow">
            <form class="bg-white shadow p-5" method="POST" action="{{ route('register.store') }}"> @csrf
                <div>
                    <h2 class="text-center">Registrar-se</h2>
                    <h6 class="text-center mb-3">Registrar-se no S.PDF</h6>
                </div>
                @include('messages.errors')
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input class="form-control" id="name" name="name" placeholder="Informe o seu nome...">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder="Informe o seu e-mail...">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Informe a senha de acesso...">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Repetir Senha</label>
                    <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Repita a senha de acesso...">
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Registrar-se</button>
                </div>
            </form>
        </div>
    </div>
@endsection
