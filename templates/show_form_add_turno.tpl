{include file="header.tpl"}


     <h2>Registrar turno</h2>
     
        <form action='addTurno' method="POST">
            <div class='form-group'>
                <label>Medico</label>
                <select name='medico' class='form-control boton'>
                    {foreach from=$medics  item=medic}

                        <option value='{$medic->id_medico}'>{$medic->nombre}</option>

                    {/foreach}
                </select>
            </div>
            
            <div class="form-group" style="margin-top: 3rem ;">
                <input type="text" name="nombre" placeholder="Ingrese Nombre"/>
                <input type="text" name="apellido" placeholder="Ingrese Apellido"/>
                <input type="text" name="obra_social" placeholder="Ingrese Obra Social"/>
                <input type="text" name="dni" placeholder="Ingrese Dni"/>
                <input type="text" name="dia" placeholder="Ingrese Dia"/>
                <input type="text" name="hs" placeholder="Ingrese Horario"/>
            
            </div>
            <button>Crear Turno</button>
        </form>

        
{include file="footer.tpl"}
