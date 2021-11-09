<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cementos Cruz Azul</title>
 </head>
 <body>
     <h1>Cruz Azul</h1>
        <form action="/CruzAzul/" method="POST">
            <input type="hidden" name="action" value="agregar">
            <input type="submit" value="Agregar Nuevo">
        </form>

     <table>
         <tr>
             <th>Nombre Material</th>
             <th>Unidad de Medida</th>
             <th>Precio</th>
             <th>Stock</th>
             <th>Total</th>
             <th>Accion</th>
         </tr>
         <?php
            // var_dump($datos);
            foreach($datos as $dato) {
                ?>
                <tr>
                    <td><?= $dato["nombreMaterial"]?></td>
                    <td><?= $dato["unidadMedida"]?></td>
                    <td><?= $dato["precio"]?></td>
                    <td><?= $dato["stock"]?></td>
                    <td><?= $dato["total"]?></td>
                    <td>
                        <form action="/CruzAzul/" method="POST">
                            <input type="hidden" name="action" value="editar">
                            <input type="hidden" name="id" value="<?= $dato['id_Material']?>">
                            <input type="submit" value="Editar">
                        </form>
                        <form action="/CruzAzul/" method="POST">
                            <input type="hidden" name="action" value="eliminar">
                            <input type="hidden" name="id" value="<?= $dato['id_Material']?>">
                            <input type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
     </table>
   
</body>
</html>