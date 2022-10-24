{include 'header.tpl'}
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

        {if $error} 
        <div class="alert alert-danger mt-3">
            {$error}
        </div>
        {/if}
        
        <button type="submit" class="btn btn-primary mt-3 boton">Entrar</button>
    </form>
</div>

{include file='footer.tpl'}

