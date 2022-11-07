<?php
/* Smarty version 3.1.39, created on 2022-10-28 14:29:58
  from 'C:\xampp2\htdocs\turnoFacil\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635bcb465517e2_99277078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4ff428439fbcabe248b1908c1e3e4790a793025' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\turnoFacil\\templates\\formLogin.tpl',
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
function content_635bcb465517e2_99277078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-5 w-25 mx-auto">
<label class="title">Logearse</label>
    <form method="POST" action="verify">
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
