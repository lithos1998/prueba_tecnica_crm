<div class="card-content">
    <div class="card">
        <span><i class="fa-regular fa-circle-user"></i></span>
        <h2>{{ $data['name'] }}</h2>
        <p>{{ $data['email'] }}</p>
        
        @if ($data['status'])            
            <p>Edad: {{ $data['age'] }}</p>
            <p>phone: {{ $data['phone'] }}</p>

            @if ($data['status'])
                <p><i class="fa-solid fa-square-check"></i></p>
            @else
                <p><i class="fa-solid fa-square-xmark"></i></p>
            @endif
        @endif

    </div>
</div>