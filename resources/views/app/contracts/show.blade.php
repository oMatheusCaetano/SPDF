@extends('layout')
<link rel="stylesheet" href="{{ asset('css/app/contracts/show.css') }}">
@section('window_title') DashBoard | S.PDF @endsection
@section('page_content')
    <input id="filePath" value="{{ $filePath }}" hidden>
    <main class="mt-3">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-11 col-lg-5 shadow p-2" id="pdf_canvas"></div>
                
                <div class="col-sm-11 col-lg-7">
                    <div class="bg-white shadow p-2">
                        <div class="bg-white shadow p-3">
                            <hr>
                            <h2 class="text-center">{{ $contract->name }}</h2>
                            <p class="text-center text-secondary">{{ $contract->size }} bytes</p>
                            <hr>
                        </div>
                    </div>

                    <div class="bg-white shadow mt-3 p-2">
                        <div class="bg-white shadow p-3">
                            <h5 class="text-center">Dados da Empresa</h5>
                            <hr>
                            <div class="shadow-sm bg-light pt-2 pb-1 px-2">
                                <p class="">Razão Social: {{ $contract->company->company_name }}</p>
                                <p class="">Nome Fantasia: {{ $contract->company->trading_name }}</p>
                                <p class="">CNPJ: {{ $contract->company->cnpj }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white shadow mt-3 p-2">
                        <div class="bg-white shadow p-3">
                            <h5 class="text-center">Pessoas Envolvidas</h5>
                            <hr>
                            @foreach ($contract->company->involved as $involved)
                                <div class="shadow-sm bg-light pt-2 pb-1 px-2 mb-2">
                                    <p class="">Nome: {{ $involved->name }}</p>
                                    <p class="">CPF: {{ $involved->cpf }}</p>
                                    <p class="">Responsabilidade: {{ $involved->responsabilities[0]->responsability }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </main>

    <script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/pdfobject.min.js') }}"></script>
    <script src="{{ asset('js/contracts/script.js') }}"></script>
@endsection
