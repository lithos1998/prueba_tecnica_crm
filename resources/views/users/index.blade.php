@extends('layouts.app')

@section('content')
    @if (Auth::user())
        
    @else
        <h1>no autorizado</h1>
    @endif

    <div class="index">
        @include('components.nav')
        
        <div class="index-content">
            <div class="user-panel">
                <span><a href="/logout">{{ Auth::user()->name; }}</a></span>
                <i class="fa-regular fa-circle-user"></i>
            </div>

            <x-table />
        </div>
    </div>
@endsection