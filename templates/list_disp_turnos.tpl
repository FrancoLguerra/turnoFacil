{include file="header.tpl"}
     <label id="a" class="title">Turnos disponibles</label>
        {if isset($smarty.session.USER_ID)}
        <a class='btn btn-danger' href='crearDisp'>Crear</a> 
        {/if}
        <ul class="list-group list-unstyled mt-5">
          
 
           
        {foreach from=$turns  item=turn}         
                    <li class='list-group-item'>{$turn->dia} de {$turn->horario_inicio} hasta {$turn->horario_fin} 
                        {if isset($smarty.session.USER_ID)}
                            <a class='btn btn-danger' href='borrarDisp/{$turn->id_disp}'>Borrar</a>
                            <a class='btn btn-primary' href='modificarDisp/{$turn->id_disp}/{$turn->id_medico}'>Modificar</a>
                        {/if}            
                    </li>
                    
        {/foreach}
        
        
   </ul>

{include file="footer.tpl"}