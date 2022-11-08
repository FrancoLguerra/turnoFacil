<?php
/* Smarty version 3.1.39, created on 2022-11-08 00:04:21
  from 'C:\Program Files\xampp\htdocs\metodologia\turnoFacil\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63698ef52aec10_04609817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6669893f9b1e9929d78ce570ce951581ade1e34d' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\metodologia\\turnoFacil\\templates\\formLogin.tpl',
      1 => 1667862240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63698ef52aec10_04609817 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-5 w-25 mx-auto">
<label class="title">Logearse</label>
    <form method="POST" class="form glass" action="verify">
        <div class="form-group">
            <label for="nombre">nombre</label>
            <input type="text" required class="form-control boton" id="nombre" name="nombre" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control boton" id="password" name="password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
        <div class="alert alert-danger mt-3">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>
        
        <button type="submit" class="btn btn-primary mt-3 boton">Entrar</button>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
