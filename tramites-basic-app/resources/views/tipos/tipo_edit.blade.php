<x-layout>

    <div>
        <h1>Editar tipo de trámite</h1>
    </div>
    
    <x-errors />

    <div>
        <form method="POST" action="{{ route('tipos.update', $tipo)}}">
            
            @method('PATCH')
            <x-tipos.tipo_form />
    
        </form>
    </div>
        
    
</x-layout>