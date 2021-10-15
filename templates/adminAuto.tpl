{include file='templates/header.tpl'}

    {if !empty($autos)}
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Modelo</td>
                    <td>Año</td>
                    <td>Tipo</td>
                    <td>Marca</td>
                    <td>Modificar</td>
                    <td>Eliminar</td>

                </tr>
            </thead>

            <tbody>
            
                {foreach from=$autos item=$auto}
                    <tr>
                        <td>{$auto->idAuto}</td>
                        <td>{$auto->modelo}</td>
                        <td>{$auto->anio}</td>
                        <td>{$auto->tipo}</td>
                        <td>{$auto->nombre}</td>
                        <td><a class="btn btn-success" href="{BASE_URL}auto/{$auto->idAuto}">Modificar</a> </td>
                        <td><a class="btn btn-sm btn-danger" href="{BASE_URL}Eliminar/{$auto->idAuto}">Eliminar</a></td>
                        
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