@extends('layouts.app')

@section('content')
    <div class="index">
        @include('components.nav')
        
        <div class="index-content">
            {{-- Panel de usuario --}}
            <div class="user-panel">
                <a href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name; }} <i class="fa-regular fa-circle-user"></i></a>
            </div>
            
            {{-- Success --}}
            @if (session('success'))
                <div class="display-success">
                    <span>{{ session('success') }}</span>
                </div>               
            @endif

            {{-- Componente table --}}
            <x-table table="Mis clientes" :button="true" id="clients" :titles="Data::$clients_titles"/>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="assets/js/petition.js"></script>
@endpush