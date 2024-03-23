@extends('layouts.app')


@section('content')
    @if (session('msg'))
        <h1>{{ session('msg') }}</h1>
    @endif
    
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
            
            @if (session('invalidate'))
                <div class="display-errors">
                    <span>- {{ session('invalidate') }}</span>
                </div> 
            @endif

            {{-- success --}}
            @if (session('success'))
                <div class="display-success">
                    <span>{{ session('success') }}</span>
                </div>               
            @endif
            
            {{-- Component Form --}}
            <x-form class="login-form" action="/login" button="Login" :list="Data::$login_form" values=""/>
            
            <a clas="" href="/users/create">¿No estas registrado?</a>
        </div>
    </div>
@endsection
