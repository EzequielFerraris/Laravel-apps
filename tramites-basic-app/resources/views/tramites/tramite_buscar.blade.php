<x-layout>

    <div>
        <h1>Buscar trámite</h1>
    </div>

    <div>
        <a href="{{ route('tramites.home') }}">Volver</a>
    </div>
    
    <x-errors />
    
    <div>
        <p>BUSCAR</p>

        <form action="{{ route('tramites.search') }}" method="GET">
            <input type="text" name="search" placeholder="Buscar trámites">
            <button type="submit">Buscar</button>
        </form>
        
    </div>
    
    
</x-layout>