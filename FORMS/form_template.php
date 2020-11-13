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
          Equipos de emergencia
        </div>
        <div class="accordion-item-body" id="body-emergencia">
          <div class="accordion-item-body-content">
            <div class="card" id="seccion_equipos">
              <div class="card-body">
                <h2>Equipos de emergencia</h2>
                <div class="form-group" style="margin-top: 15px;">
                    <label for="exampleFormControlSelect1">Extintor*</label>
                    <select class="form-control" id="slc_extintor" onchange="cambio_doble('slc_extintor','slc_botiquin','card-anexo');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Botiquin*</label>
                    <select class="form-control" id="slc_botiquin" onchange="cambio_doble('slc_extintor','slc_botiquin','card-anexo');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <div class="card ocultar" id="card-anexo">
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
          Cabina de operación
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content margen">
            <div class="card">
              <div class="card-body">
                <h2>Cabina de operación</h2>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Aire Acondicionado*</label>
                    <select class="form-control" id="slc_aire_acondicionado" onchange="cambio_quintuple('slc_aire_acondicionado','slc_silla_operador','slc_cinturon_seguridad','slc_vidrios','slc_proteccion_cabina','card-anexo2');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Silla Operador*</label>
                    <select class="form-control" id="slc_silla_operador" onchange="cambio_quintuple('slc_aire_acondicionado','slc_silla_operador','slc_cinturon_seguridad','slc_vidrios','slc_proteccion_cabina','card-anexo2');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Cinturon de Seguridad*</label>
                    <select class="form-control" id="slc_cinturon_seguridad" onchange="cambio_quintuple('slc_aire_acondicionado','slc_silla_operador','slc_cinturon_seguridad','slc_vidrios','slc_proteccion_cabina','card-anexo2');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Vidríos (Panorámicos, laterales y demás) Ausencia*</label>
                    <select class="form-control" id="slc_vidrios" onchange="cambio_quintuple('slc_aire_acondicionado','slc_silla_operador','slc_cinturon_seguridad','slc_vidrios','slc_proteccion_cabina','card-anexo2');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">La cabina debe proteger contra la inhalación de polvo, ruido, stress térmico o insolación*</label>
                    <select class="form-control" id="slc_proteccion_cabina" onchange="cambio_quintuple();">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                    <br>
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
          Controles, luces y espejos retrovisores
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Controles, luces y espejos retrovisores</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Indicadores de control (Temperaturas, Presiones, Alternador)*</label>
                    <select class="form-control" id="slc_ind_control" onchange="cambio_cuadruple('slc_ind_control','slc_luces','slc_espejos_ext','slc_pito_alarma_ret','card-anexo3');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Luces de servicio y direccionales*</label>
                    <select class="form-control" id="slc_luces" onchange="cambio_cuadruple('slc_ind_control','slc_luces','slc_espejos_ext','slc_pito_alarma_ret','card-anexo3');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Espejos exteriores*</label>
                    <select class="form-control" id="slc_espejos_ext" onchange="cambio_cuadruple('slc_ind_control','slc_luces','slc_espejos_ext','slc_pito_alarma_ret','card-anexo3');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Pito de servicio y Alarma de retroceso*</label>
                    <select class="form-control" id="slc_pito_alarma_ret" onchange="cambio_cuadruple('slc_ind_control','slc_luces','slc_espejos_ext','slc_pito_alarma_ret','card-anexo3');">
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
          Limpiaparabrisas
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Limpiaparabrisas</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique funcionamiento, estado de plumillas y nivel de liquido*</label>
                    <select class="form-control" id="slc_funcionamiento_parabrisa" onchange="cambio_unitario('slc_funcionamiento_parabrisa','card-anexo4');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                    <br>
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
          Estado general estructura y guardas
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Estado general estructura y guardas</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verificar estado del bastidor por fisuras o golpes, presencia y estado de las guardas y protecciones*</label>
                    <select class="form-control" id="slc_funcionamiento_bastidor" onchange="cambio_unitario('slc_funcionamiento_bastidor','card-anexo5');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                    <br>
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
          Combustible
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Combustible</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique que el nivel de combustible este dentro del indicador de reserva y full*</label>
                    <select class="form-control" id="slc_combustible" onchange="cambio_unitario('slc_combustible', 'card-anexo6');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                    <br>
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
          Nivel de refrigerante
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Nivel de refrigerante</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique  que los niveles este dentro de las dos líneas de la mirilla y que no hallan fugas en el sistema o en el radiador*</label>
                    <select class="form-control" id="slc_refrigerante" onchange="cambio_unitario('slc_refrigerante', 'card-anexo7');">
                      <option value="default">- Seleccione una opción -</option>
                      <option value="C">Conforme (C)</option>
                      <option value="NC">No conforme (NC)</option>
                      <option value="NA">No aplica (NA)</option>
                    </select>
                    <br>
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
          Niveles de aceite en el motor y servo transmisión o caja hidrostatica
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Niveles de aceite en el motor y servo transmisión o caja hidrostatica</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique  que los niveles este dentro del rango establecido según el manual*</label>
                    <select class="form-control" id="slc_aceite_motor" onclick="cambio_unitario('slc_aceite_motor','card-anexo8');">
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
          Niveles de aceite hidráulico
        </div>
        <div class="accordion-item-body">
          <div class="accordion-item-body-content">
            <div class="card">
              <div class="card-body">
                <h2>Niveles de aceite hidráulico</h2>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Verifique  que los niveles este dentro del rango establecido según el manual*</label>
                    <select class="form-control" id="slc_aceite_hidraulico" onchange="cambio_unitario('slc_aceite_hidraulico','card-anexo9');">
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
      