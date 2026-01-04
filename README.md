
## 📊 ConvExcel – Exportador a Excel en JcDuro Dashboard

Módulo que muestra un listado de registros provenientes de base de datos
y permite exportarlos a un archivo Excel (`.xlsx`) con formato (encabezados en negrita, bordes y
anchos de columna autoajustados) usando PhpSpreadsheet.

---

## 🖼️ Vista previa

![Take_Notes](previewexceñ.gif)

--- 

## 🚀 Demo
[Take_Notes](https://jcduro.bexartideas.com/proyectos/dashjc/convexcel/convexcel.php)

--- 

## 📊 Lenguajes y Herramientas

[![My Skills](https://skillicons.dev/icons?i=html,css,js,php,mysql,github,vscode,windows,&theme=light&perline=8)](https://skillicons.dev)

--- 

## 📚 Índice

- [Descripción](#-descripción)
- [Características](#-características)
- [Tecnologías](#-tecnologías)
- [Arquitectura y flujo](#-arquitectura-y-flujo)
- [Instalación](#-instalación)
- [Uso](#-uso)
- [Preview](#-preview)
- [Roadmap](#-roadmap)

--- 

## 📝 Descripción

ConvExcel es un módulo que carga dinámicamente un listado de registros desde una base de datos
mediante `fetch` y un endpoint PHP, y añade la posibilidad de descargar esos mismos datos en un
archivo Excel (`.xlsx`) con formato profesional utilizando la librería PhpSpreadsheet.[web:104][web:116]

Está pensado como ejemplo práctico de generación de reportes Excel desde PHP con estilo, integrado
al ecosistema del JcDuro Dashboard.

--- 

## 🛠 Características

- Listado de “últimos registros” cargado de forma asíncrona con JavaScript (`fetch` → `listar.php`).
- Exportación directa de todos los registros a Excel con PhpSpreadsheet (`exportar_excel.php`).[web:104][web:117]
- Encabezados con negrita, fondo de color y bordes en toda la tabla.
- Anchos de columna autoajustados al contenido y primera fila congelada en Excel.
- Integración con las plantillas globales del dashboard (header, menú, footer).

--- 

## 💻 Tecnologías

- PHP 7/8 con PDO para acceso a datos.
- MySQL / MariaDB como motor de base de datos.
- PhpSpreadsheet para la generación de archivos Excel con estilos.[web:104][web:106]
- HTML5 + CSS3 para la interfaz en el dashboard.
- JavaScript vanilla (`fetch`, `DOMContentLoaded`) para cargar el listado en tiempo real.

--- 

## 🧱 Arquitectura y flujo

- `convexcel.php`: vista principal del módulo dentro del dashboard. Muestra:
  - Sección **“Últimos registros”**.
  - Contenedor `#lista-registros` que se rellena vía AJAX (`fetch`).
  - Botón **“Descargar Excel”** que apunta a `exportar_excel.php`.

- `listar.php`:
  - Consulta la base de datos.
  - Devuelve el HTML del listado (tabla o tarjetas) que se inyecta en `#lista-registros`.

- `exportar_excel.php`:
  - Recupera los mismos datos desde la BD.
  - Construye un `Spreadsheet` con PhpSpreadsheet, aplica estilos y envía el `.xlsx` al navegador.[web:104][web:120]

--- 

## 🚀 Instalación

1. Clonar o copiar el módulo dentro de tu proyecto (por ejemplo en `proyectos/dashjc/convexcel/`).
2. Verificar que la conexión PDO global (`db.php`) esté configurada correctamente (host, base de datos, usuario, contraseña).
