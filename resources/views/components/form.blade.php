<form class="{{ $class }}" action="{{ $action }}" method="POST">
    @if ($values)
        {{-- update --}}
        @method('PUT')
    @else
        @method('POST')
    @endif
    
    @csrf

    @foreach ($list as $input)
        {{-- construccion del formulario --}}
        @if ( $input[1] != 'select')            
            @if ($values)
                <input value="{{ $input[0] != 'password' ? $values[$input[0]]: '';}}" name="{{ $input[0] }}" type="{{ $input[1] }}"  placeholder="{{ $input[2] }}">
            @else
                <input name="{{ $input[0] }}" type="{{ $input[1] }}" placeholder="{{ $input[2] }}">
            @endif
        @else
            <select name="{{ $input[0] }}">
                <option value="1" selected>activo</option>
                <option value="0" >inactivo</option>
            </select>
        @endif

    @endforeach
    
    <button type="submit">{{ $button }}</button>    
</form>
    
