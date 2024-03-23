<div class="table">
    <h2>{{ $table }} <a class="reload" id="reload-{{ $id }}"><i class="fa-solid fa-rotate-right"></i></a></h2>

    

    @if ($button)    
        <a class="add-client-button" href="/clients/create"><i class="fa-solid fa-plus"></i> Añadir Cliente</a>
    @endif

    <table class="list-table">
        <thead>
            <tr>
                @foreach ($titles as $title )
                    <th>{{ $title }}</th>                    
                @endforeach
            </tr>
        </thead>
        <tbody id="{{ $id }}-table">
            {{-- Respuesta ajax --}}
        </tbody>
    </table>
</div>