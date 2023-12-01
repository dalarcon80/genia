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
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Agrega sombra al menú */
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
  </style>
</head>
<body>
  <header>
    <div>
      <img src="https://upload.wikimedia.org/wikipedia/commons/2/22/Enel_Group_logo.svg" alt="Logo Enel" class="logo">
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
        <li><a href="#" id="capture">Capture</a></li>
        <li><a href="#" id="conceptualizacion">Conceptualización</a></li>
        <li><a href="#" id="backlog">Backlog e Iniciativas</a></li>
        <li><a href="#" id="reporte">Reporte</a></li>
      </ul>
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
      <table>
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

  </div>

  <!-- Script de Soul Machines -->
  <script
    src="https://static.soulmachines.com/widget-snippet-1.12.0.min.js"
    data-sm-api-key="eyJzb3VsSWQiOiJkZG5hLWRhbmllbC1hbGFyY29uLS1hY2NlbnR1cmUtYXZhdGFyIiwiYXV0aFNlcnZlciI6Imh0dHBzOi8vZGguYXouc291bG1hY2hpbmVzLmNsb3VkL2FwaS9qd3QiLCJhdXRoVG9rZW4iOiJhcGlrZXlfdjFfYjcwZGE2MGYtNTFlYy00N2U5LTk1MTctODllZjMxMDZlYmQxIn0="
  ></script>

  <script>
    function mostrarMarketplace() {
      document.getElementById("marketplace").style.display = "block";
      document.getElementById("fabricaMenu").style.display = "none";
      ocultarTablas();
    }

    function mostrarFabricaDigital() {
      document.getElementById("marketplace").style.display = "none";
      document.getElementById("fabricaMenu").style.display = "block";
      ocultarTablas();
    }

    function ocultarTablas() {
      const tablas = document.querySelector('.tabla-requerimientos');
      tablas.style.display = 'none';
    }

    function mostrarTablas() {
      const tablas = document.querySelector('.tabla-requerimientos');
      tablas.style.display = 'block';
    }
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const linksFabrica = document.querySelectorAll('#fabricaMenu a');
      linksFabrica.forEach(link => {
        link.addEventListener('click', function() {
          ocultarTablas();
          mostrarTablas();
          linksFabrica.forEach(l => l.classList.remove('active'));
          this.classList.add('active');
        });
      });
    });
  </script>
</body>
</html>
