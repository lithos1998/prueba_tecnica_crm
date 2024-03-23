@extends('layouts.app')


@section('content')
    {{-- go back --}}
    <x-Goback url="/" />

    <div class="create-user-content">
        <div class="create-user-div">
            <h2 class="form-title">Registrarse</h2>

            {{-- Errores --}}
            @if ($errors->any())
                <div class="display-errors">
                    @foreach ( $errors->all() as $error)
                        <span>- {{ $error }}</span>
                    @endforeach 
                </div>               
            @endif

            {{-- Component Form --}}
            <x-form class="create-user-form" action="/users" button="Registrarme" :list="Data::$create_user" />
        </div>
    </div>
@endsection