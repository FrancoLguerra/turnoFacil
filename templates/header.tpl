<!DOCTYPE html>
<html lang="en">

<head>
    <base href={BASE_URL}>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TurnoFacil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href=" {BASE_URL}/style/styles.css">

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
                    {if !isset($smarty.session.USER_ID)}
                        <li class="nav-item">
                            <a href="login" aria-current="page" class="nav-link ">Trabajo aquí</a>
                        </li>

                    {/if}
                    {if isset($smarty.session.USER_ID)}

                        {if  $smarty.session.USER_ROL == 'S'}
                            <li class="nav-item">
                                <a href="medicos-a-cargo" class="nav-link ">Lista médicos</a>
                            </li>

                            <li class="nav-item">
                                <a href="formTurno" class="nav-link ">Form turno</a>
                            </li>


                        {elseif $smarty.session.USER_ROL == 'M'}
                            <li class="nav-item">
                                <a href="showTurns" class="nav-link ">Ver turnos</a>
                            </li>


                        {/if}
                        <li class="nav-item">
                        <a href="logout" class="nav-link ">Log Out</a>
                        </li>
                        
                        <li class="nav-item  ">
                            <label href="logout" class="nav-link ">Bienvenido: {$smarty.session.USER_NOMBRE}</label>
                        </li>
                    {/if}


                </ul>


            </div>
        </div>
    </header>

    <!-- inicio de contenido principal -->
<div class="main_contenedor">