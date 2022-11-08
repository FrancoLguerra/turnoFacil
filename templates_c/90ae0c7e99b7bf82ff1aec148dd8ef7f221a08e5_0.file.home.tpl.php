<?php
/* Smarty version 3.1.39, created on 2022-11-08 00:03:24
  from 'C:\Program Files\xampp\htdocs\metodologia\turnoFacil\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63698ebc000825_42286480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90ae0c7e99b7bf82ff1aec148dd8ef7f221a08e5' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\metodologia\\turnoFacil\\templates\\home.tpl',
      1 => 1667862193,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63698ebc000825_42286480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="container-hm">

    <div class="container-home glass">
        <div class="container-title">
            <h3>Turno</h3>
            <h3 class="amarillo">Facil</h3>
        </div>
        <div class="container-item-home">

            <div class="container-ingresar input-group mb-3">
                <input type="text" class="form-control" placeholder="Ingrese su DNI"
                    aria-label="Ingrese su DNI" aria-describedby="button-addon2">
                <button class="btn btn-secondary" type="button" id="button-addon2">Button</button>
            </div>

            <div class="container-img">
                <img src="<?php echo BASE_URL;?>
/assets/img-hero.jpg">
            </div>



        </div>

    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
