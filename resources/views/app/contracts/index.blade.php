@extends('layout')

@section('window_title') DashBoard | S.PDF @endsection
@section('page_content')
    <main>

        <div class="container bg-white shadow my-4 p-2">
            <div class=" container bg-white shadow p-2">
                <hr>
                <h2 class="text-center">Contratos</h2>
                <hr>
            </div>
        </div>

        <div class="row mx-auto" >
            @foreach ($contracts as $contract)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="p-2 shadow">
                            <div class="card-body shadow">
                                <h5 class="card-title">{{ $contract->name }}</h5>
                                <hr>
                                <h6 class="card-text text-secondary">Empresa: {{ $contract->company->company_name }}</h6>
                                <h6 class="card-text text-secondary">CNPJ: {{ $contract->company->cnpj }}</h6>
                                <h6 class="card-text text-secondary">Usuário: {{ $contract->user->name }}</h6>
                                <p class="card-text text-secondary text-right"><small>{{ $contract->size . ' bytes' }}</small></p>
                                <a class="btn btn-info shadow" href="{{ route('contracts.show', ['contract' => $contract->id]) }}">Ver Arquivo</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <span class="fixed-bottom ml-3"> {!! $contracts !!} </span>

    </main>
@endsection
