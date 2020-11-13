<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consumo de combustible</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo RUTA .'FORMS/css/style.css'?>">

</head>
<body>
  <h1 style="text-align: center;">Registrar nuevo consumo</h1>
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
                      <input type="text" class="form-control" id="fecha" name="fecha" disabled="true">
                  </div>
                  <div class="form-group" style="margin-top: 15px;">
                      <label for="exampleFormControlSelect1">Hora*</label>
                      <input type="text" class="form-control" id="hora" name="hora" disabled="true">
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
            <label for="exampleFormControlSelect1"><strong>Seleccione el equipo*</strong></label>
            <select class="form-control" id="slc_equipo" name="slc_equipo"
            onchange="cambio_unitario2('slc_equipo','otro_eq')">
                <option value="default">- Seleccione el equipo -</option>
                <option value="default">DUMPER ARTICULADA CATERPILLAR 730 B1M00574 2006</option>
                <option value="default">DUMPER ARTICULADA CATERPILLAR 730 B1M02005 2008</option>
                <option value="default">VOLQUETA DOBLETROQUE INTER 7600 6X4 59N062623 20</option>
                <option value="default">VOLQUETA DOBLETROQUE INTER 7600 6X4 7AN256803 20</option>
                <option value="default">VOLQUETA DOBLETROQUE INTER 7600 6X4 2AN275758 20</option>
                <option value="default">VOLQUETA DOBLETROQUE INTER 7600 6X4 69N062615 20</option>
                <option value="otro">Otro</option>
            </select><br>
            <div id="otro_eq" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo equipo*</strong></label>
              <input type="text" class="form-control" id="new_op" name="new_eq">
            </div>               
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Producto*</strong></label>
            <select class="form-control" id="slc_producto" name="slc_producto"
            onchange="cambio_unitario2('slc_producto','otro_producto')">
                <option value="default">- Seleccione el producto -</option>
                <option value="default">ACPM</option>
                <option value="default">GASOLINA</option>
                <option value="otro">OTRO</option>
            </select><br>
            <div id="otro_producto" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo producto*</strong></label>
              <input type="text" class="form-control" id="new_producto" name="new_producto">
            </div>                 
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">
                <strong>Cantidad*</strong>
            </label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Horometro*</strong></label>
            <input type="number" class="form-control" id="horometro" name="horometro">
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Centros de costos*</strong></label>
            <select class="form-control" id="slc_costos" name="slc_costos"
            onchange="cambio_unitario2('slc_costos','otro_centro')">
                <option value="default">- Seleccione un centro -</option>
                <option value="default">FRAGMENTADORA47 - 1BE605</option>
                <option value="default">MAQ AMAR 36 - 1BE604</option>
                <option value="default">MAQ AMAR 36 - 1BE611</option>
                <option value="default">MAQ AMAR 36 - 1BE700</option>
                <option value="default">MAQ AMAR 36 - 1MI820</option>
                <option value="default">MAQ AMAR 36 - 2BE614</option>
                <option value="default">MAQ AMAR 36 - 3BE655</option>
                <option value="otro">Otro</option>
            </select><br>
            <div id="otro_centro" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo centro*</strong></label>
              <input type="text" class="form-control" id="new_centro" name="new_centro">
            </div>   
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">
                <strong>Numero del recibo generado tras el tanqueo*</strong>
            </label>
            <input type="text" class="form-control" id="recibo" name="recibo">
        </div><br>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sección opcional para anexar soporte*</label>
            <input type="file" class="form-control" id="soporte" name="soporte">
        </div><br>
        <div class="form-group">
                    <label for="exampleFormControlSelect1"><strong>¿Tanqueo full?*</strong></label>
                    <select class="form-control" id="slc_producto" name="slc_producto">
                        <option value="default">- Seleccione una respuesta -</option>
                        <option value="default">SÍ</option>
                        <option value="default">NO</option>
                    </select>                
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
            <label for="exampleFormControlSelect1">Incluir observaciones, notas o justificación del suministro*</label>
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