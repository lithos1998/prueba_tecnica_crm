@extends('layouts.app')

@section('content')
    <div class="index">
        @include('components.nav')
        
        <div class="index-content">
            <div class="user-panel">
                <span><a href="/logout">{{ Auth::user()->name; }}</a></span>
                <i class="fa-regular fa-circle-user"></i>
            </div>

            <x-table table="Usuarios" :button="false" id="users"/>
        </div>
    </div>
@endsection