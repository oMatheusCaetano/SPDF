@extends('layout')

@section('window_title') Cadastrar Empresa | S.PDF @endsection
@section('page_content')
    <div class="m-5">
        <div class="container col-lg-5 p-2 bg-white shadow">
            <form class="bg-white shadow p-5" method="POST" action="{{ route('users.update', ['user' => $loggedUser->id ]) }}"> @csrf
                <div>
                    <h2 class="text-center">Cadastrar Empresa</h2>
                    <h6 class="text-center mb-3">Cadastrar Empresa no S.PDF</h6>
                </div>
                @include('messages.errors')
                <div class="form-group">
                    <label for="company_name">Razão Social</label>
                    <input class="form-control" id="company_name" name="company_name" placeholder="Informe a Razão Social da empresa...">
                </div>
                <div class="form-group">
                    <label for="trading_name">Nome Fantasia</label>
                    <input class="form-control" id="trading_name" name="trading_name" placeholder="Informe o Nome Fantasia da empresa...">
                </div>
                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                    <input class="form-control" id="cnpj" name="cnpj" placeholder="Informe o CNPJ da empresa...">
                </div>

                <div class="form-group" id="involved_box">
                    <label>Adicionar Pessoas Envolvidas</label>
                    <input class="btn btn-primary btn-sm" type="button" value="+" onclick="newInvolvedSelection()">
                    <div class="form-group">
                        <div class="d-flex mb-2">
                            <input class="btn btn-danger btn-sm mr-2" type="button" value="-">
                            <input class="form-control" placeholder="Informe o nome do envolvido...">
                        </div>
                        <div class="d-flex">
                            <input class="form-control col-sm-8" id="cpf" name="cpf" placeholder="Informe o CPF do envolvido">
                            <select class="custom-select">
                                <option hidden>Responsabilidade</option>
                                <option value="Sócio">Sócio</option>
                                <option value="Administrador">Administrador</option>
                                <option value="Responsável Legal">Responsável Legal</option>
                                <option value="Cotista">Cotista</option>
                            </select>
                        </div>
                        <hr>
                    </div>
                </div>
                
                <div class="form-group">
                    <button class="btn btn-info">Cadastrar Empresa</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/companies/script.js') }}"></script>


@endsection
