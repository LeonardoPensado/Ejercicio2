<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cementos Cruz Azul</title>
 </head>
 <body>
     <h1>Agregar Material Nuevo</h1>
     <div class="conteiner"> 
         <form action="/CruzAzul/" method="POST">
             
             <div>
                <input type="text" name="nombre" placeholder="Ingresa el nombre del material" />
             </div>

             <div>
                <input type="text" name="unidad" placeholder="Ingresa la unidad de medida" />
             </div>

             <div>
                <input type="text" name="precio" placeholder="Ingresa el precio" />
             </div>

             <div>
                <input type="text" name="stock" placeholder="Ingresa el stock" />
             </div>

             <div >
                <input type="hidden" name="action" value="crear">
                <button >
                    Registrar Producto
                </button>
             </div>
         </form>
        
     </div>
     
</body>
</html>