<?php
/* Smarty version 3.1.39, created on 2022-10-28 14:29:09
  from 'C:\xampp2\htdocs\turnoFacil\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635bcb15845340_66318759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbaf15412c1b7865b0d4a4797ff50a3d2151da7e' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\turnoFacil\\templates\\register.tpl',
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
function content_635bcb15845340_66318759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


     <h2>Registro</h2>
        <form action='regUser' method="POST">
            <input type="text" name="nombre" placeholder="Ingrese Nombre"/>
            <input type="password" name="password" placeholder="Ingrese su password..."/>
            <button>Crear cuenta</button>
        </form>

        
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
