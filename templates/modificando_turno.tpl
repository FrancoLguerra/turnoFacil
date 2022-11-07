{include file='./header.tpl'}

<h1> {$titulo} </h1>

<form name='formulario' method='GET' action='modificarDisp/{$turno->id_disp}/{$turno->id_medico}'>
    <div class="mb-3">
        <label for="horario_inicio" class="form-label">Horario Inicio</label>
        <input type='time' name='horario_inicio' value='{$turno->horario_inicio}' class="form-control">
        <label for="horario_fin" class="form-label">Horario Fin</label>
        <input type='time' name='horario_fin' value='{$turno->horario_fin}' class="form-control">
        <label for='' >
        <select name="duracion" class="form-control" placeholder="Duración" data-toggle="tooltip" data-placement="top" title="Duración del turno">
                <option value="15">15 min</option>
                <option value="30">30 min</option>
                <option value="45">45 min</option>
        </select>
    </div>
    <input type='submit' value='Modificar' class="btn btn-primary" />
    <a href='detalleMd/{$turno->id_medico}' class="btn btn-secondary">Volver<a/>
</form>

{include file='./footer.tpl'}