<x-layout>

    <div>
        <h1>Editar trámite</h1>
    </div>
    
    <x-errors />

    <div>
        <form method="POST" action="{{ route('tramites.update', $tramite)}}">
            
            @method('PATCH')
            <x-tramites.form :tramite="$tramite" :tipos="$tipos" :sectores="$sectores"/>
    
        </form>
    </div>
        
    
</x-layout>