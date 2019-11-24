<?php
    $conectar= mysqli_connect('localhost','root','root', 'identico') or die ("no se puede conectar con el servidor");
?>
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
<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Mensaje</th>
      <th scope="col">Email</th>
      <th scope="col">Direccion</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Estado</th>
      <th scope="col">Codigo Postal</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        $sql = "SELECT * from datos";
        $result = mysqli_query($conectar, $sql);
        while($mostrar=mysqli_fetch_array($result)){ 
      ?>
    <tr>
      <th scope="row"><?php echo $mostrar['nombre'] ?></th>
      
      <td><?php echo $mostrar['comentario'] ?></td>
      <td><?php echo $mostrar['email'] ?></td>
      <td><?php echo $mostrar['direccion'] ?></td>
      <td><?php echo $mostrar['ciudad'] ?></td>
      <td><?php echo $mostrar['estado'] ?></td>
      <td><?php echo $mostrar['codigopostal'] ?></td>
    </tr>
        <?php } ?>
    
  </tbody>
</table>
</div>
    
</body>
</html>