@extends('layout')

@section('window_title') Meu Perfil | S.PDF @endsection
@section('page_content')
    <div class="m-5">
        <div class="container col-lg-5 p-2 bg-white shadow">
            <form class="bg-white shadow p-5" method="POST" action="{{ route('users.update', ['user' => $loggedUser->id ]) }}"> @csrf
                <div>
                    <h2 class="text-center">Meu Perfil</h2>
                    <h6 class="text-center mb-3">Meu Perfil no S.PDF</h6>
                </div>
                @include('messages.errors')
                <div class="form-group">
                    <label for="name">Nome<span class="text-danger">*</span></label>
                    <input class="form-control" id="name" name="name" value="{{ $loggedUser->name }}" placeholder="Informe o seu nome...">
                </div>
                <div class="form-group">
                    <label for="email">E-mail<span class="text-danger">*</span></label>
                    <input class="form-control" id="email" name="email" type="email" value="{{ $loggedUser->email }}" placeholder="Informe o seu e-mail...">
                </div>
                <div class="form-group">
                    <label for="password">Password<span class="text-danger">*</span></label>
                    <input class="form-control" id="password" name="password" type="password" placeholder="Informe a senha de acesso...">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Repetir Senha<span class="text-danger">*</span></label>
                    <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" placeholder="Repita a senha de acesso...">
                </div>
                <div class="form-group">
                    <button class="btn btn-info">Salvar Alterações</button>
                </div>
                <div class="d-block float-right">
                    <span class="text-danger">* </span><small class="text-secondary">Campos Obrigatórios</small>
                </div>
            </form>
        </div>
    </div>
@endsection
