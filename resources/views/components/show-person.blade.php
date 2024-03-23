<div class="card-content">
    <div class="card">
        <span><i class="fa-regular fa-circle-user"></i></span>
        <h2>{{ $person['name'] }}</h2>
        <p>{{ $person['email'] }}</p>
        
        @if ($person['age'])            
            <p>Edad: {{ $person['age'] }}</p>
            <p>phone: {{ $person['phone'] }}</p>

            @if ($person['status'])
                <p><i class="fa-solid fa-square-check"></i></p>
            @else
                <p><i class="fa-solid fa-square-xmark"></i></p>
            @endif
        @else
            <a class="edit-btn" href="/users/{{ Auth::user()->id }}/edit">Editar <i class="fa-solid fa-user-pen"></i></a>
            <a class="logout-btn" href="/logout">Cerrar session</a>
        @endif
    </div>
</div>