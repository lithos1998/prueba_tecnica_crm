@extends('layouts.app')


@section('content')
    <x-goback url="/clients" />
    
    <x-card :data="$client" />
@endsection
