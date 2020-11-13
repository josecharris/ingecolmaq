<?php
  require 'Logic/connect.php';
  require 'admin/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<script src="js/script.js"></script>  
  <title>SISTEMAQ</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- SideBar template -->
    <?php include('sidebar.template.php'); ?>
    <!-- SideBar template -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por codigo" aria-label="Search" aria-describedby="basic-addon2" id="campo" name="campo">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Busca por..." aria-label="Search" aria-describedby="basic-addon2" id="enviar" name="enviar" value="Buscar">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario Autorizado</span>
                <img class="img-profile rounded-circle" src="img/fotoPerfil.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        
        <h1 style="margin-left: 28px;">
          Funcionario Encargado
        </h1>    

              <!-- Listar Pacientes -->

                <div class="container">  
                          <form class="form-horizontal" method="POST" action="guardar.php" enctype="multipart/form-data" autocomplete="off">
                     
                 <div style="border: solid 1px; border-color: blue; width: 400px; height: 100px;" label="Hola" >
                          <label style="background-color: white; margin-right: 2px;margin-top: -14px;"><span>Fotografia</span></label>
                          <input type="file" name="foto">
                        </div>
                      <br>
                  <div class="row">
                    <div >
                    <table>
                      <td>
                        <label for="cars">Tipo de Identificacion:</label>
<br/>
<select id="tipoIdentificacion" name="tipoIdentificacion">
  <option value="Cedula de ciudadania">Cedula de ciudadania</option>
  <option value="Tarjeta de identidad">Tarjeta de identidad</option>
  <option value="Registro Civil">Registro civil</option>
  <option value="Cedula de extranjeria">Cedula de extranjeria</option>
</select>


                      </td>
                      <td>
                    <label for="cars">Numero de identificación: </label>
                    <br/>
                     <input type="text" id="identificacion" name="identificacion"/>

                      </td>   
                      <td>
                    
                                             <label for="cars">Lugar de expedicion</label>
<br/>
<select  id="lugarExpedicion" name="lugarExpedicion">
  <option value="Sogamoso">Sogamoso [Boyaca]</option>

</select>
                      </td>
                    </div>

                      <td>
                        
                        
                      
                      </td>
                      <td>
                         
                   
                         </td>
                         <td>

                       


                    </table>
                        <table>
                         <td>
                           <label for="cars">1er Apellido: </label>
                    <br/>      
                     <input type="text" id="primerApellido" name="primerApellido" />
                          </td>
                        <td>
                           <label for="cars">2do Apellido: </label>
                    <br/>
                     <input type="text"  id="segundoApellido" name="segundoApellido" />
                        </td>
                         <td>
                            <label for="cars">1er Nombre: </label>
                    <br/>
                     <input type="text" id="primerNombre" name="primerNombre" />
                         </td>
                         <td>
                           
                            <label for="cars">2do Nombre: </label>
                    <br/>
                     <input type="text" id="segundoNombre" name="segundoNombre" />
                         </td>
                        </table>   
                          <table>
                         <td>
                           <label for="cars">Fecha: </label>
                    <br/>
                     <input type="date" id="fecha" name="fecha" />
                          </td>
                        <td>
                           <label for="cars">Edad: </label>
                    <br/>
                     <input type="text" id="edad" name="edad" />
                        </td>
                         <td>
                            <label for="cars">Genero: </label>
                    <br/>
                    <select id="genero" name="genero">
  <option value="Masculino">Masculino</option>
  <option value="Femenino">Femenino</option>

</select>
                         </td>
                         <td>
                           
                            <label for="cars">Procedencia: </label>
                    <br/>
                                 <select  id="procedencia" name="procedencia">
  <option value="Urbano">Urbano</option>
  <option value="Rural">Rural</option>

</select>
                         </td>
                        </table>  
                        <table>
                          <td>
                             <label for="cars">Estado civil: </label>
                    <br/>
                                 <select id="estadoCivil" name="estadoCivil">
  <option name="estadoCivil" value="Soltera(o)">Soltera(o)</option>
  <option name="estadoCivil" value="Casada(o)">Casada(o)</option>
</select>
</td>
<td>
                             <label for="cars">Escolaridad: </label>
                    <br/>
                                 <select  id="escolaridad" name="escolaridad">
  <option value="Bachiller">Bachiller</option>
  <option value="Tecnico">Tecnico</option>
  <option value="Universitario">Universitario</option>

</select>
</td>
<td>
                             <label for="cars">Ocupacion: </label>
                    <br/>
                                 <select  id="ocupacion" name="ocupacion">
  <option value="Tecnico">Tecnico</option>
  <option value="Profesional">Profesional</option>
    <option value="Independiente">Independiente</option>

</select>
</td>
                        </table> 
                        <table>
                          <td>
                            <label>Profesion</label>
                            <br/>
                            <input type="text" id="profesion" name="profesion" />
                          </td>
                          <td>
                            <label>Telefono 1</label>
                            <br/>
                            <input type="text" id="telefono1" name="telefono1" />
                          </td>
                          <td>
                            <label>Telefono 2</label>
                            <br/>
                            <input type="text" id="telefono2" name="telefono2" />
                          </td>
                        </table>
                  <table>
                    <td>
                    <label>Correo electronico</label>
                            <br/>
                            <input type="text" id="correo" name="correo" />
                  </td>
                  <td>
                    <label>Domicilio</label>
                            <br/>
                            <input type="text" id="domicilio" name="domicilio" />
                  </td>
                  </table>
                   <table>
                      <td>
                    <label>Lugar de residencia</label>
                            <br/>
                            <select id="residencia" name="residencia">
                              <option value="Sogamoso">
                                Sogamoso [Boyaca]  
                              </option>
                            </select>
                  </td>
                   </table>

                  </div>
                  <div>
                    <br>
                    <h6 style="font-weight: bold; color: blue;">Informacion Plan de Mantenimiento</h6>
                    <label>Tipo plan</label> <label style="margin-left: 70px;">Tipo Maquina</label><label style="margin-left: 70px;">Convenio</label>
                    <br>
                    <select name="TipoPlan">
                      <option value="Plan 1">Plan 1</option>
                      <option value="Plan 2">Plan 2</option>
                      <option value="Plan 3">Plan 3</option>
                      <option value="Nuevo">Nuevo</option>
                    </select>
                    <select name="TipoVinculacion" style="margin-left: 80px;">
                      <option value="Aplica">Aplica</option>
                      <option value="No Aplica">No Aplica</option>

                    </select>
                    <select name="Convenio" style="margin-left: 80px;">
                      <option value="Aplica">Aplica</option>
                      <option value="No Aplica">No Aplica</option>

                    </select>
                    <br><br>
                    <label>Codigo Maquinaria</label> <label style="margin-left: 240px;">Descripcion Maquinaria</label>
                    <br>
                    <input type="text" name="iad" style="width: 300px;">
                    <input type="text" name="IAS" style="margin-left: 70px; width: 300px;">
                    <br><br>
                    <label>Empresa Cliente</label> <label style="margin-left: 260px;">Descripcion Requerimientos</label>
                    <br>
                    <input type="text" name="IARL" style="width: 300px;">
                    <input type="text" name="IAP" style="margin-left: 70px; width: 300px;">
                 <br><br>
                    <label>Tipo de Fallos</label> <label style="margin-left: 50px;">Empresa  Contratante</label>
                    <br>
                    <select name="TipoExamen">
                      <option value="Mecanico">Mecanico</option>
                      <option value="Electrico">Electrico</option>
                    </select>
                    <input type="text" name="EmprContratante" style="margin-left: 70px; width: 300px;">
                     <br><br>
                    <label>Jornada Uso</label> <label style="margin-left: 50px;">Area donde se usa</label>
                    <br>
                    <select name="jornada">
                      <option value="Diurna">Diurna</option>
                      <option value="Nocturna">Nocturna</option>
                    </select>
                    <input type="text" name="cargoDesem" style="margin-left: 70px; width: 300px;">

                  </div>
                  <button type="submit" class="btn btn-primary" style="margin-right: 20px;  margin-top: 410px; height: 50px !important;width: 100px;">Guardar</button>
    
              </form>
              </div>


<!-- Modal -->
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
          </div>
          
          <div class="modal-body">
            ¿Desea eliminar este registro?
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok">Delete</a>
          </div>
        </div>
      </div>
    </div>
    
  
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
 <script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      });
    </script> 
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script>
    $(document).ready(() => {
        var canvasDiv = document.getElementById('canvasDiv');
        var canvas = document.createElement('canvas');
        canvas.setAttribute('id', 'canvas');
        canvasDiv.appendChild(canvas);
        $("#canvas").attr('height', $("#canvasDiv").outerHeight());
        $("#canvas").attr('width', $("#canvasDiv").width());
        if (typeof G_vmlCanvasManager != 'undefined') {
            canvas = G_vmlCanvasManager.initElement(canvas);
        }
        
        context = canvas.getContext("2d");
        $('#canvas').mousedown(function(e) {
            var offset = $(this).offset()
            var mouseX = e.pageX - this.offsetLeft;
            var mouseY = e.pageY - this.offsetTop;

            paint = true;
            addClick(e.pageX - offset.left, e.pageY - offset.top);
            redraw();
        });

        $('#canvas').mousemove(function(e) {
            if (paint) {
                var offset = $(this).offset()
                //addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
                addClick(e.pageX - offset.left, e.pageY - offset.top, true);
                console.log(e.pageX, offset.left, e.pageY, offset.top);
                redraw();
            }
        });

        $('#canvas').mouseup(function(e) {
            paint = false;
        });

        $('#canvas').mouseleave(function(e) {
            paint = false;
        });

        var clickX = new Array();
        var clickY = new Array();
        var clickDrag = new Array();
        var paint;

        function addClick(x, y, dragging) {
            clickX.push(x);
            clickY.push(y);
            clickDrag.push(dragging);
        }

        $("#reset-btn").click(function() {
            context.clearRect(0, 0, window.innerWidth, window.innerWidth);
            clickX = [];
            clickY = [];
            clickDrag = [];
        });

        $(document).on('click', '#btn-save', function() {
            var mycanvas = document.getElementById('canvas');
            var img = mycanvas.toDataURL("image/png");
            anchor = $("#signature");
            anchor.val(img);
            $("#signatureform").submit();
        });

        var drawing = false;
        var mousePos = {
            x: 0,
            y: 0
        };
        var lastPos = mousePos;

        canvas.addEventListener("touchstart", function(e) {
            mousePos = getTouchPos(canvas, e);
            var touch = e.touches[0];
            var mouseEvent = new MouseEvent("mousedown", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchend", function(e) {
            var mouseEvent = new MouseEvent("mouseup", {});
            canvas.dispatchEvent(mouseEvent);
        }, false);


        canvas.addEventListener("touchmove", function(e) {

            var touch = e.touches[0];
            var offset = $('#canvas').offset();
            var mouseEvent = new MouseEvent("mousemove", {
                clientX: touch.clientX,
                clientY: touch.clientY
            });
            canvas.dispatchEvent(mouseEvent);
        }, false);



        // Get the position of a touch relative to the canvas
        function getTouchPos(canvasDiv, touchEvent) {
            var rect = canvasDiv.getBoundingClientRect();
            return {
                x: touchEvent.touches[0].clientX - rect.left,
                y: touchEvent.touches[0].clientY - rect.top
            };
        }


        var elem = document.getElementById("canvas");

        var defaultPrevent = function(e) {
            e.preventDefault();
        }
        elem.addEventListener("touchstart", defaultPrevent);
        elem.addEventListener("touchmove", defaultPrevent);


        function redraw() {
            //
            lastPos = mousePos;
            for (var i = 0; i < clickX.length; i++) {
                context.beginPath();
                if (clickDrag[i] && i) {
                    context.moveTo(clickX[i - 1], clickY[i - 1]);
                } else {
                    context.moveTo(clickX[i] - 1, clickY[i]);
                }
                context.lineTo(clickX[i], clickY[i]);
                context.closePath();
                context.stroke();
            }
        }
    })

</script>
</html>
