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
            		Cuchilla, pasadores, tornillos, estructura y base del balde.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar cuchilla "Pala", pasadores, tornillos, estructura y base del balde.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cuchilla" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cuchilla" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cuchilla" onchange="cambio_unitario('slc_cuchilla','card-anexo3')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cuchilla" onchange="">
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
            		Estado de cilindros de inclinación.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de cilindros de inclinación.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_cilindro" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_cilindro" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_cilindro" onchange="cambio_unitario('slc_cilindro','card-anexo4')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_cilindro" onchange="">
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
            		Estado de llantas,"Pernos,tornillos y presion".
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Chequear estado de llantas,"Pernos,tornillos y presion".*</h2>
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
            		Estructura general 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estructura general *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_estructura_grl" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_estructura_grl" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_estructura_grl" onchange="cambio_unitario('slc_estructura_grl','card-anexo6')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_estructura_grl" onchange="">
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
            		Vidrios laterales, frontal y trasero.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar vidrios laterales, frontal y trasero.*</h2>
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
		                      <select class="form-control" id="slc_vidrios" onchange="cambio_unitario('slc_vidrios','card-anexo7')">
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
            		Cilindros de levante del equipo.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar cilindros de levante del equipo.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_levante" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_levante" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_levante" onchange="cambio_unitario('slc_levante','card-anexo8')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_levante" onchange="">
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
            		Revisar mangueras en general.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar mangueras en general.*</h2>
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
		                      <select class="form-control" id="slc_mangueras" onchange="cambio_unitario('slc_mangueras','card-anexo9')">
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
            		Revisar mecanismo, sistema limpiaparabrisas. 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar mecanismo, sistema limpiaparabrisas. *</h2>
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
		                      <select class="form-control" id="slc_limpiaparabrisas" onchange="cambio_unitario('slc_limpiaparabrisas','card-anexo10')">
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
            		Estado de los brazos de levante del equipo y barra de seguridad.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar estado de los brazos de levante del equipo y barra de seguridad.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_brazos" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_brazos" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_brazos" onchange="cambio_unitario('slc_brazos','card-anexo11')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_brazos" onchange="">
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
            		Revisar las lineas humedas del sistema de levante.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar las lineas humedas del sistema de levante. "Tubos hidraulicos de herramienta de trabajo".*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_sistema" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_sistema" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_sistema" onchange="cambio_unitario('slc_sistema','card-anexo12')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_sistema" onchange="">
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
            		Revisar estado de la puerta del compartimiento del motor.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado de la puerta del compartimiento del motor."Chapa, bisagras y estructura".*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_puerta" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_puerta" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_puerta" onchange="cambio_unitario('slc_puerta','card-anexo13')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_puerta" onchange="">
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
            		Bateria en perfecto estado, "Bornes,cables,caja y aseo".  
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar bateria en perfecto estado, "Bornes,cables,caja y aseo". *</h2>
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
		                      <select class="form-control" id="slc_bateria" onchange="cambio_unitario('slc_bateria','card-anexo14')">
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
            		Estado de filtro de aire.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar estado de filtro de aire.*</h2>
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
		                      <select class="form-control" id="slc_aire" onchange="cambio_unitario('slc_aire','card-anexo15')">
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
            		Nivel de refrigerante que este en primer o segundo nivel. 
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar nivel de refrigerante que este en primer o segundo nivel. *</h2>
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
            		Estado del enfriador que no contenga inperfecciones
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar el estado del enfriador que no contenga inperfecciones.*</h2>
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
            		Nivel del hidraulico.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar nivel del hidraulico.*</h2>
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
		                      <select class="form-control" id="slc_hidraulico" onchange="cambio_unitario('slc_hidraulico','card-anexo18')">
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
            		Revisar exosto que no contenga fisuras o escapes.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar exosto que no contenga fisuras o escapes.*</h2>
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
		                      <select class="form-control" id="slc_exosto" onchange="cambio_unitario('slc_exosto','card-anexo19')">
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
            		Tanque de combustible, "mangueras, soporte y tapa".
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar tanque de combustible, "mangueras, soporte y tapa".*</h2>
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
		                      <select class="form-control" id="slc_tanque" onchange="cambio_unitario('slc_tanque','card-anexo20')">
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
            		Sistemas de correas del alternador y motor, poleas en perfecto estado.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar sistemas de correas del alternador y motor, poleas en perfecto estado.*</h2>
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
		                      <select class="form-control" id="slc_correas" onchange="cambio_unitario('slc_correas','card-anexo21')">
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
            		Sistema y estado de la silla.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar el sistema y estado de la silla.*</h2>
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
		                      <select class="form-control" id="slc_silla" onchange="cambio_unitario('slc_silla','card-anexo23')">
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
            		Peldaños y escalon de ingreso a la cabina.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar peldaños y escalon de ingreso a la cabina.*</h2>
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
		                      <select class="form-control" id="slc_cabina" onchange="cambio_unitario('slc_cabina','card-anexo24')">
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
            		Revisar mandos, pedales y barra antivuelco.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar mandos, pedales y barra antivuelco.*</h2>
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
		                      <select class="form-control" id="slc_mandos" onchange="cambio_unitario('slc_mandos','card-anexo25')">
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
            		Sistema de luces delanteras y traseras.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar sistema de luces delanteras y traseras.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_luces" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_luces" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_luces" onchange="cambio_unitario('slc_luces','card-anexo26')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_luces" onchange="">
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
            		Sistema de aire acondicionado
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar sistema de aire acondicionado*</h2>
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
		                      <select class="form-control" id="slc_acondicionado" onchange="cambio_unitario('slc_acondicionado','card-anexo27')">
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
		                      <select class="form-control" id="slc_pito" onchange="cambio_unitario('slc_pito','card-anexo28')">
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
            		Verificar sistema de bloqueo y parqueo.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Verificar sistema de bloqueo y parqueo. *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_bloqueo" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_bloqueo" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_bloqueo" onchange="cambio_unitario('slc_bloqueo','card-anexo29')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_bloqueo" onchange="">
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
            		Niveles de aceites en sistema de translación.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar niveles de aceites en sistema de translación.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_aceites" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_aceites" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_aceites" onchange="cambio_unitario('slc_aceites','card-anexo30')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_aceites" onchange="">
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
            		Estado del bastidor
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar estado del bastidor  *</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_bastidor" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_bastidor" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_bastidor" onchange="cambio_unitario('slc_bastidor','card-anexo31')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_bastidor" onchange="">
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
            		Chapa y ajuste de la puerta frontal.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Comprobar chapa y ajuste de la puerta frontal.*</h2>
		                  <br>
		                  <h3>Verifique:</h3><br>
		                  <div class="form-group">		                      
		                      <label for="exampleFormControlSelect1">Tipo de falla*</label><br>
		                      &nbsp;&nbsp;
		                      <input type="radio" name="falla_chapa" value="electrica"/>Eléctrica
		                      &nbsp;&nbsp;&nbsp;
    						  <input type="radio" name="falla_chapa" value="mecanica"/> Mecánica<br/>
    						  <br>
    						  <label for="exampleFormControlSelect1">Evalúe*</label><br>
		                      <select class="form-control" id="slc_chapa" onchange="cambio_unitario('slc_chapa','card-anexo32')">
		                        <option value="default">- Seleccione una opción -</option>
		                        <option value="C">Conforme (C)</option>
		                        <option value="NC">No conforme (NC)</option>
		                        <option value="NA">No aplica (NA)</option>
		                      </select><br>
		                      <br>
		                      <label for="exampleFormControlSelect1">Grado de prioridad*</label><br>
		                      <select class="form-control" id="prioridad_chapa" onchange="">
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
            		Botiquin y extinguidor que no esten vencidos.
          		</div>
          		<div class="accordion-item-body">
		            <div class="accordion-item-body-content">
		              <div class="card">
		                <div class="card-body">
		                  <h2>Revisar botiquin y extinguidor que no esten vencidos.*</h2>
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
		                      <select class="form-control" id="slc_plaquetas_seguridad" onchange="cambio_unitario('slc_plaquetas_seguridad','card-anexo34')">
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
		</div>
	</form>



	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  	<script src="../js/script.js"></script>
</body>
</html>