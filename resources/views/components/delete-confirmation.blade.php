<div class="delete-confirmation hide">
    <div class="confirmation-chart">
        <span>Esta seguro que desea eliminar a {{ $name }} ?</span>
        {{-- ver la ruta --------- --}}
        <form action="{{ $url }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete-btn" type="submit">Eliminar</button>
            <button class="cancel-btn" id="cancel-btn" type="submit">Cancel</button>
        </form>
    </div>
</div>

<a id="delete-btn" class="delete-btn">Eliminar</a>