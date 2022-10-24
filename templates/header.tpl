<!DOCTYPE html>
<html lang="en">

<head>
    <base href={BASE_URL}>
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
           
            {if !isset($smarty.session.USER_ID)}

            <a href="login" class="navegacion_link">Login</a>
            {/if}
            {if isset($smarty.session.USER_ID)}
            <div class="dropdown ">

                    <a class="btn btn-secondary dropdown-toggle selectOpt " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Elegir Acción
                    </a>
                     <ul class="dropdown-menu selectOpt " aria-labelledby="dropdownMenuLink">
                        <li> <a class="nav-link active " aria-current="page" href="obtForm">SubirBr</a>   </li>
                        <li><a class="nav-link active " aria-current="page" href="formRols">Subir Rol</a></li>
    
                    </ul>
            </div>                      
                    
            {/if}
        </nav>
    </div>

    <div class="header__grid">
        <div class="header__texto">
        {if !isset($smarty.session.USER_ID)}
            
            
            <a class="header_boton" href="register" >Obtener Cuenta</a>
            {else}

             
        
                <a class="header_boton" href="logout"> {$smarty.session.USER_ID}</a>
            {/if}
        </div>


    </div>
</div>
</header>

    <!-- inicio de contenido principal -->
<div class="main_contenedor">