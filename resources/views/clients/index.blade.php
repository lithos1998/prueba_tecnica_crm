@extends('layouts.app')

@section('content')
    <div class="index">
        @include('components.nav')
        
        <div class="index-content">
            {{-- panel de usuario --}}
            <div class="user-panel">
                <a href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name; }} <i class="fa-regular fa-circle-user"></i></a>
            </div>
            
            {{-- componente table --}}
            <x-table table="Mis clientes" :button="true" id="clients"/>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="assets/js/petition.js"></script>
@endpush