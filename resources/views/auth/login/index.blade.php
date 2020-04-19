@extends('layout')

@section('window_title') Entrar | S.PDF @endsection
@section('page_content')
    <main class="col-lg-6 mt-5 mx-auto shadow p-2">

        <div class="bg-white shadow mb-2 p-2">
            <div class="bg-white shadow p-2">
                <hr>
                <h2 class="text-center">Entrar</h2>
                <hr>
            </div>
        </div>

        <div class="p-2 bg-white shadow">
            <form class="bg-white shadow px-5 py-4" method="POST" action="{{ route('login.login') }}"> @csrf
                <h6 class="text-center">Entrar no S.PDF</h6>
                <hr>
                @include('messages.errors')
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control shadow-sm" id="email" name="email" type="email" placeholder="Informe o seu e-mail...">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control shadow-sm" id="password" name="password" type="password" placeholder="Informe a senha de acesso...">
                </div>
                <div class="form-group">
                    <button class="btn btn-info shadow-sm">Entrar</button>
                    <a class="btn btn-light shadow-sm" href="{{ route('register.index') }}" >Registrar-se</a>
                </div>
            </form>
        </div>

    </main>
@endsection
