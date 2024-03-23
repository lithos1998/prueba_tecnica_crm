<form class="{{ $class }}" action="{{ $action }}" method="POST">
    @csrf

    @foreach ($list as $input)
        @if ( $input[1] != 'select')
            <input name="{{ $input[0] }}" type="{{ $input[1] }}" placeholder="{{ $input[2] }}">
        @else
            <select name="{{ $input[0] }}">
                <option value="true" selected>activo</option>
                <option calue="false" >inactivo</option>
            </select>
        @endif

    @endforeach
    
    <button>{{ $button }}</button>    
</form>
    
