<x-layout>

    <div>
        <h1>Nuevo tipo de trámite</h1>
    </div>

    <div>
        <a href="{{ route('tipos.home') }}">Volver</a>
    </div>
    
    <x-errors />
    
    <div>
        <form method="POST" action="{{ route('tipos.store') }}">

            <x-tipos.form />

        </form>
    </div>
    
    
</x-layout>