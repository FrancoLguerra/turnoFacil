{include file="header.tpl"}


<ul class="list-group list-unstyled mt-5">
     <label id="a" class="title">Turnos </label>

        <ul class="list-group list-unstyled mt-5">
 
        
        {foreach from=$turns  item=turn}        
                    <li class='list-group-item'>
                           
                           <a class='btn'  > Comprobante: {$turn->nro_comprobante} - Nombre: {$turn->nombre_paciente} - Obra social:  {$turn->obra_social} - Dia  {$turn->dia}- Hs  {$turn->hs}  </a>
                      
                        </li>
            {/foreach}
        
        
   </ul>

{include file="footer.tpl"}
