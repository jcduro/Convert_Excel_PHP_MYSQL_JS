
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
// Incluir tu conexión PDO
require_once __DIR__ . '/conexion.php'; // AJUSTA ESTA RUTA

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Selector de Colores - Camiseta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Font Awesome para iconos (si no lo tienes ya en el layout) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>


</head>
<body>



<main>
  <!-- Listado neon -->
  <section class="listado-neon">
    <div class="top-bar-listado">
      <h3>Últimos registros</h3>
      <a href="/exportar_excel.php" class="btn-neon">
        Descargar Excel
      </a>
    </div>

    <div id="lista-registros">Cargando...</div>
  </section>
</main>


