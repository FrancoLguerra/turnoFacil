{include file="header.tpl"}

<main class="container-hm">

    <div class="container-home glass">
        <div class="container-title">
            <h3>Turno</h3>
            <h3 class="amarillo">Facil</h3>
        </div>
        {if !isset($smarty.session.USER_ID)}
        <div class="container-item-home">

            <div class="container-ingresar input-group mb-3">
                <input type="text" class="form-control" placeholder="Ingrese su DNI"
                    aria-label="Ingrese su DNI" aria-describedby="button-addon2">
                <button class="btn btn-secondary" type="button" id="button-addon2">Ingresar</button>
            </div>

            <div class="container-img">
                <img src="{BASE_URL}/assets/img-hero.jpg">
            </div>



        </div>
        {/if}
        {if isset($smarty.session.USER_ID)}
        <p>Bienvenido: {$smarty.session.USER_NOMBRE}</p>
        {/if}

    </div>
</main>


{include file="footer.tpl"}