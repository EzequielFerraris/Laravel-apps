<x-layout>

<div>
    <h1>Tramite: {{ $tramite->nombre }}</h1>
    <p>Tipo: {{ $tramite->tipo }}</p>
    <p>Sector: {{ $tramite->sector }}</p>
</div>

<div>
    <p>{{ $tramite->descripcion }}</p>
</div>

<div>
    <form action="{{ route('tramites.edit', $tramite->id)}}">
        <input type="submit" value="Editar" />
    </form>
    
    <form method='post' action="{{ route('tramites.destroy', $tramite->id)}}">
        @csrf
        @method('DELETE')
        
        <input type="submit" value="Archivar" />
    </form>
</div>

<div>
    <a href="{{ route('tramites.index')}}">Volver</a>
</div>

</x-layout>