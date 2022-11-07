<?php
/* Smarty version 3.1.39, created on 2022-10-28 14:28:22
  from 'C:\xampp2\htdocs\turnoFacil\templates\list_medic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635bcae65e5531_41356244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73108b00fe759fc0f08d2c00e55586f497b1dffe' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\turnoFacil\\templates\\list_medic.tpl',
      1 => 1666958263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_635bcae65e5531_41356244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
  
     <label id="a" class="title">Lista de Medicos</label>
        <ul class="list-group list-unstyled mt-5">
 
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medics']->value, 'medic');
$_smarty_tpl->tpl_vars['medic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medic']->value) {
$_smarty_tpl->tpl_vars['medic']->do_else = false;
?>        
                    <li class='list-group-item'><a class='btn'  href='detalleMd/<?php echo $_smarty_tpl->tpl_vars['medic']->value->id_medico;?>
'><?php echo $_smarty_tpl->tpl_vars['medic']->value->nombre;?>
 - <?php echo $_smarty_tpl->tpl_vars['medic']->value->id_secretaria;?>
 - <?php echo $_smarty_tpl->tpl_vars['medic']->value->especialidad;?>
 -<?php echo $_smarty_tpl->tpl_vars['medic']->value->obra_social;?>
 </a>
                        <?php if ((isset($_SESSION['USER_ID']))) {?>
                             <a class='btn btn-danger' href='borrarMd/<?php echo $_smarty_tpl->tpl_vars['medic']->value->id_medico;?>
'>Borrar</a>
                             <a class='btn btn-primary' href='obtModMd/<?php echo $_smarty_tpl->tpl_vars['medic']->value->id_medico;?>
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
