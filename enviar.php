
<?php

$destino="da.cruz@ujn.edu.hn";
$nombre= $_POST["nombre"];
$apellido= $_POST["apellido"];
$estado= $_POST["estado"];
$correo= $_POST["correo"];
$ciudad= $_POST["ciudad"];
$telefono= $_POST["telefono"];
$informacion= $_POST["gustos"];
$productos= $_POST["productos"]

$contenido="Nombre: ".$nombre . "\nApellido: ".$apellido . "\nEstado Civil: ".$estado . "\nE-mail: ".$correo . "\nCiudad: ".$ciudad . "\nTelefono: ".$telefono . "\nInforamción: ".$informacion . "\nProductos a Comprar: ".$productos;

mail($destino, "Nuevo Cliente", $contenido);
header("Location:Formulario.html"); 

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="Blog Algo Bonito"/>
        <link href="./formulario.css" rel="stylesheet" type="text/css"/>
        <link href="./resets.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet"/>
        <title>Formulario</title>
    </head>

    <body>
        <header>
            <a calss="logo">
                <img id="unico" src="./Imagenes/Algo_Bonito.png" width="80px" />
            </a>
            
            <nav>
                <span>"La felicidad de tu vida depende de la calidad de tus pensamientos."</span>
            </nav>  
        
            <div class="otros">
                <a href="./Blog.html"><img  src="./Imagenes/inicio.png" width="50px"/></a>
            </div>
        
        </header>

        <main>
            <section class="formulario">
            <h1>
                Formulario de Registro
            </h1>
            <form action="./enviar.php" method="POST">
                <div class="clase1">
                    <label>Nombre</label>
                    <input type="text" name="nombre" required value="" placeholder="Escribe solo letras" autocomplete>
                </div>
                <div class="clase1">
                    <label>Apellido </label>
                    <input type="text" name="apellido" required value="" placeholder="Escribe solo letras" autocomplete>
                </div>
                <div class="clase1">
                    <label>Estado Laboral</label>
                    <select name="estado">
                        <option selected disabled>Seleccione una Opción</option>
                        <option>Desempleado</option>
                        <option>Trabajo</option>
                        <option>Medio Tiempo</option>
                    </select>
                </div>
                <div class="clase1">
                    <label>E-mail</label>
                    <input type="email" name="correo" required value="" placeholder="Ingrese su correo electronico" autocomplete>
                </div>
                <div class="clase1">
                    <label>Ciudad</label>
                    <input type="text" name="ciudad" required value="" placeholder="Su contraseña es única" autocomplete>
                </div>
                <div class="clase1">
                    <label>Telefono</label>
                    <input type="number" name="telefono" required value="" placeholder="Escribe solo letras" autocomplete>
                </div>
                <div class="clase2">
                    <label>¿Desea recibir información relacionada con tus gustos?</label>
                    <div><input type="radio" name="gustos" required value="" autocomplete>Si</div>
                    <div><input type="radio" name="gustos" required value="" autocomplete>No</div>
                </div>
                <div class="privacidad">
                    <input type="checkbox" required>
                    <Label>He leido y Acepto la Politica de Privacidad</Label>
                </div>
                <div class="enviar">
                    <button>ENVIAR</button>
                </div>
            </form>
            </section>
            <section class="tabla">
                <h2>Ventajas de estar Registrado</h2>
                <div class="tabla1">
                <table cellspacing="0">
                    <tr>
                        <th></th>
                        <th>Registrado</th>
                        <th>No Registrado</th>
                    </tr>
                    <tr>
                        <td align="center">Comentar</td>
                        <td align="center"><img src="./Imagenes/cheque.png"/></td>
                        <td align="center"><img src="./Imagenes/cheque.png"/></td>
                    </tr>
                    <tr>
                        <td align="center">Recomendaciones</td>
                        <td align="center"><img src="./Imagenes/cheque.png"/></td>
                        <td align="center"><img src="./Imagenes/equis.png"/></td>
                    </tr>
                    <tr>
                        <td align="center">Ayuda Personal</td>
                        <td align="center"><img src="./Imagenes/cheque.png"/></td>
                        <td align="center"><img src="./Imagenes/equis.png"/></td>
                    </tr>
                    <tr>
                        <td align="center">Sorteos</td>
                        <td align="center"><img src="./Imagenes/cheque.png"/></td>
                        <td align="center"><img src="./Imagenes/equis.png"/></td>
                    </tr>
                </table>
            </div>
            </section>
        </main>

        <footer>
            <section class="final">
                <div class="redes">
                <div class="final1">
                <img src="./Imagenes/faceebook.png"/>
                <img src="./Imagenes/instagram.png"/>
                <img src="./Imagenes/twitter.png"/>
                <img src="./Imagenes/washapp.png"/>
              </div>
    
              <div class="final2">
                <a>@AlgoBonito</a>
                <a>@Algo_Bonito</a>
                <a>@AlgoBonito_27</a>
                <a>5555-5555</a>
              </div>
            </div>
    
              <div class="final3">
                  <a>algobonito@gmail.com</a>
                  <a>2550-0458</a>
                  <a></a>
                  <a></a>
                  <a>Politica de Privacidad</a>
              </div>
            </section>
            </footer>

    </body>
</html>