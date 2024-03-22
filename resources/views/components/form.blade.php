<form class="{{ $class }}" action="{{ $action }}" method="POST">
    @csrf

    @foreach ($list as $input)
        <input name="{{ $input[0] }}" type="{{ $input[1] }}" placeholder="{{ $input[2] }}">
    @endforeach
    
    <button>{{ $button }}</button>    
</form>
    
