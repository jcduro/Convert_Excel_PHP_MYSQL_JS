
 <!-- Welcome to
  
     |  ___|  __ \  |   |  _ \   _ \   
     | |      |   | |   | |   | |   |  
 \   | |      |   | |   | __ <  |   |  
\___/ \____| ____/ \___/ _| \_\\___/   
                                       
  ___|  _ \  __ \  ____|    _ )   _ _| __ \  ____|    \     ___|  
 |     |   | |   | __|     _ \ \   |  |   | __|     _ \  \___ \  
 |     |   | |   | |      ( `  <   |  |   | |      ___ \       | 
\____|\___/ ____/ _____| \___/\/ ___|____/ _____|_/    _\_____/  

  https://jcduro.bexartideas.com/index.php | 2026 | JC Duro Code & Ideas

------------------------------------------------------------------------------- -->



<?php
require_once __DIR__ . "/conexion.php"; 

$stmt = $pdo->query(
    "SELECT id, nombre, correo, telefono, pais, ciudad, fecha_registro
     FROM form_neon
     ORDER BY id DESC
     LIMIT 50");
$rows = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Update</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font Awesome para iconos (si no lo tienes ya en el layout) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link rel="stylesheet" href="css/lista.css"/>

</head>
<body>
 


<?php if (!$rows): ?>
  <p class="vacio">Sin registros aún</p>
<?php else: ?>
  <div class="tabla-cont">
    <table class="neon-table">
      <thead>
        <tr>
          <th>#</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>País</th><th>Ciudad</th><th>Fecha</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($rows as $r): ?>
          <tr>
            <td><?= $r['id'] ?></td>
            <td><?= htmlspecialchars($r['nombre'])   ?></td>
            <td><?= htmlspecialchars($r['correo'])   ?></td>
            <td><?= htmlspecialchars($r['telefono']) ?></td>
            <td><?= htmlspecialchars($r['pais'])     ?></td>
            <td><?= htmlspecialchars($r['ciudad'])   ?></td>
            <td><?= date('d/m/Y H:i', strtotime($r['fecha_registro'])) ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>
