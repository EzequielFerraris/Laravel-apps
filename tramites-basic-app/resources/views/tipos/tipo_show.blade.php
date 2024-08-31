<x-layout>

<div>
    <h1>Tipo: {{ $tipo->nombre }}</h1>
    <p>Id: {{ $tipo->id }}</p>
</div>

<div>
    <p>Tramites:</p>
</div>

 <div>
    <form action="{{ route('tipos.edit', $tipo->id) }}">
        <input type="submit" value="Editar" />
    </form>
    
    <form method='post' action="{{ route('tipos.destroy', $tipo->id)}}">
        @csrf
        @method('DELETE')
        
        <input type="submit" value="Archivar" />
    </form>
</div> 


<div>
    <a href="{{ route('tipos.index')}}">Volver</a>
</div>

</x-layout>
