@extends('layouts.app')


@section('content')
    <x-goback url="/users" />

    <x-show-person :person="$user" />
@endsection
