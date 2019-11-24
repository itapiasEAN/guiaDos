<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>Identico | mensajes</title>
</head>
<body>
<div class="container">
      <header>
        <h1 class="text-center p-5">Bienvenido a identico</h1>

        <nav class="">
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <a class="nav-link " href="index.html#quien">quienes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.html#productos">Nuestros productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.html#contacto">contacto</a>
            </li>
          </ul>
        </nav>
        
      </header>
</div>
<?php
	//conectamos Con el servidor
	$conectar= mysqli_connect('localhost','root','root', 'identico') or die ("no se puede conectar con el servidor");
    //conectamos con la base de datos
    
	//recuperar las variables
    $email=$_POST['email'];

    $nombre=$_POST['nombre'];
    
    $comentario=$_POST['comentario'];
    
    $direccion=$_POST['direccion'];
    
    $ciudad=$_POST['ciudad'];
   
    $estado=$_POST['estado'];
    
    $codigopostal=$_POST['codigopostal'];
    
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$email',
								   '$nombre',
								   '$comentario',
                                   '$direccion',
                                   '$ciudad',
                                   '$estado',
                                   '$codigopostal')";
	//ejecutamos la sentencia de sql
	
    if (mysqli_query($conectar, $sql)) {
        ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4"></div>
        <div class="card col-md-4">
       <h2 class="card-title text-center"> <?php echo "Se ha enviado exitosa mente tu mensaje<br>"; ?></h2>
       <?php echo '<a href="index.html" class="btn btn-secondary">Volver a los productos</a>';?>
       </div>
       </div>
    </div>
    <?php
        
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
  }
  
?>
</body>
</html>