<?php
   require 'Logic/connect.php';
  

$sqlb = "SELECT citas.tipoCita,citas.fechaCita,citas.horaCita, paciente.identificacion,paciente.primerApellido,paciente.primerNombre  from citas inner join paciente on citas.idPaciente=paciente.identificacion"; 
  $result2 = mysqli_query($connection, $sqlb);

 


?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gestion Mantenimiento</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
 <div class="row table-responsive">
                    <table class="table">
                     <thead class="thead-dark">
                      <tr>
                       <th>Tipo</th> 
                       <th>Fecha</th> 
                       <th>Hora</th> 
                       <th>Identificacion</th> 
                       <th>Codigo Maquina</th> 
                       <th>Tipo de Mantenimiento</th> 
                      </tr>  
                      </thead>
                    <tbody>
                      <?php while($row = $result2->fetch_array(MYSQLI_ASSOC)) { ?>
              <tr>
                
                <td><?php echo $row['tipoCita']; ?></td>
                <td><?php echo $row['fechaCita']; ?></td>
                <td><?php echo $row['horaCita']; ?></td>
                <td><?php echo $row['identificacion']; ?></td>
                <td><?php echo $row['primerApellido']; ?></td>
                <td><?php echo $row['primerNombre']; ?></td>
                
                
              </tr>
            <?php } ?>
                    </tbody>


                    </table>
                    
                  </div>
              
</body>
</html>