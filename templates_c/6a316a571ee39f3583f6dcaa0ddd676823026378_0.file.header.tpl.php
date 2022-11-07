<?php
/* Smarty version 3.1.39, created on 2022-11-08 00:06:37
  from 'C:\Program Files\xampp\htdocs\metodologia\turnoFacil\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_63698f7d26e007_57697686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a316a571ee39f3583f6dcaa0ddd676823026378' => 
    array (
      0 => 'C:\\Program Files\\xampp\\htdocs\\metodologia\\turnoFacil\\templates\\header.tpl',
      1 => 1667862396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63698f7d26e007_57697686 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href=" <?php echo BASE_URL;?>
/style/styles.css">

</head>
<!--



-->

<body>
    <header class="header">

        <div class=" contenedor">

            <div class="barra">



                <ul class="nav">
                <li class="nav-item">
                <a href="home" class="nav-link ">Home</a>
                </li>
                    <?php if (!(isset($_SESSION['USER_ID']))) {?>
                        <li class="nav-item">
                            <a href="login" aria-current="page" class="nav-link ">Trabajo aqui</a>
                        </li>
                        
                    <?php }?>
                    <?php if ((isset($_SESSION['USER_ID']))) {?>
                        <li class="nav-item">
                        <a href="medicos-a-cargo" class="nav-link ">Obt medicos</a>
                        </li>
                        <li class="nav-item">
                        <a href="logout" class="nav-link ">Log Out</a>
                        </li>
                    <?php }?>
                    
                </ul>


            </div>
        </div>
    </header>

    <!-- inicio de contenido principal -->
<div class="main_contenedor"><?php }
}
