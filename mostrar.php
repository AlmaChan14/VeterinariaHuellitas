<!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">  
	    <title>Veterinaria</title>
	    <script src="bootstrap/jquery.min.js"></script>
	    <script src="bootstrap/bootstrap.min.js"></script>
	    <script src="fuentes/demo.js"></script>
	    <script src="fuentes/liga.js"></script>
	    <!-- <link rel="stylesheet" href="fuentes/demo.css">  -->
	    <link rel="stylesheet" href="bootstrap/bootstrap.css"> 
	    <link rel="stylesheet" type="text/css" href="css/estilos.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	</head>
  	<body>
    <div class="row encabezado">
        <div class="col-md-12 col-xs-12 col-sm-12">
          <img src="img/banner.jpg" class="img-responsive">
    </div>
    <div class="container">

      <!-- -Productos -->
      <div clas="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
          <center> <br><br><br>
            <table border="1">
            	<thead>
            		<tr>
            			<th colspan="7"><a href="productos.htm"> Nuevo</a></th>
            		</tr>
            		<tr>
            			<th>id</th>
            			<th>Nombre</th>
            			<th>Descripcion</th>
            			<th>Precio</th>
            			<th>Imagen</th>
            			<th colspan="2">Operaciones</th>
            		</tr>
            	</thead>
            	<tbody>
            	<?php
            		include("conexion.php");

            		$query = "SELECT * FROM productos";
            		$resultado = $conexion->query($query);
            		while ($row = $resultado->fetch_assoc()) {
            	?>
            		<tr>
            			<td><?php echo $row['id'];?></td>
            			<td><?php echo $row['nombre'];?></td>
            			<td><?php echo $row['descripcion'];?></td>
            			<td><?php echo $row['precio'];?></td>
            			<td><img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" ></td>
            			<th><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></th>
            			<th><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></th>
            		</tr>
            	<?php
            		}
            	?>
            	</tbody>
            </table>
          </center>
          
        </div>
      </div>

      <!-- PIE DE PAGINA -->
      <!-- <div class="row pie">
        <div class="col-md-12 col-xs-12 col-sm-12">
          <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-6">
              <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-12">
                  <p>
                    Información De Contacto <br>
                    <span class="icon icon-envelop iconofooter"></span> vet.huellitas@gmail.com<br>
                    <span class="icon icon-location iconofooter"></span> Calle. 115 x 120<br>
                    <span class="icon icon-clock iconofooter"></span> Horarios: 7:00 a.m - 7:00p.m
                  </p>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-12">
                  <p>
                    djabshkjd<br>djabshkjd<br>djabshkjd<br>
                  </p>

                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-6">
              <div class="row">
                <div class="col-md-6 col-xs-12 col-sm-12">
                  <p>
                    djabshkjd<br>djabshkjd<br>djabshkjd<br>
                  </p>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-12">
                  <p>
                    Síguenos En Las Redes Sociales
                  </p>
                    <span class="icon icon-facebook2 icono2"></span>
                    <span class="icon icon-twitter icono2"></span>
                    <span class="icon icon-instagram icono2"></span>
                    <span class="icon icon-whatsapp icono2"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->

      <!-- FIN CONTAINER -->
    </div>

  </body>
</htnl>