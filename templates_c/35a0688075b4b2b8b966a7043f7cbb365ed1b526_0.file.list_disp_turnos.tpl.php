<?php
/* Smarty version 3.1.39, created on 2022-11-07 22:17:17
  from 'C:\Program Files\xampp\htdocs\metodologia\turnoFacil\templates\list_disp_turnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_636975dd1dfd90_89857731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35a0688075b4b2b8b966a7043f7cbb365ed1b526' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\metodologia\\turnoFacil\\templates\\list_disp_turnos.tpl',
      1 => 1667855760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_636975dd1dfd90_89857731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <label id="a" class="title">Turnos disponibles</label>
        <?php if ((isset($_SESSION['USER_ID']))) {?>
        <a class='btn btn-danger' href='crearDisp'>Crear</a> 
        <?php }?>
        <ul class="list-group list-unstyled mt-5">
          
 
           
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turns']->value, 'turn');
$_smarty_tpl->tpl_vars['turn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['turn']->value) {
$_smarty_tpl->tpl_vars['turn']->do_else = false;
?>         
                    <li class='list-group-item'><?php echo $_smarty_tpl->tpl_vars['turn']->value->dia;?>
 de <?php echo $_smarty_tpl->tpl_vars['turn']->value->horario_inicio;?>
 hasta <?php echo $_smarty_tpl->tpl_vars['turn']->value->horario_fin;?>
 
                        <?php if ((isset($_SESSION['USER_ID']))) {?>

                            <a class='btn btn-danger' href='borrarDisp/<?php echo $_smarty_tpl->tpl_vars['turn']->value->id_disp;?>
/<?php echo $_smarty_tpl->tpl_vars['turn']->value->id_medico;?>
'>Borrar</a>
                            <a class='btn btn-primary' href='modificarDisp/<?php echo $_smarty_tpl->tpl_vars['turn']->value->id_disp;?>
/<?php echo $_smarty_tpl->tpl_vars['turn']->value->id_medico;?>
'>Modificar</a>


                        <?php }?>            
                    </li>
                    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
        
   </ul>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
