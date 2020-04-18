@extends('layout')

@section('window_title') Cadastrar Empresa | S.PDF @endsection
@section('page_content')
    <div class="m-5">
        <div class="container col-lg-5 p-2 bg-white shadow">
            <form class="bg-white shadow p-5" method="POST" action="{{ route('companies.store', ['user' => $loggedUser->id ]) }}"> @csrf
                <div>
                    <h2 class="text-center">Cadastrar Empresa</h2>
                    <h6 class="text-center mb-3">Cadastrar Empresa no S.PDF</h6>
                </div>
                @include('messages.errors')
                <div class="form-group">
                    <label for="company_name">Razão Social<span class="text-danger">*</span></label>
                    <input class="form-control" id="company_name" name="company_name" placeholder="Informe a Razão Social da empresa...">
                </div>
                <div class="form-group">
                    <label for="trading_name">Nome Fantasia<span class="text-danger">*</span></label>
                    <input class="form-control" id="trading_name" name="trading_name" placeholder="Informe o Nome Fantasia da empresa...">
                </div>
                <div class="form-group">
                    <label for="cnpj">CNPJ<span class="text-danger">*</span></label>
                    <input class="form-control" id="cnpj" name="cnpj" placeholder="Informe o CNPJ da empresa...">
                </div>

                <div class="form-group" id="involved_box">
                    <label>Adicionar Pessoa Envolvida</label>
                    <input class="btn btn-primary btn-sm ml-2" type="button" value="+" onclick="newInvolvedSelection()">
                </div>
                
                <div class="form-group">
                    <button class="btn btn-info">Cadastrar Empresa</button>
                </div>
                <div class="d-block float-right">
                    <span class="text-danger">* </span><small class="text-secondary">Campos Obrigatórios</small>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/companies/script.js') }}"></script>


@endsection
