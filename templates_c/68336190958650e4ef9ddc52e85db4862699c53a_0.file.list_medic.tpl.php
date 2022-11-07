<?php
/* Smarty version 3.1.39, created on 2022-11-08 00:11:16
  from 'C:\Program Files\xampp\htdocs\metodologia\turnoFacil\templates\list_medic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63699094aae492_63467984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68336190958650e4ef9ddc52e85db4862699c53a' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\metodologia\\turnoFacil\\templates\\list_medic.tpl',
      1 => 1667862556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63699094aae492_63467984 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul class="list-group list-unstyled mt-5">
     <label id="a" class="title">Lista de Medicos</label>


     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medics']->value, 'medic');
$_smarty_tpl->tpl_vars['medic']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medic']->value) {
$_smarty_tpl->tpl_vars['medic']->do_else = false;
?>
          <li class='list-group-item'><a class='btn' href='detalleMd/<?php echo $_smarty_tpl->tpl_vars['medic']->value->id_medico;?>
'><?php echo $_smarty_tpl->tpl_vars['medic']->value->nombre;?>
 -
                    <?php echo $_smarty_tpl->tpl_vars['medic']->value->id_secretaria;?>
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
