<!DOCTYPE html>
<html lang="en">
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
          Nivel de líquido de frenos
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Nivel de líquido de frenos</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique  que los niveles este dentro del rango establecido según el manual*</label>
                    <select class="form-control" id="slc_liquido_frenos" onchange="cambio_unitario('slc_liquido_frenos','card-anexo26');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select><br>
                    <div class="card ocultar" id="card-anexo26">
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
                    <select class="form-control" id="slc_inspeccion_fugas" onchange="cambio_unitario('slc_inspeccion_fugas','card-anexo27');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select><br>
                    <div class="card ocultar" id="card-anexo27">
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
          Lubricación de puntos de movimiento
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Lubricación de puntos de movimiento</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1"> Realizó lubricación en articulaciones de equipo y varillaje balde?*</label>
                    <select class="form-control" id="slc_lubricacion_mov" onchange="cambio_unitario('slc_lubricacion_mov','card-anexo28');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select><br>
                    <div class="card ocultar" id="card-anexo28">
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
          Filtro de aire
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Filtro de aire</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique que no estén sucios, humedos o en mal estado físico.*</label>
                    <select class="form-control" id="slc_filtro_ai" onchange="cambio_unitario('slc_filtro_ai','card-anexo29');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select><br>
                    <div class="card ocultar" id="card-anexo29">
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
          Estructura de elevación
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Estructura de elevación</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">El Mástil no debe presentar deformaciones y/o afectaciones parentes.*</label>
                    <select class="form-control" id="slc_mastil" onchange="cambio_triple('slc_mastil','slc_engrase','slc_cargas','card-anexo30');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Engrase Cilindro y cadena de levantamiento; no deben presentar fugas, deformaciones y/o afectaciones aparentes.*</label>
                    <select class="form-control" id="slc_engrase" onchange="cambio_triple('slc_mastil','slc_engrase','slc_cargas','card-anexo30');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Respaldo de cargas no deben  deformaciones y/o afectaciones aparentes.*</label>
                    <select class="form-control" id="slc_cargas" onchange="cambio_triple('slc_mastil','slc_engrase','slc_cargas','card-anexo30');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                    <br>
                    <div class="card ocultar" id="card-anexo30">
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
          Cilindros hidraulicos
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Cilindros hidraulicos</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique que no presente, desgaste daños y fugas*</label>
                    <select class="form-control" id="selc_cilindro" onchange="cambio_unitario('selc_cilindro','card-anexo31');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select><br>
                    <div class="card ocultar" id="card-anexo31">
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
          Llantas
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Llantas*</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Compruebe  labrado de la llanta, inspeccione por si hay daños (cortes, ranuras) Compruebe el ajuste de las tuercas o pernos.*</label>
                    <select class="form-control" id="selc_llantas" onchange="cambio_unitario('selc_llantas','card-anexo32');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select><br>
                    <div class="card ocultar" id="card-anexo32">
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
          Sistema de acceso
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Sistema de acceso*</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique peldaños y pasamanos, deben estar completos y en buen estado físico y de aseo*</label>
                    <select class="form-control" id="selc_sis_acc" onchange="cambio_unitario('selc_sis_acc','card-anexo33');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select><br>
                    <div class="card ocultar" id="card-anexo33">
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