<?php
/* Smarty version 3.1.39, created on 2022-11-08 00:08:22
  from 'C:\Program Files\xampp\htdocs\metodologia\turnoFacil\templates\modificando_turno.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63698fe659bb92_98170243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3652306a0bfc19e1338e677791811a4a79c8f944' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\metodologia\\turnoFacil\\templates\\modificando_turno.tpl',
      1 => 1667855760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_63698fe659bb92_98170243 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1> <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>

<form name='formulario' method='GET' action='modificarDisp/<?php echo $_smarty_tpl->tpl_vars['turno']->value->id_disp;?>
/<?php echo $_smarty_tpl->tpl_vars['turno']->value->id_medico;?>
'>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Horario Inicio</label>
        <input type='text' name='horario_inicio' value='<?php echo $_smarty_tpl->tpl_vars['turno']->value->horario_inicio;?>
' class="form-control">
        <label for="exampleInputEmail1" class="form-label">Horario Fin</label>
        <input type='text' name='horario_fin' value='<?php echo $_smarty_tpl->tpl_vars['turno']->value->horario_fin;?>
' class="form-control">
    </div>
    <input type='submit' value='Modificar' class="btn btn-primary" />
    <a href='detalleMd/<?php echo $_smarty_tpl->tpl_vars['turno']->value->id_medico;?>
' class="btn btn-secondary">Volver<a/>
</form>

<?php $_smarty_tpl->_subTemplateRender('file:./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
