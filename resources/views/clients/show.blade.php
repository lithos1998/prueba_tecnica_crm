@extends('layouts.app')


@section('content')
    {{-- componente vovler --}}
    <x-goback url="/clientes" />

    {{-- componente tarjeta de cliente --}}
    <x-show-person :person="$client" />
@endsection
