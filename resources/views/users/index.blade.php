@extends('layouts.app')

@section('content')
    <div class="index">
        @include('components.nav')
        
        <div class="index-content">
            <div class="user-panel">
                <a href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name; }} <i class="fa-regular fa-circle-user"></i></a>
            </div>

            {{-- success --}}
            @if (session('success'))
                <div class="display-success">
                    <span>{{ session('success') }}</span>
                </div>               
            @endif

            {{-- componente tabla --}}
            <x-table table="Usuarios" :button="false" id="users" :titles="Data::$users_titles"/>
        </div>
    </div>

    @push('scripts')
        <script src="assets/js/petition.js"></script>
    @endpush
@endsection


