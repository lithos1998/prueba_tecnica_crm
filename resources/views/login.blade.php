@extends('layouts.app')


@section('content')
    <div class="login-content">
        <div class="login-div">
            <h2 class="form-title">CRM</h2>

            {{-- Errores --}}
            @if ($errors->any())
                <div class="display-errors">
                    @foreach ( $errors->all() as $error)
                        <span>- {{ $error }}</span>
                    @endforeach 
                </div>               
            @endif
            
            {{-- Component Form --}}
            <x-form class="login-form" action="/login" button="Login" :list="Data::$login_form" />
            
            <a clas="" href="/users/create">¿No estas registrado?</a>
        </div>
    </div>
@endsection
