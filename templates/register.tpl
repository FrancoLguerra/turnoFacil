{include file="header.tpl"}


     <h2>Registro</h2>
        <form action='regUser' method="POST">
            <input type="text" name="nombre" placeholder="Ingrese Nombre"/>
            <input type="password" name="password" placeholder="Ingrese su password..."/>
            <input list="rol" name="rol">
                <datalist id="rol">
                    <option value="S">
                    <option value="M">
                </datalist>
            <button>Crear cuenta</button>
        </form>

        
{include file="footer.tpl"}
