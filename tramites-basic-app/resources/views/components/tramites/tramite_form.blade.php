    @csrf

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" 
    value="{{ old('nombre', $tramite->nombre ?? '') }}">
    
    <label for="tipo">Tipo:</label>
        <select name="tipo_id" id="tipo_id">
            @foreach ($tipos as $tipo)
                <option value="{{ $tipo->id }}" {{ $tramite->tipo_id == $tipo->id ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
            @endforeach
        </select>
    
    <label for="sector">Sector:</label>
        <select name="sector_id" id="sector_id">
            @foreach ($sectores as $sector)
                <option value="{{ $sector->id }}" {{ $tramite->sector_id == $sector->id ? 'selected' : '' }}>{{ $sector->nombre }}</option>
            @endforeach
        </select>
    
    <label for="descripcion">Descripción</label>
    <textarea name="descripcion" id="descripcion"> 
        {{ old('descripcion', $tramite->descripcion ?? '') }} 
    </textarea>
    
    <button>Guardar</button>

