@extends('layouts.app')


@section('content')
    {{-- componente vovler --}}
    <x-goback url="/users/{{ Auth::user()->id }}" />

    <div class="create-user-content">
        <div class="create-user-div">
            <h2 class="form-title">Editar</h2>

            {{-- Errores --}}
            @if ($errors->any())
                <div class="display-errors">
                    @foreach ( $errors->all() as $error)
                        <span>- {{ $error }}</span>
                    @endforeach 
                </div>               
            @endif

            {{-- Component Form --}}
            <x-form class="create-user-form" action="/users/{{ Auth::user()->id }}" button="Editar" :list="Data::$create_user"  :values="$user" />

            {{-- Componente para confirmar --}}
            <x-delete-confirmation :name="$user->name"  :action="route('users.destroy', $user->id)" />
            
        </div>
    </div>
@endsection