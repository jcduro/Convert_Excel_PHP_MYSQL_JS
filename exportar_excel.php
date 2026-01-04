

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
// Ajusta la ruta a tu conexión PDO
require_once __DIR__ . '/../../db.php'; // o la ruta que uses en convexcel

// Nombre del archivo
$filename = 'registros_' . date('Ymd_His') . '.xls';

try {
    // Consulta: usa la misma que en listar.php
    $stmt = $pdo->query("SELECT id, nombre, correo, telefono, pais, ciudad, fecha_registro FROM form_neon ORDER BY id DESC");
    $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Error al obtener datos: ' . $e->getMessage());
}

// Cabeceras para descargar como Excel (formato tabulado sencillo)
header("Content-Type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");

// Encabezados de columnas
$columnas = ['ID', 'Nombre', 'Correo', 'Teléfono', 'País', 'Ciudad', 'Fecha registro'];
echo implode("\t", $columnas) . "\n";

// Filas
if ($registros) {
    foreach ($registros as $row) {
        $linea = [
            $row['id'],
            $row['nombre'],
            $row['correo'],
            $row['telefono'],
            $row['pais'],
            $row['ciudad'],
            $row['fecha_registro'],
        ];

        // Limpiar tabs/ saltos que rompan el formato
        $linea = array_map(function ($v) {
            $v = str_replace(["\t", "\r", "\n"], ' ', $v);
            return $v;
        }, $linea);

        echo implode("\t", $linea) . "\n";
    }
} else {
    echo "Sin registros\n";
}
exit;
