<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consumo de repuestos y otros</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo RUTA .'FORMS/css/style.css'?>">

</head>
<body>
  <h1 style="text-align: center;">Registrar consumo</h1>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="card" style="width: 80%; margin: 0 auto; color: black;">
      <div class="card-body">
        <div class="accordion-item">
          <div class="accordion-item-header">
            Fecha y hora de diligenciamiento
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card" id="seccion_equipos">
                <div class="card-body">
                  <div class="form-group" style="margin-top: 15px;">
                      <label for="exampleFormControlSelect1">Fecha*</label>
                      <input type="text" class="form-control" id="fecha" name="fecha_cons" disabled="true">
                  </div>
                  <div class="form-group" style="margin-top: 15px;">
                      <label for="exampleFormControlSelect1">Hora*</label>
                      <input type="text" class="form-control" id="hora" name="hora_cons" disabled="true">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Operador a cargo*</strong></label>
            <select class="form-control" id="slc_operador" name="slc_operador" 
            onchange="cambio_unitario2('slc_operador','otro_op')">
                <option value="default">- Seleccione el operador -</option>
                <option value="default">AROL HERNANDEZ LOZANO</option>
                <option value="default">EDGAR RAMIREZ MEJIA</option>
                <option value="default">JAIME ORLANDO PINEDA BARRERA</option>
                <option value="default">MAXIMILIANO ALEJANDRO RUEDA RODRIGUEZ</option>
                <option value="default">ARISTOBULO JOSE PEREZ MARTINEZ</option>
                <option value="default">BAYARDO CRUZ BENITEZ</option>
                <option value="default">JAIRO FONSECA ALVARADO</option>
                <option value="otro">Otro</option>
            </select><br>
            <div id="otro_op" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo operador*</strong></label>
              <input type="text" class="form-control" id="new_op" name="new_op">
            </div>      
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Sitio del suministro*</strong></label>
            <select class="form-control" id="slc_suministro" name="slc_suministro"
            onchange="cambio_unitario2('slc_suministro','otro_suministro')">
                <option value="default">- Seleccione el sitio -</option>
                <option value="default">Estación de Servicio</option>
                <option value="default">Taller Automotores</option>
                <option value="default">Almacén</option>
                <option value="default">Carrotaller</option>
                <option value="otro">Otro</option>
            </select><br>
            <div id="otro_suministro" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo suministro*</strong></label>
              <input type="text" class="form-control" id="new_sum" name="new_sum">
            </div>              
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Repuesto o Elemento suministrado*</strong></label>
                <select class="form-control" id="slc_repuesto" name="slc_repuesto"
                onchange="cambio_unitario2('slc_repuesto','otro_repuesto')">
                    <option value="default">- Seleccione un tipo -</option>
                    <option value="default">CARTUCHO DE FILTRO </option>
                    <option value="default">CARTUCHO DE FILTRO AIRE MOTOR</option>
                    <option value="default">CARTUCHO DE FILTRO SEPARADOR DE AGUA</option>
                    <option value="default">ELEMENTO FILTRANTE</option>
                    <option value="default">ELEMENTO FILTRANTE COMBUSTIBLE PRIMARIO</option>
                    <option value="otro">Otro</option>
                </select>
                <div id="otro_repuesto" class="ocultar">
                  <label for="exampleFormControlSelect1"><strong>Escriba el nuevo repuesto*</strong></label>
                  <input type="text" class="form-control" id="new_rep" name="new_rep">
                </div>              
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Cantidad suministrada*</strong></label>
            <input type="number" class="form-control" id="horometro" name="horometro">
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Unidad de medida*</strong></label>
            <select class="form-control" id="slc_unidad" name="slc_unidad"
            onchange="cambio_unitario2('slc_unidad','otra_unidad')">
                <option value="default">- Seleccione una unidad -</option>
                <option value="un1">UNIDAD</option>
                <option value="un2">GLOBAL</option>
                <option value="un3">CM2</option>
                <option value="un4">CENTIMETRO</option>
                <option value="un5">METRO LINEAL</option>
                <option value="otro">Otro</option>
            </select>
            <div id="otra_unidad" class="ocultar">
                <label for="exampleFormControlSelect1"><strong>Escriba una nueva unidad*</strong></label>
                <input type="text" class="form-control" id="new_unidad" name="new_unidad">
            </div>                  
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Horómetro*</strong></label>
            <input type="number" class="form-control" id="cantdad_llantas" name="cantdad_llantas">
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sección opcional para anexar soporte*</label>
            <input type="file" class="form-control" id="soporte" name="soporte">
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Operador a cargo*</strong></label>
            <select class="form-control" id="slc_operador_a" name="slc_operador_a"
            onchange="cambio_unitario2('slc_operador_a','otro_operador_a')">
                <option value="default">- Seleccione el operador -</option>
                <option value="default">AROL HERNANDEZ LOZANO</option>
                <option value="default">EDGAR RAMIREZ MEJIA</option>
                <option value="default">JAIME ORLANDO PINEDA BARRERA</option>
                <option value="default">MAXIMILIANO ALEJANDRO RUEDA RODRIGUEZ</option>
                <option value="default">ARISTOBULO JOSE PEREZ MARTINEZ</option>
                <option value="default">BAYARDO CRUZ BENITEZ</option>
                <option value="default">JAIRO FONSECA ALVARADO</option>
                <option value="otro">Otro</option>
            </select>
            <div id="otro_operador_a" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo operador*</strong></label>
              <input type="text" class="form-control" id="new_oper" name="new_oper">
            </div>             
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">
              <strong>Incluir observaciones, notas o justificación del suministro*</strong>
            </label>
            <textarea class="form-control" id="comentario2" rows="3"></textarea>
        </div><br>
        <div class="container">
            <div class="row">
              <div class="col-sm">
                <a href="<?php echo RUTA.'validaciones_vistas/agregar_consumo.php'?>" class="btn btn-outline-info col-sm">Volver</a>
              </div>
              <div class="col-sm">
                <button type="submit" class="btn btn-outline-success col-sm">Guardar</button>
              </div>
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