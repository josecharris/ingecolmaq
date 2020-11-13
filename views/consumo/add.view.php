<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar consumo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo RUTA .'FORMS/css/style.css'?>">

</head>
<body>
  <h1>Registrar consumo</h1>
  <form action="<?php echo RUTA . 'validaciones_vistas/mostrar_tipo.php'?>" method="POST">
    <div class="card" style="width: 80%; margin: 0 auto; color: black;">
      <div class="card-body">
        <div class="form-group">
          <br><label for="exampleFormControlSelect1"><strong>Seleccione el tipo de consumo*</strong></label>
          <select class="form-control" id="slc_tipo_consumo" name="slc_tipo_consumo">
              <option value="default">- Seleccione una opción -</option>
              <option value="combustible">Combustible</option>
              <option value="lubricante">Lubricante</option>
              <option value="montallantas">Montallantas</option>
              <option value="otros">Repuestos y otros</option>
          </select>                     
        </div>
      </div>
      <div class="container" style="margin-bottom: 30px;">
          <div class="row">
            <div class="col-sm">
              <a href="<?php echo RUTA.'admin.php'?>" class="btn btn-outline-info col-sm">Volver</a>
            </div>
            <div class="col-sm">
              <button type="submit" class="btn btn-outline-success col-sm">Continuar</button>
            </div>
          </div>
      </div>
    </div>
    
  </form>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="<?php echo RUTA .'FORMS/js/script.js'?>"></script>
</body>
</html>

