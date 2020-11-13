<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diligenciamiento de preoperacionales</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  

</head>
<body>
  <h1>FORMULARIO PARA PREOPERACIONALES</h1>
  <form action="">
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-item-header">
          Descripción del equipo
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card" id="seccion_equipos">
              <div class="card-body">
                <div class="form-group" style="margin-top: 15px;">
                    <label for="exampleFormControlSelect1">Familia del equipo*</label>
                    <input type="text" class="form-control" id="familia" disabled="true">
                </div>
                <div class="form-group" style="margin-top: 15px;">
                    <label for="exampleFormControlSelect1">Descripción*</label>
                    <input type="text" class="form-control" id="nombre" disabled="true">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php include('form_template.php'); ?>

        <div class="accordion-item">
          <div class="accordion-item-header">
            Niveles de aceite reductor de giro
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Niveles de aceite reductor de giro</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique  que los niveles este dentro del rango establecido según el manual*</label>
                      <select class="form-control" id="slc_aceite_reductor" onchange="cambio_unitario('slc_aceite_reductor', 'card-anexo17');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo17">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Inspección general de fugas hidraulicas
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Inspección general de fugas hidraulicas</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que  no tenga fugas por sellos, mangueras o componentes*</label>
                      <select class="form-control" id="slc_fugas_h" onchange="cambio_unitario('slc_fugas_h', 'card-anexo18');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo18">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Lubricación puntos de movimiento
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Lubricación puntos de movimiento</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Realizó lubricación en articulaciones de equipo y varillaje balde?*</label>
                      <select class="form-control" id="slc_puntos_mov" onchange="cambio_unitario('slc_puntos_mov','card-anexo19');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo19">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Cucharon
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Cucharon</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique bases, dientes o cuchilla por desgaste o  fisuras*</label>
                      <select class="form-control" id="slc_cucharon" onchange="cambio_unitario('slc_cucharon','card-anexo20')">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo20">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Pulpo
          </div>
          <div class="accordion-item-body" id="body-emergencia">
            <div class="accordion-item-body-content">
              <div class="card" id="seccion_equipos">
                <div class="card-body">
                  <h2>Pulpo</h2>
                  <div class="form-group" style="margin-top: 15px;">
                      <label for="exampleFormControlSelect1">Verifique pasadores, pines, estructura. Revisar daños estructurales, fisuras y soldaduras*</label>
                      <select class="form-control" id="slc_pulpo1" onchange="cambio_doble('slc_pulpo1','slc_pulpo2','card-anexo21');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique sistema hidráulico, Sistema de apertura y cierre, Estado de cilindros y mangueras.*</label>
                      <select class="form-control" id="slc_pulpo2" onchange="cambio_doble('slc_pulpo1','slc_pulpo2','card-anexo21');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select>
                  </div>
                  <div class="card ocultar" id="card-anexo21">
                    <div class="card-header">
                      Anexos
                    </div>
                    <div class="card-body" id="panel_anexo">
                      <h5 class="card-title">Más información</h5>
                      <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                        <textarea class="form-control" id="comentario_equipo_emergencia" rows="3"></textarea>
                      </div>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      <label for="label_anexo">(Opcional)</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Cilindros hidrostaticos
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Cilindros hidrostaticos</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que no presente, desgaste daños y fugas*</label>
                      <select class="form-control" id="slc_cilindros_h" onchange="cambio_unitario('slc_cilindros_h','card-anexo22');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo22">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Tren de rodaje
          </div>
          <div class="accordion-item-body" id="body-emergencia">
            <div class="accordion-item-body-content">
              <div class="card" id="seccion_equipos">
                <div class="card-body">
                  <h2>Tren de rodaje</h2>
                  <div class="form-group" style="margin-top: 15px;">
                      <label for="exampleFormControlSelect1">Tornillos de zapatas completos y ajustados*</label>
                      <select class="form-control" id="slc_tren1" onchange="cambio_doble('slc_tren1', 'slc_tren2', 'card-anexo23');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Estado de cadenas, carriles, sprocket y ruedas tensoras*</label>
                      <select class="form-control" id="slc_tren2" onchange="cambio_select23()">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select>
                  </div>
                  <div class="card ocultar" id="card-anexo23">
                    <div class="card-header">
                      Anexos
                    </div>
                    <div class="card-body" id="panel_anexo">
                      <h5 class="card-title">Más información</h5>
                      <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                        <textarea class="form-control" id="comentario_equipo_emergencia" rows="3"></textarea>
                      </div>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                      <label for="label_anexo">(Opcional)</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Sistema de acceso
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Sistema de acceso</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique peldaños y pasamanos, deben estar completos y en buen estado físico y de aseo*</label>
                      <select class="form-control" id="slc_sistema_acc" onchange="cambio_unitario('slc_sistema_acc','card-anexo24');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo24">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Boom, Stick
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Boom, Stick</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Estado de bujes y pasadores, puntos de lubricación, fisuras*</label>
                      <select class="form-control" id="slc_boom" onchange="cambio_unitario('slc_boom','card-anexo25');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo25">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <div class="accordion-item-header">
            Horómetro
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Horómetro</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique su correcto funcionamiento, este dato aplica para controles de operación y mantenimiento*</label><br>
                      <label for="exampleFormControlSelect1">*Escriba el horómetro inicial correspondiente al turno*</label>
                      <input type="number" class="form-control" id="input_horometro" placeholder="Horómetro inicial">
                  </div><br>
                  <div class="card">
                        <div class="card-header">
                          Anexos
                        </div>
                        <div class="card-body" id="panel_anexo2">
                          <h5 class="card-title">Más información</h5>
                          <p class="card-text">Puede especificar mejor las codiciones del equipo dejando un comentario y/o adjuntando el material que considere*</p>
                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Déjenos su comentario</label>
                            <textarea class="form-control" id="comentario2" rows="3"></textarea>
                          </div>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1">
                          <label for="label_anexo">(Opcional)</label>
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div> 
    <div class="container" style="margin-bottom: 30px;">
        <div class="row">
          <div class="col-sm">
            <button type="button" class="btn btn-outline-success col-sm">Volver</button>
          </div>
          <div class="col-sm">
            <button type="button" class="btn btn-outline-info col-sm">Guardar</button>
          </div>
        </div>
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="../js/script.js"></script>
</body>
</html>