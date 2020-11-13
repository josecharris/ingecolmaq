<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de inspección del cargador frontal</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h1>FORMULARIO PARA INSPECCIÓN</h1>
	<form method="POST">
		<div class="accordion">
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
			<!--FECHA Y HORA-->
			<div class="accordion-item">
				<div class="accordion-item-header">
            		Revisión de esparragos o pernos de las llantas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisión de esparragos o pernos de las llantas  *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_esparragos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_esparragos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" name="slc_esparragos" id="slc_esparragos" onchange="cambio_unitario('slc_esparragos','card-anexo')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" name="prioridad_esparragos" id="prioridad_esparragos" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo">
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
            		Ajuste de tapón mandos finales 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisión ajuste de tapón mandos finales *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_mandos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_mandos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_mandos" onchange="cambio_unitario('slc_mandos','card-anexo2')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_mandos" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo2">
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
            		Niveles de hidraulico 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobación niveles de hidraulico*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_niveles_h" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_niveles_h" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_niveles_h" onchange="cambio_unitario('slc_niveles_h','card-anexo3')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_niveles_h" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Switch apagado de emergencia del motor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobación switch apagado de emergencia del motor*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_switch" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_switch" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_switch" onchange="cambio_unitario('slc_switch','card-anexo4')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_switch" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Luces delanteras
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisión luces delanteras*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_luces_d" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_luces_d" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_luces_d" onchange="cambio_unitario('slc_luces_d','card-anexo5')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_luces_d" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Sistema master
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision sistema master*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_master" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_master" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_master" onchange="cambio_unitario('slc_master','card-anexo6')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_master" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Boton elevación tapa compartimiento motor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificacion boton elevación tapa compartimiento motor*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_boton" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_boton" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_boton" onchange="cambio_unitario('slc_boton','card-anexo7')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_boton" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Estado de fugas, compartimiento motor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision estado de fugas, compartimiento motor*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_fugas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_fugas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_fugas" onchange="cambio_unitario('slc_fugas','card-anexo8')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_fugas" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Revision general de fulles
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision general de fulles, cumpliendo con los estandares de operación *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_fulles" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_fulles" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_fulles" onchange="cambio_unitario('slc_fulles','card-anexo9')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_fulles" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Filtros de aire
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisión filtros de aire*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_aire" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_aire" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_aire" onchange="cambio_unitario('slc_aire','card-anexo10')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_aire" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Compartimiento, agua limpiaparabrizas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisión compartimiento, agua limpiaparabrizas*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_compartimiento" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_compartimiento" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_compartimiento" onchange="cambio_unitario('slc_compartimiento','card-anexo11')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_compartimiento" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Soporte de motor, cabina , pines y pasadores
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisión soporte de motor, cabina , pines y pasadores*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_soporte" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_soporte" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_soporte" onchange="cambio_unitario('slc_soporte','card-anexo12')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_soporte" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Arneces y cableado en general
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar arneces y cableado en general*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_arneces" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_arneces" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_arneces" onchange="cambio_unitario('slc_arneces','card-anexo13')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_arneces" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Acumulador de agua , filtro de combustible " trampa"
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision acumulador de agua, filtro de combustible "trampa"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_acumulador" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_acumulador" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_acumulador" onchange="cambio_unitario('slc_acumulador','card-anexo14')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_acumulador" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Pasadores y sistema de anclaje de tractor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision de pasadores y sistema de anclaje de tractor*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pasadores" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pasadores" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pasadores" onchange="cambio_unitario('slc_pasadores','card-anexo15')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pasadores" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
			<div class="accordion-item">
				<div class="accordion-item-header">
            		Compartimiento auxiliar refrigerante motor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision compartimiento auxiliar refrigerante motor*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_refrigerante" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_refrigerante" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_refrigerante" onchange="cambio_unitario('slc_refrigerante','card-anexo16')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_refrigerante" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo16">
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
            		Indicador de combustible y estado de la tapa principal del tanque
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision indicador de combustible y estado de la tapa principal del tanque*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_combustible" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_combustible" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_combustible" onchange="cambio_unitario('slc_combustible','card-anexo17')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_combustible" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Espejos retrovisores laterales y pasarelas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision espejos retrovisores laterales y pasarelas*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_espejos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_espejos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_espejos" onchange="cambio_unitario('slc_espejos','card-anexo18')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_espejos" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Revision sistema de articulacion
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision sistema de articulacion "Gatos y pasadores "*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_articulacion" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_articulacion" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_articulacion" onchange="cambio_unitario('slc_articulacion','card-anexo19')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_articulacion" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Revision sistema cardanico
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision sistema cardanico "crucetas , Yoquis y otros "*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cardanico" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cardanico" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cardanico" onchange="cambio_unitario('slc_cardanico','card-anexo20')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cardanico" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Pasadores, pines, anclaje y bastidor tractor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision pasadores, pines, anclaje y bastidor tractor *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pasadores" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pasadores" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pasadores" onchange="cambio_unitario('slc_pasadores','card-anexo21')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pasadores" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo21">
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
            		Rodamiento de giro tractor y caja
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision rodamiento de giro tractor y caja*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_giro" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_giro" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_giro" onchange="cambio_unitario('slc_giro','card-anexo22')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_giro" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Puntos de engrase 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision puntos de engrase *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_puntos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_puntos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_puntos" onchange="cambio_unitario('slc_puntos','card-anexo23')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_puntos" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo23">
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
            		Revision general de bastidores 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision general de bastidores *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_bastidores_grl" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_bastidores_grl" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_bastidores_grl" onchange="cambio_unitario('slc_bastidores_grl','card-anexo24')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_bastidores_grl" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Pasadores, cilindros de elevacion de la caja
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision pasadores, cilindros de elevacion de la caja*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pasadores" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pasadores" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pasadores" onchange="cambio_unitario('slc_pasadores','card-anexo25')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pasadores" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Estado general de pines y pasadores balancin 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado general de pines y pasadores balancin *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pines" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pines" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pines" onchange="cambio_unitario('slc_pines','card-anexo26')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pines" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Suspensión trasera 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar suspensión trasera*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_suspension_trasera" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_suspension_trasera" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_suspension_trasera" onchange="cambio_unitario('slc_suspension_trasera','card-anexo27')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_suspension_trasera" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Revision y ajuste de tapones en diferenciales 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision y ajuste de tapones en diferenciales *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_diferenciales" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_diferenciales" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_diferenciales" onchange="cambio_unitario('slc_diferenciales','card-anexo28')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_diferenciales" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Pasadores de caja de levante parte trasera 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar pasadores de caja de levante parte trasera *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pasadores_c" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pasadores_c" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pasadores_c" onchange="cambio_unitario('slc_pasadores_c','card-anexo29')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pasadores_c" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Revision general luces y stops traseros 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision general luces y stops traseros  *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_luces_stop" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_luces_stop" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_luces_stop" onchange="cambio_unitario('slc_luces_stop','card-anexo30')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_luces_stop" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

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
            		Estado de ajuste de guardas, tubos y sistemas de frenos
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision y estado de ajuste de guardas, tubos y sistemas de frenos*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_guardas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_guardas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_guardas" onchange="cambio_unitario('slc_guardas','card-anexo31')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_guardas" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Estado de barras y bujes estabilizadoras 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Estado de barras y bujes estabilizadoras *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_barras" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_barras" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_barras" onchange="cambio_unitario('slc_barras','card-anexo32')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_barras" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Revision de alarma y luces de retroceso  
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision de alarma y luces de retroceso *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_alarma" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_alarma" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_alarma" onchange="cambio_unitario('slc_alarma','card-anexo33')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_alarma" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
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
            		Revision general de fugas hidraulicas 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision general de fugas hidraulicas *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_fugas_h" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_fugas_h" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_fugas_h" onchange="cambio_unitario('slc_fugas_h','card-anexo34')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_fugas_h" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo34">
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
            		Revision de suspensión delantera 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision de suspensión delantera *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_suspension_d" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_suspension_d" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_suspension_d" onchange="cambio_unitario('slc_suspension_d','card-anexo35')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_suspension_d" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo35">
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
            		Verificacion de tablero y sistema de indicadores 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificacion de tablero y sistema de indicadores *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_tablero" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_tablero" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_tablero" onchange="cambio_unitario('slc_tablero','card-anexo36')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_tablero" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo36">
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
            		Interruptores , palancas , pedales y volante
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificacion de interruptores, palancas , pedales y volante*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_interruptores" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_interruptores" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_interruptores" onchange="cambio_unitario('slc_interruptores','card-anexo37')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_interruptores" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo37">
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
            		Estado general parte interna cabina
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Veriicacion estado general parte interna cabina "Vidrios, chapas, etc"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cabina" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cabina" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cabina" onchange="cambio_unitario('slc_cabina','card-anexo38')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cabina" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo38">
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
            		Estado general de las sillas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Estado general de las sillas *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_sillas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_sillas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_sillas" onchange="cambio_unitario('slc_sillas','card-anexo39')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_sillas" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo39">
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
            		Estado del cinturon de seguridad
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Estado del cinturon de seguridad*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cinturon" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cinturon" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cinturon" onchange="cambio_unitario('slc_cinturon','card-anexo40')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cinturon" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo40">
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
            		Fugas o desperfectos en fanclosh
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision de fugas o desperfectos en fanclosh*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_fugas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_fugas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_fugas" onchange="cambio_unitario('slc_fugas','card-anexo41')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_fugas" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo41">
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
            		Estado de paneles de enfriamiento 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision estado de paneles de enfriamiento *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_paneles" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_paneles" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_paneles" onchange="cambio_unitario('slc_paneles','card-anexo42')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_paneles" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo42">
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
            		Comprobacion freno de parqueo 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobacion freno de parqueo *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_freno_parqueo" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_freno_parqueo" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_freno_parqueo" onchange="cambio_unitario('slc_freno_parqueo','card-anexo43')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_freno_parqueo" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo43">
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
            		Presencia y estado de soporte seguridad de elevacion caja
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision de presencia y estado de soporte seguridad de elevacion caja*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_elevacion" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_elevacion" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_elevacion" onchange="cambio_unitario('slc_elevacion','card-anexo44')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_elevacion" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo44">
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
            		Pito de servicio 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Pito de servicio*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Revision pito de servicio*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pito" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pito" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pito" onchange="cambio_unitario('slc_pito','card-anexo45')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pito" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo45">
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
            		Revision general de luces, direccionales y parqueo  
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision general de luces, direccionales y parqueo *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_luces_d" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_luces_d" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_luces_d" onchange="cambio_unitario('slc_luces_d','card-anexo46')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_luces_d" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo46">
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
            		Horometro
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Estado del horometro*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_horometro" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_horometro" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_horometro" onchange="cambio_unitario('slc_horometro','card-anexo47')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_horometro" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo47">
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
            		Revisar presencia de calcomania de referencia interna del equipo
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar presencia de calcomania de referencia interna del equipo*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_calcomania" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_calcomania" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_calcomania" onchange="cambio_unitario('slc_calcomania','card-anexo48')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_calcomania" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo48">
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
            		Estado y presencia de plaquetas de seguridad internas y externas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision del estado y presencia de plaquetas de seguridad internas y externas*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_plaquetas_seguridad" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_plaquetas_seguridad" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_plaquetas_seguridad" onchange="cambio_unitario('slc_plaquetas_seguridad','card-anexo49')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_plaquetas_seguridad" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo49">
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
            		Botiquin y extintor 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar botiquin y extintor *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_botiquin" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_botiquin" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_botiquin" onchange="cambio_unitario('slc_botiquin','card-anexo50')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_botiquin" onchange="">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="alta">ALTA</option>
		                        <option value="media">MEDIA</option>
		                        <option value="baja">BAJA</option>
		                      </select><br>

		                      <div class="card ocultar" id="card-anexo50">
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
		 <div class="container" style="margin-bottom: 30px;">
        <div class="row">
          <div class="col-sm">
            <button type="button" class="btn btn-outline-success col-sm">Volver</button>
          </div>
          <div class="col-sm">
            <button type="submit" class="btn btn-outline-info col-sm" formaction="pdf/Reporte_Dumper_Inspeccion.php?idMaquina=<?php echo $row['idMaquina']; ?>">Guardar</button>
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