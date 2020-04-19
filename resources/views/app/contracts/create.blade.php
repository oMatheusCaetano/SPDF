@extends('layout')

@section('window_title') Novo Contrato Social | S.PDF @endsection
@section('page_content')
    <div class="m-5">
        <div class="container col-lg-5 p-2 bg-white shadow">
            <form class="bg-white shadow p-5" method="POST" action="{{ route('contracts.store', ['user' => $loggedUser->id ]) }}" enctype="multipart/form-data"> @csrf
                <div>
                    <h2 class="text-center">Novo Contrato Social</h2>
                    <h6 class="text-center mb-3">Novo Contrato Social no S.PDF</h6>

                </div>
                @include('messages.errors')
                <div class="form-group">
                    <label for="contract">Contrato Social<span class="text-danger">* </span></label>
                    <input class="form-control" name="contract" type="file">
                    <div class="d-block float-right">
                        <small class="text-secondary">Apenas arquivos com extensão .pdf</small>
                    </div>
                </div>
                <div class="form-group">
                    <label for="copmany">Empresa<span class="text-danger">* </span></label>
                    <select class="form-control" name="company">
                      <option hidden>Selecione a empresa do contrato social...</option>
                        @foreach ($companies as $company)
                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                        @endforeach
                    </select>
                  </div>

                <div class="form-group">
                    <button class="btn btn-info">Salvar Contrato Social</button>
                </div>
                <div class="d-block float-right">
                    <span class="text-danger">* </span><small class="text-secondary">Campos Obrigatórios</small>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/companies/script.js') }}"></script>


@endsection
