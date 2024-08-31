<x-layout>

    <div>
        <h1>Gestión de tipos de trámites</h1>
    </div>
    
    <div>
        <a href="{{ route('home')}}">Volver</a>
    </div>
    
    <div>
        <ul>
            <li><a href="{{ route('tipos.index') }}">Ver tipos de trámites</a></li>
            <li><a href="{{ route('tipos.create') }}">Crear tipo de trámite</a></li>
        </ul>
    </div>
    
</x-layout>