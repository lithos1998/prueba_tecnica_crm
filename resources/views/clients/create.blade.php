@extends('layouts.app')


@section('content')
    {{-- Componente vovler --}}
    <x-Goback url="/clientes" />

    <div class="create-user-content">
        <div class="create-user-div">
            <h2 class="form-title">Añadir cliente</h2>

            {{-- Errores --}}
            @if ($errors->any())
                <div class="display-errors">
                    @foreach ( $errors->all() as $error)
                        <span>- {{ $error }}</span>
                    @endforeach 
                </div>               
            @endif

            {{-- Component Form --}}
            <x-form class="create-client-form" action="/clients" button="Añadir" :list="Data::$create_client" values=""/>
        </div>
    </div>
@endsection