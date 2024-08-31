    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" 
    value="{{ old('nombre', $tramite->nombre ?? '') }}">
    
    <button>Guardar</button>

