{include file="header.tpl"}

<main class="container-hm">

    <div class="container-home glass">
        <div class="container-title">
            <h3>Turno</h3>
            <h3 class="amarillo">Facil</h3>
        </div>
        {if isset($smarty.session.USER_ID)}
        
        <p> Bienvenido {$smarty.session.USER_NOMBRE}</p>
        <div class="container-item-home">     
           
            <div class="container-img">
                <img src="{BASE_URL}/assets/img-hero.jpg">
            </div>
    
        </div>
        {/if}
    </div>
</main>


{include file="footer.tpl"}