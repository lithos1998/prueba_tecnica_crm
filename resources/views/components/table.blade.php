<div class="table">
    <h2>{{ $table }}</h2>

    @if ($button)    
        <a class="add-client-button" href="/clients/create"><i class="fa-solid fa-plus"></i> Añadir Cliente</a>
    @endif

    <table class="list-table">
        <tbody id="{{ $id }}-table">
            {{-- Respuesta ajax --}}
        </tbody>
    </table>
</div>