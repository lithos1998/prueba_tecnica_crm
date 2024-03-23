@extends('layouts.app')

@section('content')
    @if (session('succes'))
        <x-alert :msg="session('succes')" class="success" />
    @endif
    
    <div class="index">
        @include('components.nav')
        
        <div class="index-content">
            {{-- panel de usuario --}}
            <div class="user-panel">
                <span><a href="/logout">{{ Auth::user()->name; }}</a></span>
                <i class="fa-regular fa-circle-user"></i>
            </div>
            
            {{-- componente table --}}
            <x-table table="Mis clientes" :button="true" id="clients"/>
        </div>
    </div>
@endsection