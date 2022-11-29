{include file="header.tpl"}

<div class="filtrar">
   <a class="filtroDoc" href="turnosFiltrados/mañana/2">Mañana</a>
   <a class="filtroDoc" href="turnosFiltrados/tarde/2">Tarde</a>
   <a class="filtroDoc" href="showTurns">Todos</a>
</div>






<div class="d-flex justify-content-between">
<a class="btn btn-primary" href="./showTurns/1" role="button">Lunes</a>
<a class="btn btn-primary" href="./showTurns/2" role="button">Martes</a>
<a class="btn btn-primary" href="./showTurns/3" role="button">Miércoles</a>
<a class="btn btn-primary" href="./showTurns/4" role="button">Jueves</a>
<a class="btn btn-primary" href="./showTurns/5" role="button">Viernes</a>
</div>
<label id="a" class="title">Turnos </label>
<ul class="list-group list-unstyled mt-5">
        
         {foreach from=$turns  item=turn}        
            <li class='list-group-item'>
                           
               <a class='btn'  > Comprobante: {$turn->nro_comprobante} - Nombre: {$turn->nombre_paciente}, {$turn->apellido_paciente}  - Obra social:  {$turn->obra_social} - Dia  {$turn->dia}/12-  {$turn->hs}  Hs  </a>
                      
            </li>
         {/foreach}
        
        
   </ul>

{include file="footer.tpl"}
