{include file='./header.tpl'}

<h1> {$titulo} </h1>

<form name='formulario' method='GET' action='modificarDisp/{$turno->id_disp}/{$turno->id_medico}'>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Horario Inicio</label>
        <input type='text' name='horario_inicio' value='{$turno->horario_inicio}' class="form-control">
        <label for="exampleInputEmail1" class="form-label">Horario Fin</label>
        <input type='text' name='horario_fin' value='{$turno->horario_fin}' class="form-control">
    </div>
    <input type='submit' value='Modificar' class="btn btn-primary" />
    <a href='detalleMd/{$turno->id_medico}' class="btn btn-secondary">Volver<a/>
</form>

{include file='./footer.tpl'}