@extends('layouts.app')


@section('content')
    {{-- Componente vovler --}}
    <x-goback url="/usuarios" />

    {{-- Componente tarjeta de usuario --}}
    <x-show-person :person="$user" />
@endsection
