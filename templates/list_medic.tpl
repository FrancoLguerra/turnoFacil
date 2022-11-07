{include file="header.tpl"}


<ul class="list-group list-unstyled mt-5">
     <label id="a" class="title">Lista de Medicos</label>


     {foreach from=$medics  item=medic}
          <li class='list-group-item'><a class='btn' href='detalleMd/{$medic->id_medico}'>{$medic->nombre} -
                    {$medic->id_secretaria} - {$medic->especialidad} -{$medic->obra_social} </a>
               {if isset($smarty.session.USER_ID)}
                    <a class='btn btn-danger' href='borrarMd/{$medic->id_medico}'>Borrar</a>
                    <a class='btn btn-primary' href='obtModMd/{$medic->id_medico}'>Modificar</a>

               {/if}
          </li>
     {/foreach}


</ul>

{include file="footer.tpl"}