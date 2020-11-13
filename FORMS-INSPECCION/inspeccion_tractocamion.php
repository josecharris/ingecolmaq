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
            		Estado general de la maquina
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Estado general de la maquina.*</h2>
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
		                      <select class="form-control" id="slc_estado_grl" onchange="cambio_unitario('slc_estado_grl','card-anexo3')">
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
            		Verificar nivel de refrigerante
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar nivel de refrigerante que esten en los niveles permitidos *</h2>
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
		                      <select class="form-control" id="slc_refrigerante" onchange="cambio_unitario('slc_refrigerante','card-anexo4')">
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
            		Nivel de acceite hidraulico y aceite de motor en los niveles permitidos
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar nivel de acceite hidraulico y aceite de motor en los niveles permitidos*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_aceite_h" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_aceite_h" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_aceite_h" onchange="cambio_unitario('slc_aceite_h','card-anexo6')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_aceite_h" onchange="">
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
            		Verificar estado de la quinta rueda "Mecanismo de seguro"
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de la quinta rueda "Mecanismo de seguro"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_rueda" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_rueda" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_rueda" onchange="cambio_unitario('slc_rueda','card-anexo7')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_rueda" onchange="">
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
            		Estado de los muelles 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado de los muelles *</h2>
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
            		Eje de cardan y crusetas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar eje de cardan y crusetas*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_eje" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_eje" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_eje" onchange="cambio_unitario('slc_eje','card-anexo9')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_eje" onchange="">
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
            		Niveles de la caja de transmision 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar niveles de la caja de transmision *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_caja_t" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_caja_t" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_caja_t" onchange="cambio_unitario('slc_caja_t','card-anexo10')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_caja_t" onchange="">
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
            		Revisar estado de mangueras y acoples de salida
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de mangueras y acoples de salida "Aire y sistema electrico" *</h2>
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
		                      <select class="form-control" id="slc_mangueras" onchange="cambio_unitario('slc_mangueras','card-anexo11')">
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
            		Revisar fugas de motor, transmisión y caja de dirección
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar fugas de motor, transmisión y caja de dirección*</h2>
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
		                      <select class="form-control" id="slc_fugas" onchange="cambio_unitario('slc_fugas','card-anexo12')">
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
            		Estado general de la bateria
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Estado general de la bateria "Cables, bornes y estructura"*</h2>
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
		                      <select class="form-control" id="slc_bateria" onchange="cambio_unitario('slc_bateria','card-anexo13')">
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
            		Revisar estado de los tanques de aire que no contengan fugas 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de los tanques de aire que no contengan fugas*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_tanques" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_tanques" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_tanques" onchange="cambio_unitario('slc_tanques','card-anexo14')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_tanques" onchange="">
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
            		Estado del exosto que no esten fisurado y suelto
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado del exosto que no esten fisurado y suelto*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_exosto" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_exosto" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_exosto" onchange="cambio_unitario('slc_exosto','card-anexo15')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_exosto" onchange="">
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
            		Estado del radiador que no contenga fugas y este sin abolladuras
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado del radiador que no contenga fugas y este sin abolladuras*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_radiador" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_radiador" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_radiador" onchange="cambio_unitario('slc_radiador','card-anexo16')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_radiador" onchange="">
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
            		Filtro de aire y la tapa del filtro
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el filtro de aire y la tapa del filtro*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_filtro" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_filtro" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_filtro" onchange="cambio_unitario('slc_filtro','card-anexo17')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_filtro" onchange="">
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
            		Comprobar puntos de engrase
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar puntos de engrase*</h2>
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
		                      <select class="form-control" id="slc_engrase" onchange="cambio_unitario('slc_engrase','card-anexo18')">
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
            		Estado del tanque de combustible, revise el estado de mangueras y ajuste de la tapa del depósito.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar el estado del tanque de combustible, revise el estado de mangueras y ajuste de la tapa del depósito.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_tanque_c" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_tanque_c" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_tanque_c" onchange="cambio_unitario('slc_tanque_c','card-anexo19')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_tanque_c" onchange="">
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
            		Sistema de enganche de la cabina 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el sistema de enganche de la cabina *</h2>
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
		                      <select class="form-control" id="slc_enganche" onchange="cambio_unitario('slc_enganche','card-anexo20')">
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
            		Revisar el pin del gato de levantamiento de la cabina
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el pin del gato de levantamiento de la cabina*</h2>
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
		                      <select class="form-control" id="slc_gato" onchange="cambio_unitario('slc_gato','card-anexo21')">
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
            		Comprobar la correa del ventilador del alternador que no esten sueltas 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar la correa del ventilador del alternador que no esten sueltas *</h2>
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
		                      <select class="form-control" id="slc_correa" onchange="cambio_unitario('slc_correa','card-anexo22')">
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
            		Revisar el estado de la pintura de la cabina
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el estado de la pintura de la cabina*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pintura" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pintura" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pintura" onchange="cambio_unitario('slc_pintura','card-anexo23')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pintura" onchange="">
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
            		Comprobar estado manometros e indicadores 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado manometros e indicadores *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_manometros" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_manometros" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_manometros" onchange="cambio_unitario('slc_manometros','card-anexo24')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_manometros" onchange="">
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
            		Estado de vidrios frontal, laterales, cunete y espejos en general
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de vidrios frontal, laterales, cunete y espejos en general*</h2>
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
		                      <select class="form-control" id="slc_vidrios" onchange="cambio_unitario('slc_vidrios','card-anexo25')">
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
            		Revisar el sistema de arranque
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el sistema de arranque*</h2>
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
		                      <select class="form-control" id="slc_arranque" onchange="cambio_unitario('slc_arranque','card-anexo26')">
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
            		Comprobar sistema de limpiaparabrisas
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar sistema de limpiaparabrisas "Mecanismo, Bomba de agua"*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_limpiaparabrisas" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_limpiaparabrisas" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_limpiaparabrisas" onchange="cambio_unitario('slc_limpiaparabrisas','card-anexo27')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_limpiaparabrisas" onchange="">
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
            		Revisar sistema de aire acondicionado 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar sistema de aire acondicionado *</h2>
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
		                      <select class="form-control" id="slc_aire" onchange="cambio_unitario('slc_aire','card-anexo28')">
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
            		Sistema y estado de las sillas ademas de los cinturones de seguridad
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar sistema y estado de las sillas ademas de los cinturones de seguridad*</h2>
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
		                      <select class="form-control" id="slc_sillas" onchange="cambio_unitario('slc_sillas','card-anexo29')">
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
            		Estado de los peldaños y escalones de ingreso a la cabina
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado de los peldaños y escalones de ingreso a la cabina*</h2>
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
		                      <select class="form-control" id="slc_peldanos" onchange="cambio_unitario('slc_peldanos','card-anexo30')">
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
            		Estado de pedales , palancas, botones y volante 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de pedales, palancas, botones y volante *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_pedales" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_pedales" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_pedales" onchange="cambio_unitario('slc_pedales','card-anexo31')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_pedales" onchange="">
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
            		Funcionamiento de freno de motor o ahogo y pivote del freno
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar funcionamiento de freno de motor o ahogo y pivote del freno.*</h2>
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
            		Revisar el sistema del horometro
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el sistema del horometro*</h2>
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
		                      <select class="form-control" id="slc_horometro" onchange="cambio_unitario('slc_horometro','card-anexo33')">
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
            		Revision del estado y presencia de plaquetas de seguridad internas y externas
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
		                      <input type="radio" name="falla_plaqueta_seguridad" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_plaqueta_seguridad" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_plaqueta_seguridad" onchange="cambio_unitario('slc_plaqueta_seguridad','card-anexo34')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_plaqueta_seguridad" onchange="">
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
            		Extintor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Extintor: Estado, carga y base*</h2>
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
		                      <select class="form-control" id="slc_extintor" onchange="cambio_unitario('slc_extintor','card-anexo35')">
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
            		Botiquin
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Botiquin que este vigente*</h2>
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
		                      <select class="form-control" id="slc_botiquin" onchange="cambio_unitario('slc_botiquin','card-anexo36')">
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
            		Conos y Triangulos
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Conos y  Triangulos*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_conos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_conos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_conos" onchange="cambio_unitario('slc_conos','card-anexo37')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_conos" onchange="">
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