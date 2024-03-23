@extends('layouts.app')


@section('content')
    <x-goback url="/clients" />

    <div class="create-user-content">
        <div class="create-user-div">
            <h2 class="form-title">Editar</h2>

            {{-- Errores --}}
            @if ($errors->any())
                <div class="display-errors">
                    @foreach ( $errors->all() as $error)
                        <span>- {{ $error }}</span>
                    @endforeach 
                </div>               
            @endif

            {{-- Component Form --}}
            <x-form class="create-client-form" action="/clients/{{ $client->id }}" button="Editar" :list="Data::$create_client"  :values="$client" />

            <x-delete-confirmation :name="$client->name"  url="/clients/{{ $client->id }}" />
        </div>
    </div>
@endsection