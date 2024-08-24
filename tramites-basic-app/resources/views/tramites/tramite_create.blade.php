<x-layout>

    <div>
        <h1>Nuevo trámite</h1>
    </div>

    <div>
        <a href="{{ route('tramite_home') }}">Volver</a>
    </div>
    
    <x-errors />
    
    <div>
        <form method="POST" action="{{ route('tramites.store')}}">

            <x-tramites.form :tramite="$tramite" :tipos="$tipos" :sectores="$sectores"/>

        </form>
    </div>
    
    
</x-layout>