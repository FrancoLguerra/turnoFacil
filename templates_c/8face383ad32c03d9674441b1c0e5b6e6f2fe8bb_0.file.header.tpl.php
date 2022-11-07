<?php
/* Smarty version 3.1.39, created on 2022-10-28 14:28:17
  from 'C:\xampp2\htdocs\turnoFacil\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_635bcae1357688_45221059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8face383ad32c03d9674441b1c0e5b6e6f2fe8bb' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\turnoFacil\\templates\\header.tpl',
      1 => 1666958263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_635bcae1357688_45221059 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <base href=<?php echo BASE_URL;?>
>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brawls</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

</head>
<!--



-->

<body>
<header class="header">

<div class=" contenedor">
  
    <div class="barra">
      
        <nav class="navegacion">
            <a href="medicos-a-cargo" class="navegacion_link">Obt medicos</a>
           
            <?php if (!(isset($_SESSION['USER_ID']))) {?>

            <a href="login" class="navegacion_link">Login</a>
            <?php }?>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <div class="dropdown ">

                    <a class="btn btn-secondary dropdown-toggle selectOpt " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Elegir Acción
                    </a>
                     <ul class="dropdown-menu selectOpt " aria-labelledby="dropdownMenuLink">
                        <li> <a class="nav-link active " aria-current="page" href="obtForm">SubirBr</a>   </li>
                        <li><a class="nav-link active " aria-current="page" href="formRols">Subir Rol</a></li>
    
                    </ul>
            </div>                      
                    
            <?php }?>
        </nav>
    </div>

    <div class="header__grid">
        <div class="header__texto">
        <?php if (!(isset($_SESSION['USER_ID']))) {?>
            
            
            <a class="header_boton" href="register" >Obtener Cuenta</a>
            <?php } else { ?>

             
        
                <a class="header_boton" href="logout"> <?php echo $_SESSION['USER_ID'];?>
</a>
            <?php }?>
        </div>


    </div>
</div>
</header>

    <!-- inicio de contenido principal -->
<div class="main_contenedor"><?php }
}
