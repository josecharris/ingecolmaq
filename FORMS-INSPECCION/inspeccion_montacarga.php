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
	<form action="">
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
            		Estado de Plaqueta de Identificacion (codigo interno)
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Estado de Plaqueta de Identificacion (codigo interno)*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_plaqueta" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_plaqueta" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" name="slc_plaqueta" id="slc_plaqueta" onchange="cambio_unitario('slc_plaqueta','card-anexo')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" name="prioridad_plaqueta" id="prioridad_plaqueta" onchange="">
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
            		Comprobar aseo general.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar aseo general.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_aseo" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_aseo" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_aseo" onchange="cambio_unitario('slc_aseo','card-anexo2')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_aseo" onchange="">
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
            		Verificar estado de uñas que no contengan deformaciones y que cuenten con seguros
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de uñas que no contengan deformaciones y que cuenten con seguros*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_unhas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_unhas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_unhas" onchange="cambio_unitario('slc_unhas','card-anexo3')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_unhas" onchange="">
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
            		Estado del mastil que los rodamientos esten funcionando correctamente .
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el mastil que los rodamientos esten funcionando correctamente "Estado de cadena, pasadores y estructura".*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_mastil" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_mastil" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_mastil" onchange="cambio_unitario('slc_mastil','card-anexo4')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_mastil" onchange="">
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
            		Estado de las llantas 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado de las llantas "Pernos, Valvulas y presión"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_llantas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_llantas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_llantas" onchange="cambio_unitario('slc_llantas','card-anexo5')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_llantas" onchange="">
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
            		Estado general de las guardas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado general de las guardas*</h2>
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
		                      <select class="form-control" id="slc_guardas" onchange="cambio_unitario('slc_guardas','card-anexo6')">
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
            		Estado de la cabina
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de la cabina que no este suelta, no presente deformaciones. "Barra antivuelco".*</h2>
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
		                      <select class="form-control" id="slc_cabina" onchange="cambio_unitario('slc_cabina','card-anexo7')">
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
            		Estado de la silla y cinturón de seguridad
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de la silla y cinturón de seguridad*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_silla" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_silla" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_silla" onchange="cambio_unitario('slc_silla','card-anexo8')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_silla" onchange="">
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
            		Panel de instrumentos 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar el panel de instrumentos*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_instrumentos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_instrumentos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_instrumentos" onchange="cambio_unitario('slc_instrumentos','card-anexo9')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_instrumentos" onchange="">
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
            		Estado de las luces frontales, pera, luces traseras y balija
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de las luces frontales, pera, luces traseras y balija*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_luces_f" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_luces_f" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_luces_f" onchange="cambio_unitario('slc_luces_f','card-anexo10')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_luces_f" onchange="">
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
            		Verificar estado de los vidrios frontal, trasero y laterales
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de los vidrios frontal, trasero y laterales*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_vidrios" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_vidrios" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_vidrios" onchange="cambio_unitario('slc_vidrios','card-anexo11')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_vidrios" onchange="">
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
            		Revisar sistema de frenos y comprobacion freno de parqueo
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar sistema de frenos y comprobacion freno de parqueo*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_frenos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_frenos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_frenos" onchange="cambio_unitario('slc_frenos','card-anexo12')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_frenos" onchange="">
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
		                      <select class="form-control" id="slc_plaquetas_seguridad" onchange="cambio_unitario('slc_plaquetas_seguridad','card-anexo13')">
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
            		Pito de servicio y pito de retroceso
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar el pito de servicio y pito de retroceso *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pito" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pito" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pito" onchange="cambio_unitario('slc_pito','card-anexo14')">
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
            		Puntos de lubricación
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar puntos de lubricación*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_lubricacion" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_lubricacion" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_lubricacion" onchange="cambio_unitario('slc_lubricacion','card-anexo15')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_lubricacion" onchange="">
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
            		Niveles de fluidos 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>revisar los niveles de fluidos que esten en los niveles permitidos por la norma "Aceite hidraulico , aceite de transmisión, aceite de motor,liquido de frenos y liquido refrigerante".*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_fluido" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_fluido" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_fluido" onchange="cambio_unitario('slc_fluido','card-anexo16')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_fluido" onchange="">
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
            		Nivel de combustible
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Compruebe el nivel de combustible*</h2>
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
            		Revision de correas ajuste de alternador, ventilador y otros componentes del motor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revision de correas ajuste de alternador, ventilador y otros componentes del motor*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_correas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_correas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_correas" onchange="cambio_unitario('slc_correas','card-anexo18')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_correas" onchange="">
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
            		Verificar estado de la bateria
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de la bateria "Bornes, cables y estructura de base"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_bateria" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_bateria" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_bateria" onchange="cambio_unitario('slc_bateria','card-anexo19')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_bateria" onchange="">
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
            		Estado del enfriador o radiador, que no contenga fugas y abolladuras.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado del enfriador o radiador, que no contenga fugas y abolladuras.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_enfriador" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_enfriador" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_enfriador" onchange="cambio_unitario('slc_enfriador','card-anexo20')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_enfriador" onchange="">
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
            		Verificar mangueras
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar mangueras que no generen fugas en las lineas humedas *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_mangueras" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_mangueras" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_mangueras" onchange="cambio_unitario('slc_mangueras','card-anexo21')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_mangueras" onchange="">
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
            		Filtro del aire 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el filtro del aire *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_filtro_aire" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_filtro_aire" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_filtro_aire" onchange="cambio_unitario('slc_filtro_aire','card-anexo22')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_filtro_aire" onchange="">
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
            		Compruebe cilindros de cierre del capo.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Compruebe cilindros de cierre del capo*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cilindros" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cilindros" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cilindros" onchange="cambio_unitario('slc_cilindros','card-anexo23')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cilindros" onchange="">
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
            		Verifique el estado del extintor y botiquin que esten vigentes 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verifique el estado del extintor y botiquin que esten vigentes *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_extintor" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_extintor" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_extintor" onchange="cambio_unitario('slc_extintor','card-anexo24')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_extintor" onchange="">
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
            		Estado del tanque de combustible no fugas en  mangueras
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revise el estado del tanque de combustible no fugas en  mangueras. Compruebe el  ajuste de la tapa del depósito.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_tanque" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_tanque" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_tanque" onchange="cambio_unitario('slc_tanque','card-anexo25')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_tanque" onchange="">
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
            		Sistema Hidráulico
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Sistema Hidráulico: Verificar que no existen fugas aceite debajo de la maquina*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_hidraulico" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_hidraulico" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_hidraulico" onchange="cambio_unitario('slc_hidraulico','card-anexo26')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_hidraulico" onchange="">
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
		</div>
	</form>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  	<script src="../js/script.js"></script>
</body>
</html>