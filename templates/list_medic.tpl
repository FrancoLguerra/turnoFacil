{include file="header.tpl"}


<ul class="list-group list-unstyled mt-5">
     <label id="a" class="title">Lista de Medicos</label>

        <ul class="list-group list-unstyled mt-5">
 
        
        {foreach from=$medics  item=medic}        
                    <li class='list-group-item'><a class='btn'  href='detalleMd/{$medic->id_medico}'>{$medic->nombre} - {$medic->especialidad} - {$medic->obra_social} </a>
                      
                        </li>
            {/foreach}
        
        
   </ul>

{include file="footer.tpl"}