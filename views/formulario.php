<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cementos Cruz Azul</title>
 </head>
 <body>
     <h1>
        <?= isset($material) ? 'Editar' : 'Agregar' ?> Material Nuevo
     </h1>
     <div class="conteiner"> 
         <form action="/CruzAzul/" method="POST">
             
             <div>
            <input type="text" name="nombre" value="<?= isset( $material[0]['nombreMaterial']) ? $material[0]['nombreMaterial'] : '' ?>" placeholder="Ingresa el nombre del material" />
             </div>

             <div>
                <input type="text" name="unidad" value="<?= isset( $material[0]['unidadMedida']) ? $material[0]['unidadMedida'] : '' ?>" placeholder="Ingresa la unidad de medida" />
             </div>

             <div>
                <input type="text" name="precio" value="<?= isset( $material[0]['precio']) ? $material[0]['precio'] : '' ?>" placeholder="Ingresa el precio" />
             </div>

             <div>
                <input type="text" name="stock" value="<?= isset( $material[0]['stock']) ? $material[0]['stock'] : '' ?>" placeholder="Ingresa el stock" />
             </div>

             <div >
                 <?php 
                    if(isset($material)){
                        ?>
                        <input type="hidden" name="action" value="actualizar">
                        <input type="hidden" name="id" value="<?= $material[0]['id_Material'] ?>">
                        <?php
                    }else{
                        ?>
                        <input type="hidden" name="action" value="crear">
                        <?php
                    }
                 ?>
                <button >
                <?= isset($material) ? 'Guardar' : 'Registrar' ?> Producto
                </button>
             </div>
         </form>
        
     </div>
     
</body>
</html>