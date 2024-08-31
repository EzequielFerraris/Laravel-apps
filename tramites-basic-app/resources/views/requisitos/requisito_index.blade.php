<x-layout>

    <div>
        <h1>Tipos de trámites</h1>
    </div>

    <div>
        <a href="{{ route('tipos.home') }}">Volver</a>
    </div>
    
    <div>
    @foreach ($tipos as $tipo)
        <h2><a href="{{ route('tipo.show', $tramite->id) }}"> {{ $tipo->nombre }} </a></h2>  
        
    @endforeach
    </div>
    
    <div>{{ $tipos->links('vendor.pagination.simple-tailwind')}}</div>
    

</x-layout>