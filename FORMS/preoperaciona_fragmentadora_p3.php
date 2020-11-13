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
                    <input type="text" class="form-control" id="fecha" disabled="true">
                </div>
                <div class="form-group" style="margin-top: 15px;">
                    <label for="exampleFormControlSelect1">Hora*</label>
                    <input type="text" class="form-control" id="hora" disabled="true">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="accordion-item">
          <div class="accordion-item-header">
            NIVEL DE ACEITE DE LA CENTRAL DEL MOLINO
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Nivel de aceite de la central del molino*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que la banda gira normalmente, y que se encuentra centrada*</label>
                      <select class="form-control" id="slc_niv_aceite" onchange="cambio_unitario('slc_niv_aceite','card-anexo3');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo3">
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
            ESTADO DE LA BOMBA
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Estado de la bomba*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que el ruido de la bomba es normal. *</label>
                      <select class="form-control" id="slc_bomba" onchange="cambio_unitario('slc_bomba','card-anexobo');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexobo">
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
            MANGUERAS Y TUBERIAS
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Mangueras y tuberias*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que las mangueras y tuberias no presentan fugas o deterioro*</label>
                      <select class="form-control" id="slc_manguera" onchange="cambio_unitario('slc_manguera','card-anexo4');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo4">
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
            LIMPIEZA DE LA CENTRAL
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Limpieza de la central*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique el estado de limpieza de la central, si hay derrames de aceite.*</label>
                      <select class="form-control" id="slc_limpieza_central" onchange="cambio_unitario('slc_limpieza_central','card-anexo5');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo5">
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
            GIRO DE LA CINTA
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Giro de la cinta*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique eque la cinta gira normalmente, que no presenta obstaculos ni ruidos extraños*</label>
                      <select class="form-control" id="slc_giro_cinta" onchange="cambio_unitario('slc_giro_cinta','card-anexo6');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo6">
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
            ESTADO DE LA CINTA
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Estado de la cinta*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que las tejas, eslabones, patines y pasadores, catalinas, ejes y piñon de arrastre se encuentran en buen estado.*</label>
                      <select class="form-control" id="slc_estado_cinta" onchange="cambio_unitario('slc_estado_cinta','card-anexo7');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo7">
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
            MOTOR HIDRAULICO
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Motor hidraulico*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que las mangueras , tuberias y motor hidraulico, se encuentran en bues estado, no presentan fugas ni ruidos extraños.*</label>
                      <select class="form-control" id="slc_motor_h" onchange="cambio_unitario('slc_motor_h','card-anexo8');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo8">
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
            MALLAS DE PROTECCION
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Mallas de protección*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que las mallas de protección estan en buen estado*</label>
                      <select class="form-control" id="slc_malla" onchange="cambio_unitario('slc_malla','card-anexo9');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo9">
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
            TOBOGAN
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Tobogan*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que las laminas del tobogan se encuentran en buen estado*</label>
                      <select class="form-control" id="slc_tobogan" onchange="cambio_unitario('slc_tobogan','card-anexo10');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo10">
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
            RODILLO APLASTANTE
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Rodillo aplastante*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que el rodillo aplastante gira normalmente, que las chumaceras se encuentran ok. Pasadores ok. Y que no presenta acumulacion de enredos.*</label>
                      <select class="form-control" id="slc_rodillo_a" onchange="cambio_unitario('slc_rodillo_a','card-anexo11');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo11">
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
            SISTEMA DE LEVANTE
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Sistema de levante*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que todo el sistema sube y baja normalmente*</label>
                      <select class="form-control" id="slc_levante" onchange="cambio_unitario('slc_levante','card-anexo12');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo12">
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
            MOTORES HIDRAULICOS
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Motores hidraulicos*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique el buen funcionamiento de los motores hidraulicos, que no presentan fugas ni mangueras y tuberias rota, y esta libre de enredos*</label>
                      <select class="form-control" id="slc_motores_h" onchange="cambio_unitario('slc_motores_h','card-anexo13');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo13">
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
            BRAZOS DE LA COMPUERTA
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Brazos de la compuerta*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique que los brazos de la compuerta abren y cierran normalmente, que las mangueras no prsentan fugas*</label>
                      <select class="form-control" id="slc_b_compuertas" onchange="cambio_unitario('slc_b_compuertas','card-anexo14');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo14">
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
            COMPUERTA
          </div>
          <div class="accordion-item-body">
            <div class="accordion-item-body-content">
              <div class="card">
                <div class="card-body">
                  <h2>Compuerta*</h2>
                  <br>
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Verifique el estado de la compuerta, que abra y cierre normalmente, que el cierre sea total y no presente desgaste.*</label>
                      <select class="form-control" id="slc_compuerta" onchange="cambio_unitario('slc_compuerta','card-anexo15');">
                        <option value="default">- Seleccione una opción -</option>
                        <option value="C">Conforme (C)</option>
                        <option value="NC">No conforme (NC)</option>
                        <option value="NA">No aplica (NA)</option>
                      </select><br>
                      <div class="card ocultar" id="card-anexo15">
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