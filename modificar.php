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
    <?php
        include("conexion.php");

        $id=$_REQUEST['id'];

        $query = "SELECT * FROM productos WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
      ?>
    <div class="row encabezado">
        <div class="col-md-12 col-xs-12 col-sm-12">
          <img src="img/banner.jpg" class="img-responsive">
    </div>
    <div class="container">

      <!-- -Productos -->
      <div clas="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
          <center> <br><br><br>
            <form action="proceso_modificar.php?id=<?php  echo $row['id'];?>" method="POST" enctype="multipart/form-data">
              Nombre:<input type="text" REQUIRED name="nombre" value="<?php echo $row['nombre']; ?>"><br><br>
              Descripción:<input type="text" REQUIRED name="descripcion" value="<?php echo $row['descripcion']; ?>"><br><br>
              Precio:<input type="text" REQUIRED name="precio" value="<?php echo $row['precio']; ?>"><br><br>
              <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" >
              <input type="file" REQUIRED name="imagen">
              <input type="submit" value="Aceptar" name="btnRegistrar">
            </form>
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
</html>
