<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consumo de montallantas</title>
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
                      <input type="text" class="form-control" id="fecha_cons" name="fecha_cons" disabled="true">
                  </div>
                  <div class="form-group" style="margin-top: 15px;">
                      <label for="exampleFormControlSelect1">Hora*</label>
                      <input type="text" class="form-control" id="hora_cons" name="hora_cons" disabled="true">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
            <label for="exampleFormControlSelect1"><strong>Horometro*</strong></label>
            <input type="number" class="form-control" id="horometro" name="horometro">
        </div><br>

        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Tipo de llanta*</strong></label>
            <select class="form-control" id="slc_producto" name="slc_llanta" 
            onchange="cambio_unitario2('slc_producto','otra_llanta')">
                <option value="default">- Seleccione un tipo -</option>
                <option value="default">2,15 - 70 X 15</option>
                <option value="default">2-95 X 22,5</option>
                <option value="default">12R X 22,5</option>
                <option value="default">23,5 X 25</option>
                <option value="default">29,5 X 25</option>
                <option value="default">20,5 X 25</option>
                <option value="default">1100 X 20</option>
                <option value="otro">Otro</option>
            </select><br>
            <div id="otra_llanta" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo tipo de llanta*</strong></label>
              <input type="text" class="form-control" id="new_llanta" name="new_llanta">
            </div>                 
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlSelect1">Digitar la cantidad de llantas (números enteros)*</label>
            <input type="number" class="form-control" id="cantdad_llantas" name="cantdad_llantas">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Número de parche*</strong></label>
            <select class="form-control" id="slc_parche" name="slc_parche"
            onchange="cambio_unitario2('slc_parche','otro_parche')">
                <option value="default">- Seleccione -</option>
                <option value="default">#03</option>
                <option value="default">#04</option>
                <option value="default">#06</option>
                <option value="default">#08</option>
                <option value="default">#10</option>
                <option value="otro">otro</option>
            </select><br>
            <div id="otro_parche" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo # de parche*</strong></label>
              <input type="text" class="form-control" id="new_parche" name="new_parche">
            </div>          
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Digitar la cantidad de parches (números enteros)*</label>
            <input type="number" class="form-control" id="cantidad_parches" name="cantidad_parches">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1"><strong>Tipo de O-Ring*</strong></label>
            <select class="form-control" id="slc_ring" name="slc_ring"
            onchange="cambio_unitario2('slc_ring','otro_o_ring')">
                <option value="default">- Seleccione -</option>
                <option value="default">3-25 T</option>
                <option value="default">2-25T</option>
                <option value="otro">Otro</option>
            </select><br>
            <div id="otro_o_ring" class="ocultar">
              <label for="exampleFormControlSelect1"><strong>Escriba el nuevo O-Ring*</strong></label>
              <input type="text" class="form-control" id="new_ring" name="new_ring">
            </div>                
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Digitar la cantidad de O-Ring (números enteros)*</label>
            <input type="number" class="form-control" id="cantidad_parches" name="cantidad_parches">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Sección opcional para anexar soporte*</label>
            <input type="file" class="form-control" id="soporte" name="soporte">
        </div>

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
        </div>
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