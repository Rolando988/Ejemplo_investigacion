<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
	<link rel="stylesheet" href="estilos.css">
    <title>Ejemplos</title>  
  </head>
  <body>
     <header style="height: 70px">
     </header> 
  
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
            <?php
   $mensaje= null;
   $mensaje1= null;
   $mensaje2= null;
   $mensaje3= null;

   //Expresion para nombre
if( isset($_POST['validar']) ) {
$nombre=$_POST["nombre"];
if ($nombre == "")
{
$mensaje="El campo es requerido";
}
//La expresion hace que la primera letra escrita tiene que ser mayuscula
else if(!preg_match("/^[A-ZÁÉÍÓÚ][a-záéíóú]*$/", $nombre))
{
  $mensaje ="La primera letra tiene que ser mayuscula";
}
else
{
  $mensaje = "Escrito correctamente";
  echo "<p>{$nombre}</p>";

}
}

//Expresion para Telefono
if( isset($_POST['validar']) )
{
  $telefono=$_POST["telefono"];
 if($telefono == "")
{
  $mensaje1 ="El campo es requerido";
}
//Solo se pueden ingresar numeros sin espacios ni guiones
else if(!preg_match("/^[0-9]+$/", $telefono))
{
  $mensaje1 ="Solo se pueden escribir numeros sin guiones";
}
else
{
  $mensaje1 = "Escrito correctamente";
  echo "<p>{$telefono}</p>";

}
}
//Expresion para fecha
if( isset($_POST['validar']) )
{
  $fecha=$_POST["fecha"];

 if($fecha == "")
{
  $mensaje2 ="El campo es requerido";
}
else if(!preg_match("/^([0-9]{2}\/[0-9]{2}\/[0-9]{4})$/", $fecha))
{
  $mensaje2 ="Fecha formato: 12/12/2014";
}
else
{
  $mensaje2 = "Escrito correctamente";
  echo "<p>{$fecha}</p>";


}
}
// expresion para email 
if( isset($_POST['validar']) )
{
  $correo=$_POST["correo"];
 if($correo == "")
{
  $mensaje3 ="El campo es requerido";
}
//Para filtrar emails email@mail.com, email.admin@mail.com,
else if(!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $correo))
{
  $mensaje3 ="El formato tiene que ser email@mail.com, email.admin@mail.com,";
}
else
{
  $mensaje3 = "Escrito correctamente";
  echo "<p>{$correo}</p>";

}
}
?>
        <div class="card-header">Formulario de prueba</div>
        <div class="card-body">
        <form id="form1" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="post" class="needs-validation" novalidate >
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <span>
                      <strong><?php echo $mensaje ?> </strong>
                      </span>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="telefono">Telefono</label>
                      <input name="telefono" type="text" class="form-control" id="telefono" placeholder="" value="" required> 
                      <span>
                <strong><?php echo $mensaje1 ?> </strong>
                     </span> 
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="fecha">Fecha de Nacimiento</label>
                      <input name="fecha" type="text" class="form-control" id="fecha" placeholder="" required>
                      <span>
                      <strong><?php echo $mensaje2 ?> </strong>
                      </span>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="correo">Correo Electronico</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="correo" type="text" class="form-control" id="correo" placeholder="" aria-describedby="inputGroupPrepend" required> 
                      </div>
                      <span>
                        <strong><?php echo $mensaje3 ?> </strong>
                        </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>

                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit" name="validar">Enviar</button>
                  
                </form>
                        </div>   
    </div>
            </div>       
        </div>                  
    </div>
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
  	
  </body>
</html>