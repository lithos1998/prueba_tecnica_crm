@extends('layouts.app')


@section('content')
    <x-goback url="/clients" />

    <x-show-person :person="$client" />
@endsection
