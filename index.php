<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Marketplace de Productos Digitales</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #fff;
      color: #333;
      text-align: center;
      padding: 20px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.2);
      font-size: 24px;
      position: relative;
      z-index: 1;
    }
    .logo {
      width: 100px;
    }
    .title {
      flex-grow: 1;
      text-align: center;
      font-weight: bold;
    }
    .container {
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      padding: 20px;
      background-color: #f2f2f2;
    }
    .menu-left {
      flex: 0 0 25%;
      background-color: #f9f9f9;
      border: 1px solid #ccc;
      padding: 10px;
      margin-right: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .menu-left ul {
      padding: 0;
      list-style: none;
    }
    .menu-left li {
      margin-bottom: 10px;
    }
    .menu-left a {
      display: block;
      padding: 8px 15px;
      text-decoration: none;
      color: #333;
    }
    .menu-left a:hover {
      background-color: #f0f0f0;
    }
    .menu-left a.active {
      background-color: blue;
      color: white;
    }
    .button-container {
      margin-top: 10px;
    }
    button {
      padding: 10px 20px;
      margin: 0 10px;
      font-size: 16px;
      cursor: pointer;
    }
    .product-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      margin-top: 20px;
    }
    .product {
      width: 250px;
      height: 300px;
      background-color: #fff;
      border: 1px solid #ccc;
      margin: 10px;
      padding: 10px;
      text-align: center;
      box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
    }
    .product img {
      max-width: 80%;
      max-height: 150px;
      margin-bottom: 10px;
    }
    .rating {
      color: orange;
      font-size: 20px;
      margin-bottom: 5px;
    }
    .description {
      font-size: 14px;
    }
    .tabla-requerimientos {
      display: none;
      margin-top: 50px;
      text-align: center;
    }
    .tabla-requerimientos table {
      width: 90%;
      margin: 0 auto;
      border-collapse: collapse;
      box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
      background-color: #fff;
      margin-bottom: 20px;
      max-width: 1200px;
    }
    .tabla-requerimientos caption {
      font-weight: bold;
      text-align: left;
      padding: 8px;
    }
    .tabla-requerimientos th, .tabla-requerimientos td {
      border: 1px solid #ccc;
      padding: 18px;
      text-align: left;
      width: auto;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .tabla-requerimientos th {
      background-color: #f2f2f2;
      font-weight: bold;
    }
    .fases {
      display: none;
    }

    /* Nuevas clases para mostrar/ocultar ventanas modales */
    .show-modal {
      display: block !important;
    }

    .hide-modal {
      display: none !important;
    }
  </style>
</head>
<body>
  <header>
    <div>
      <img src="https://sallmpocecpsbx.blob.core.windows.net/public/enel.png" alt="Logo Enel" class="logo">
    </div>
    <div class="title">
      <span>Marketplace de Productos Digitales</span>
    </div>
    <div>
      <nav>
        <button onclick="mostrarMarketplace()">Marketplace</button>
        <button onclick="mostrarFabricaDigital()">Fábrica Digital</button>
      </nav>
    </div>
  </header>

  <div class="container">
    <div id="fabricaMenu" class="menu-left" style="display: none;">
      <ul>
        <li><a href="#" id="nuevaIniciativa" onclick="mostrarNuevaIniciativa()">Nueva Iniciativa de Negocio</a></li>
        <li><a href="#" id="reporte">Reportes y Roadmap</a></li>
      </ul>
    </div>
  
    <div class="nueva-iniciativa-modal hide-modal" id="modalNuevaIniciativa">
        <!-- Contenido de la ventana modal -->
        <p>Este módulo garantiza que el asistente virtual pueda entender todos los requerimientos y necesidades de negocio, por lo que Anie realizará varias preguntas con la finalidad de entender sus necesidades para posteriormente generar los artefactos necesarios para conceptualizar su necesidad.</p>
        <button onclick="guardarDatos()">Guardar</button>
        <button onclick="mostrarConceptualizacion(); document.getElementById('modalNuevaIniciativa').classList.add('hide-modal');">Siguiente</button>
      </div>

    <div id="marketplace" style="flex: 1; display: block;">
        <div class="product-container">
            <div class="product">
              <img src="https://www.itmplatform.com/wp-content/uploads/59609188_m.jpg" alt="Producto 1">
              <div class="rating">★★★★☆</div>
              <div class="description">
                <p>Descripción del Producto 1</p>
              </div>
            </div>
            <div class="product">
              <img src="https://www.sap.com/dam/application/shared/photos/products-e-i/sap-integrated-business-planning-device-codsh.png" alt="Producto 2">
              <div class="rating">★★★★★</div>
              <div class="description">
                <p>Descripción del Producto 2</p>
              </div>
            </div>
            <div class="product">
              <img src="https://www.tradelog.com.ar/blog/wp-content/uploads/2019/01/Log%C3%ADstica-Inteligente.jpg" alt="Producto 3">
              <div class="rating">★★★☆☆</div>
              <div class="description">
                <p>Descripción del Producto 3</p>
              </div>
            </div>
          </div>
    </div>

    <div class="tabla-requerimientos">
        <caption>Requerimientos Funcionales</caption>
        <thead>
          <tr>
            <th>Nombre del Documento</th>
            <th>Aprobador</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <!-- Datos de ejemplo -->
          <tr>
            <td>Documento de requerimientos tecnicos y no funcionales</td>
            <td>Juan Carlos Salgado Gonzalez</td>
            <td>En Proceso</td>
          </tr>
          <tr>
            <td>Paper de Arquitectura</td>
            <td>Fabio Andres Perez Perez</td>
            <td>En Proceso</td>
          </tr>
        </tbody>
      </table>

      <table>
        <caption>Requerimientos No Funcionales</caption>
        <thead>
          <tr>
            <th>Nombre del Documento</th>
            <th>Aprobador</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          <!-- Datos de ejemplo -->
          <tr>
            <td>Documento de requerimientos Funcionales de la Solución</td>
            <td>Juan Felipe Gallardo Gonzalez</td>
            <td>Aprobado</td>
          </tr>
          <tr>
            <td>Detalle General de la Iniciativa</td>
            <td>No APlica</td>
            <td>Aprobado</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="captura" class="fases">
        <h2>Fase de Captura</h2>
        <p>Contenido relacionado con la fase de Captura...</p>
        <!-- Agregar formularios u otros elementos relevantes para la captura de datos -->
        <form>
          <!-- Campos y elementos del formulario -->
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre"><br><br>
          <label for="correo">Correo electrónico:</label>
          <input type="email" id="correo" name="correo"><br><br>
          <!-- Otros campos del formulario -->
          <div class="button-container">
            <button onclick="guardarDatosCaptura()">Guardar Datos de Captura</button>
            <button onclick="mostrarConceptualizacion()">Siguiente</button>
          </div>
        </form>
      </div>
      

      <div id="conceptualizacion" class="fases" style="display: none;">
        <h2>Fase de Conceptualización</h2>
        <p>Contenido relacionado con la fase de Conceptualización...</p>
      
        <div class="tabla-requerimientos" style="display: block;"> <!-- Mostrar la tabla al iniciar la fase -->
          <table>
            <caption>Requerimientos Funcionales</caption>
            <thead>
              <tr>
                <th>Nombre del Documento</th>
                <th>Aprobador</th>
                <th>Estado</th>
                <th>Recurso</th>
              </tr>
            </thead>
            <tbody>
              <!-- Datos de ejemplo -->
              <tr>
                <td>Documento de requerimientos técnicos y no funcionales</td>
                <td>Juan Carlos Salgado Gonzalez</td>
                <td>En Proceso</td>
                <td><a href="URL_DEL_ARCHIVO" target="_blank">Descargar</a></td>
              </tr>
              <tr>
                <td>Paper de Arquitectura</td>
                <td>Fabio Andres Perez Perez</td>
                <td>En Proceso</td>
                <td><a href="URL_DEL_ARCHIVO" target="_blank">Descargar</a></td>
              </tr>
            </tbody>
          </table>
      
          <table>
            <caption>Requerimientos No Funcionales</caption>
            <thead>
              <tr>
                <th>Nombre del Documento</th>
                <th>Aprobador</th>
                <th>Estado</th>
                <th>Recurso</th>
              </tr>
            </thead>
            <tbody>
              <!-- Datos de ejemplo -->
              <tr>
                <td>Documento de requerimientos Funcionales de la Solución</td>
                <td>Juan Felipe Gallardo Gonzalez</td>
                <td>Aprobado</td>
                <td><a href="URL_DEL_ARCHIVO" target="_blank">Descargar</a></td>
              </tr>
              <tr>
                <td>Detalle General de la Iniciativa</td>
                <td>No Aplica</td>
                <td>Aprobado</td>
                <td><a href="URL_DEL_OTRO_ARCHIVO" target="_blank">Descargar</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      
        <!-- Botones para navegar -->
        <div class="button-container">
          <button onclick="guardarDatosConceptualizacion()">Guardar Datos de Conceptualización</button>
          <button onclick="mostrarBacklog()">Volver</button>
          <button onclick="mostrarEstimacion()">Siguiente</button>
        </div>
      </div>

      <div id="backlog" class="fases" style="display: none;">
        <h2>Fase de Backlog e Iniciativas</h2>
        <p>Contenido relacionado con la fase de Backlog...</p>
        
        <!-- ... Contenido específico de esta fase ... -->
        
        <!-- Botones para navegar -->
        <div class="button-container">
          <button onclick="mostrarConceptualizacion()">Volver</button>
          <button onclick="mostrarEstimacion()">Siguiente</button>
        </div>
      </div>
      
      <div id="estimacion" class="fases" style="display: none;">
        <h2>Fase de Estimación y Esfuerzo</h2>
        <p>Contenido relacionado con la fase de Estimación...</p>
        
        <!-- ... Contenido específico de esta fase ... -->
        
        <!-- Botones para navegar -->
        <div class="button-container">
          <button onclick="mostrarBacklog()">Volver</button>
          <button onclick="terminarProceso()">Terminar</button>
        </div>
      </div>
      

    <!-- Resto de tus fases... -->

    <!-- Script de Soul Machines... -->
    <script
      src="https://static.soulmachines.com/widget-snippet-1.12.0.min.js"
      data-sm-api-key="eyJzb3VsSWQiOiJkZG5hLWRhbmllbC1hbGFyY29uLS1hY2NlbnR1cmUiLCJhdXRoU2VydmVyIjoiaHR0cHM6Ly9kaC5hei5zb3VsbWFjaGluZXMuY2xvdWQvYXBpL2p3dCIsImF1dGhUb2tlbiI6ImFwaWtleV92MV84YzJkOGVkYy05OGE3LTQ0NDktYTA3ZS0wYmVjNDI0MGIzODQifQ=="
    ></script>

    <script>
       function mostrarMarketplace() {
      document.getElementById("marketplace").style.display = "block";
      document.getElementById("fabricaMenu").style.display = "none";
      ocultarFases();
      ocultarTablas();
    }

    function mostrarFabricaDigital() {
      document.getElementById("marketplace").style.display = "none";
      document.getElementById("fabricaMenu").style.display = "block";
      ocultarFases();
      ocultarTablas();
    }

    function ocultarTablas() {
      const tablas = document.querySelectorAll('.tabla-requerimientos');
      tablas.forEach(tabla => tabla.style.display = 'none');
    }

    function mostrarNuevaIniciativa() {
      document.getElementById("modalNuevaIniciativa").classList.remove('hide-modal');
    }

    function guardarDatos() {
      // Lógica para guardar datos de la nueva iniciativa
      alert('Datos guardados');
    }

    function mostrarBacklog() {
      ocultarFases();
      ocultarTablas(); // Oculta la tabla al cambiar de fase
      document.getElementById("backlog").style.display = "block";
    }

    function ocultarFases() {
      const fases = document.querySelectorAll('.fases');
      fases.forEach(fase => fase.style.display = 'none');
    }

    function mostrarConceptualizacion() {
  ocultarFases();
  ocultarTablas(); // Oculta otras tablas si están visibles
  document.getElementById("conceptualizacion").style.display = "block";

  // Mostrar la tabla de requerimientos funcionales y no funcionales de la conceptualización
  document.querySelector("#conceptualizacion .tabla-requerimientos").style.display = "block";
}

    function mostrarEstimacion() {
      ocultarFases();
      ocultarTablas(); // Oculta la tabla al cambiar de fase
      document.getElementById("backlog").style.display = "block";
    }

    function mostrarSprint() {
      ocultarFases();
      document.getElementById("sprint").style.display = "block";
    }

    function mostrarDesarrollo() {
      ocultarFases();
      document.getElementById("desarrollo").style.display = "block";
    }

    function mostrarPruebas() {
      ocultarFases();
      document.getElementById("pruebas").style.display = "block";
    }

    function mostrarEntrega() {
      ocultarFases();
      document.getElementById("entrega").style.display = "block";
    }

    function guardarDatos() {
      // Lógica para guardar datos de la Nueva Iniciativa
      alert('Datos guardados');
    }

    function mostrarPlanificacion() {
      ocultarFases();
      document.getElementById("planificacion").style.display = "block";
    }

    function mostrarEjecucion() {
      ocultarFases();
      document.getElementById("ejecucion").style.display = "block";
    }

    function mostrarCierre() {
      ocultarFases();
      document.getElementById("cierre").style.display = "block";
    }

    function ocultarNuevaIniciativa() {
      document.getElementById("modalNuevaIniciativa").classList.add('hide-modal');
    }

    function guardarDatosCaptura() {
      // Lógica para guardar datos capturados
      alert('Datos de Captura guardados');
    }

    function guardarDatosConceptualizacion() {
    // Lógica para guardar datos de conceptualización
    alert('Datos de Conceptualización guardados');
    ocultarTablas(); // Oculta la tabla al guardar datos
  }

    function terminarProceso() {
      // Lógica para finalizar el proceso
      alert('Proceso Terminado');
    }

    function mostrarCaptura() {
    ocultarFases();
    ocultarTablas(); // Oculta la tabla al cambiar de fase
    document.getElementById("captura").style.display = "block";
  }
      // Resto de tus funciones...
    </script>
  </div>
</body>
</html>
