@extends('layouts.merge.painel')
@section('titulo', 'Painel')
@section('conteudo')

    <!-- row -->
    <div class="container-fluid">
        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-none d-lg-block">
                <h3 class="text-black font-w600">Bem-vindo ao Sistema de Gestão Bibliotecária!</h3>
                <p class="mb-0 fs-18"></p>
            </div>

            <div class="input-group search-area ms-auto d-inline-flex">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                </div>
            </div>
            <a href="javascript:void(0);" class="settings-icon  ms-3"><i class="flaticon-381-settings-2 me-0"></i></a>
        </div>
       
        
    </div>
  
   
@endsection
