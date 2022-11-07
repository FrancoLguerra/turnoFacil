<?php
/* Smarty version 3.1.39, created on 2022-11-07 22:17:03
  from 'C:\Program Files\xampp\htdocs\metodologia\turnoFacil\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_636975cff41bc3_32757035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37101447d176166bea39fc6362b2f766fc152cd' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\metodologia\\turnoFacil\\templates\\register.tpl',
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
function content_636975cff41bc3_32757035 (Smarty_Internal_Template $_smarty_tpl) {
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
