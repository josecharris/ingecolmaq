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
            		Verificar llantas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar llantas  cortes, desgaste, presion, pernos, valvulas y rin"*</h2>
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
		                      <select class="form-control" id="slc_llantas" onchange="cambio_unitario('slc_llantas','card-anexo3')">
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
            		Refrigerante y aceite hidraulico.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar niveles de rango permitido de refrigerante, aceite hidraulico.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_niveles" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_niveles" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_niveles" onchange="cambio_unitario('slc_niveles','card-anexo4')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_niveles" onchange="">
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
            		Nivel liquido de freno o "Sistema de aire"
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar nivel liquido de freno o "Sistema de aire"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_freno" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_freno" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_freno" onchange="cambio_unitario('slc_freno','card-anexo5')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_freno" onchange="">
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
            		Revisar cardan
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar cardan que este bien ajustado "Crusetas y juntas"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cardan" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cardan" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cardan" onchange="cambio_unitario('slc_cardan','card-anexo6')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cardan" onchange="">
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
            		Revisar puntos de engrase
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar puntos de engrase*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_engrase" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_engrase" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_engrase" onchange="cambio_unitario('slc_engrase','card-anexo7')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_engrase" onchange="">
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
            		Comprobar los muelles que no esten rotos y que esten ajustados.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar los muelles que no esten rotos y que esten ajustados.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_muelles" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_muelles" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_muelles" onchange="cambio_unitario('slc_muelles','card-anexo8')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_muelles" onchange="">
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
            		Revisar presencia y estado de cadena de seguridad de cardan
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar presencia y estado de cadena de seguridad de cardan*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cadena" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cadena" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cadena" onchange="cambio_unitario('slc_cadena','card-anexo9')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cadena" onchange="">
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
            		Grapas del tanque
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar las grapas del tanque, esten bien ajustadas.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_grapas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_grapas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_grapas" onchange="cambio_unitario('slc_grapas','card-anexo10')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_grapas" onchange="">
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
            		Estado general del tanque de carga.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado general del tanque de carga.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_tanque_grl" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_tanque_grl" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_tanque_grl" onchange="cambio_unitario('slc_tanque_grl','card-anexo11')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_tanque_grl" onchange="">
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
            		Sistema de riego
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar sistema de riego "Flauta". La valvula de apertura del tanque y la motobomba.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_riego" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_riego" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_riego" onchange="cambio_unitario('slc_riego','card-anexo12')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_riego" onchange="">
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
            		Escape de agua, fisuras, abolladuras en el tanque de carga.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar que no contengan escape de agua, fisuras, abolladuras en el tanque de carga.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_escape" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_escape" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_escape" onchange="cambio_unitario('slc_escape','card-anexo13')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_escape" onchange="">
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
            		Escaleras y linea de vida del tanque de carga. 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar escaleras y linea de vida del tanque de carga.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_escaleras" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_escaleras" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_escaleras" onchange="cambio_unitario('slc_escaleras','card-anexo14')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_escaleras" onchange="">
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
            		Correa del ventilador que no esten sueltas o fisuradas.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar la correa del ventilador que no esten sueltas o fisuradas.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_correa" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_correa" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_correa" onchange="cambio_unitario('slc_correa','card-anexo15')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_correa" onchange="">
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
            		Estado general de fugas hidraulico y mangueras.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado general de fugas hidraulico y mangueras.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_estado_grl" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_estado_grl" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_estado_grl" onchange="cambio_unitario('slc_estado_grl','card-anexo16')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_estado_grl" onchange="">
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
            		Estado del enfriador o radiador, que no tenga fugas y abolladuras.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado del enfriador o radiador, que no tenga fugas y abolladuras.*</h2>
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
		                      <select class="form-control" id="slc_enfriador" onchange="cambio_unitario('slc_enfriador','card-anexo17')">
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
            		Sistema de enganche de la cabina.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar sistema de enganche de la cabina.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_enganche" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_enganche" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_enganche" onchange="cambio_unitario('slc_enganche','card-anexo18')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_enganche" onchange="">
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
            		Pin del gato de levatamiento de la cabina.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar el pin del gato de levatamiento de la cabina.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_gato" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_gato" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_gato" onchange="cambio_unitario('slc_gato','card-anexo19')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_gato" onchange="">
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
            		Peldaños de escaleras y barandas de acceso a la cabina.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar peldaños de escaleras y barandas de acceso a la cabina.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_peldanos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_peldanos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_peldanos" onchange="cambio_unitario('slc_peldanos','card-anexo20')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_peldanos" onchange="">
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
            		Estado y ajustes de las terminales de dirección.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado y ajustes de las terminales de dirección.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_terminales" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_terminales" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_terminales" onchange="cambio_unitario('slc_terminales','card-anexo21')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_terminales" onchange="">
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
            		Sistema de arranque.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar sistema de arranque.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_arranque" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_arranque" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_arranque" onchange="cambio_unitario('slc_arranque','card-anexo22')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_arranque" onchange="">
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
            		Indicadores en el tablero.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar indicadores en el tablero.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_indicadores" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_indicadores" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_indicadores" onchange="cambio_unitario('slc_indicadores','card-anexo23')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_indicadores" onchange="">
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
            		Revisar sistema de la silla, que este en perfecto estado.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar sistema de la silla, que este en perfecto estado.*</h2>
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
		                      <select class="form-control" id="slc_silla" onchange="cambio_unitario('slc_silla','card-anexo24')">
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
            		Vidrio frontal, laterales y espejos.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar vidrio frontal, laterales y espejos.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_vidrio" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_vidrio" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_vidrio" onchange="cambio_unitario('slc_vidrio','card-anexo25')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_vidrio" onchange="">
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
            		Estado de baterias, sistema postas o bornes, terminales, estado de los cables y base de ajuste de la bateria, "Aseo".
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de baterias, sistema postas o bornes, terminales, estado de los cables y base de ajuste de la bateria, "Aseo".*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_baterias" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_baterias" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_baterias" onchange="cambio_unitario('slc_baterias','card-anexo26')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_baterias" onchange="">
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
            		Componentes del motor, fugas, correas y alternador, Soportes, estado del turbo, filtros de aire y mangueras en general.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar componentes del motor, fugas de aceites o combustibles, correa del ventilador y alternador,Soportes del alternador, estado del turbo, filtros de aire y mangueras en general.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_motor" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_motor" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_motor" onchange="cambio_unitario('slc_motor','card-anexo27')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_motor" onchange="">
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
            		Revisar palancas, pedales, chapas de las puertas.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar palancas, pedales, chapas de las puertas.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_palancas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_palancas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_palancas" onchange="cambio_unitario('slc_palancas','card-anexo28')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_palancas" onchange="">
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
            		Verificar estado general de luces.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado general de luces.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_luces_grl" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_luces_grl" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_luces_grl" onchange="cambio_unitario('slc_luces_grl','card-anexo29')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_luces_grl" onchange="">
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
            		Estado de frenos y sistema de parqueo.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de frenos y sistema de parqueo.*</h2>
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
		                      <select class="form-control" id="slc_frenos" onchange="cambio_unitario('slc_frenos','card-anexo30')">
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
            		Pito de servicio y alarma de retroceso.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar pito de servicio y alarma de retroceso.*</h2>
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
		                      <select class="form-control" id="slc_pito" onchange="cambio_unitario('slc_pito','card-anexo31')">
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
            		Freno de parqueo o de servicio.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar freno de parqueo o de servicio.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_freno" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_freno" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_freno" onchange="cambio_unitario('slc_freno','card-anexo32')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_freno" onchange="">
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
            		Comprobar la existencia de botiquin y extintor que no esten vencidos
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar la existencia de botiquin y extintor que no esten vencidos*</h2>
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
		                      <select class="form-control" id="slc_botiquin" onchange="cambio_unitario('slc_botiquin','card-anexo33')">
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
            		Presencia y estado de cinturon de seguridad
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar presencia y estado de cinturon de seguridad*</h2>
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
		                      <select class="form-control" id="slc_cinturon" onchange="cambio_unitario('slc_cinturon','card-anexo34')">
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
            		Sistema de aire acondicionado 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar sistema de aire acondicionado *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_acondicionado" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_acondicionado" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_acondicionado" onchange="cambio_unitario('slc_acondicionado','card-anexo35')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_acondicionado" onchange="">
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
            		Sistema de limpiparabrisas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar sistema de limpiparabrisas*</h2>
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
		                      <select class="form-control" id="slc_limpiparabrisas" onchange="cambio_unitario('slc_limpiparabrisas','card-anexo33')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_limpiparabrisas" onchange="">
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
		                      <select class="form-control" id="slc_plaquetas_seguridad" onchange="cambio_unitario('slc_plaquetas_seguridad','card-anexo37')">
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
		</div>
	</form>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  	<script src="../js/script.js"></script>
</body>
</html>