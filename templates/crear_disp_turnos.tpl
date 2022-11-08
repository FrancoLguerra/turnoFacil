{include "header.tpl"}

    <div class="container-turno input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon3">Horas de inicio y fin del turno</span>
        </div>
        <form action="altaDisp" method="POST" autocomplete="off">
            <input type="time" class="form-control" id="hora-inicio" name="horario_inicio" placeholder="Hora de inicio" aria-label="Hora de inicio" aria-describedby="basic-addon3" required>
            <input type="time" class="form-control" id="hora-fin" name="horario_fin" placeholder="Hora de fin" aria-label="Hora de fin" aria-describedby="basic-addon3" required>
            <select name="dia" class="form-control" placeholder="Día" data-toggle="tooltip" data-placement="top" title="Día de la semana">
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miércoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
            </select>
            <button type="submit" class="btn btn-primary">
			    Crear turno
			</button>
            <input type="hidden" name="id_medico" value="{$id}">
        </form>
    </div>

{include "footer.tpl"}