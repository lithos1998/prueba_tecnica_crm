<form class="{{ $class }}" action="{{ $action }}" method="POST">
    @if ($values)
        @method('PUT')
    @endif
    
    @csrf

    @foreach ($list as $input)
        @if ( $input[1] != 'select')
            @if ($values)
                <input value="{{ $input[0] != 'password' ? $values[$input[0]]: '';}}" name="{{ $input[0] }}" type="{{ $input[1] }}"  placeholder="{{ $input[2] }}">
            @else
                <input name="{{ $input[0] }}" type="{{ $input[1] }}" placeholder="{{ $input[2] }}">
            @endif
        @else
            <select name="{{ $input[0] }}">
                <option value="true" selected>activo</option>
                <option calue="false" >inactivo</option>
            </select>
        @endif

    @endforeach
    
    <button type="submit">{{ $button }}</button>    
</form>
    
