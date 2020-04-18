@extends('layout')

@section('window_title') Entrar | S.PDF @endsection
@section('page_content')
    <div class="m-5">
        <div class="container col-lg-5 p-2 bg-white shadow">
            <form class="bg-white shadow p-5" method="POST" action="{{ route('register.store') }}"> @csrf
                <div>
                    <h2 class="text-center">Entrar</h2>
                    <h6 class="text-center mb-3">Entrar no S.PDF</h6>
                </div>
                @include('messages.errors')
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder="Informe o seu e-mail...">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Informe a senha de acesso...">
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Entrar</button>
                    <a class="btn btn-light" href="{{ route('register.index') }}" >Registrar-se</a>
                </div>
            </form>
        </div>
    </div>
@endsection
