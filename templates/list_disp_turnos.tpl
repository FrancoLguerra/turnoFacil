{include file="header.tpl"}
     <label id="a" class="title">Turnos disponibles</label>
          
        <ul class="list-group list-unstyled mt-5">
          
         
           
        {foreach from=$turns  item=turn}         
                    <li class='list-group-item'>{$turn->dia} de {$turn->horario_inicio} hasta {$turn->horario_fin} 
                                            
                    </li>
                    
        {/foreach}
        
        
   </ul>

{include file="footer.tpl"}