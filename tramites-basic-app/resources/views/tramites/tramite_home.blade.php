<x-layout>

    <div>
        <h1>Gestión de trámites</h1>
    </div>
    
    <div>
        <a href="{{ route('home')}}">Volver</a>
    </div>
    
    <div>
        <ul>
            <li><a href="{{ route('tramites.index') }}">Ver trámites</a></li>
            <li><a href="">Buscar trámite</a></li>
            <li><a href="{{ route('tramites.create') }}">Crear trámite</a></li>
        </ul>
    </div>
    
</x-layout>