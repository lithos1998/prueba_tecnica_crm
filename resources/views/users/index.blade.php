@extends('layouts.app')

@section('content')
    <div class="index">
        @include('components.nav')
        
        <div class="index-content">
            <div class="user-panel">
                <a href="/users/{{ Auth::user()->id }}">{{ Auth::user()->name; }} <i class="fa-regular fa-circle-user"></i></a>
            </div>

            <x-table table="Usuarios" :button="false" id="users"/>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="assets/js/petition.js"></script>
@endpush
