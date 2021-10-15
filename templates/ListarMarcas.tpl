{include file='templates/header.tpl'}

    {if !empty($marcas)}
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <td>Id Marca</td>
                    <td>Nombre</td>
                    <td>Listas</td>
                </tr>
            </thead>

            <tbody>
                {foreach from=$marcas item=$marca}
                    <tr>
                        <td>{$marca->idMarca}</td>
                        <td>{$marca->nombre}</td>
                        <td><a class="btn btn-success" href="{BASE_URL}autos-marca/{$marca->idMarca}">Ver Autos</a> </td>
                    </tr>                   
                {/foreach}
            </tbody>
        </table>
    {else}

        <h2>No hay datos</h2>

    {/if}

{include file='templates/footer.tpl'}    


  </body>
</html>