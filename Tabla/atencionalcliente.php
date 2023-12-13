<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.10/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="./registro.css">
  <title>Agricampo</title>
</head>
<body>
<style>
  table.display {
  width: 100%;
}

table.display thead th {
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 5px;
}

table.display tbody tr {
  border: 1px solid #ccc;
  padding: 5px;
}

table.display tbody tr:hover {
  background-color: #eee;
}

body {
  padding: 0;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  max-width: 90%;
  margin: 0 auto; 
  padding-top: 10px;
  padding-bottom: 20px;
}

h1 {
  text-align: center;
}
</style>
  <table id="employeeTable" class="display">
  <h1>Tabla de solicitudes de atencion al cliente</h1>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo Electronico</th>
            <th>Telefono</th>
            <th>Codigo de la factura</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
      <?php
      require_once("../Clases/ServicioDeSoporte.php");
  
      $conexion = new Conexion();
  
      $consulta = $conexion->query('SELECT * FROM ServicioDeSoporte');
  
      while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr>';
          echo '<td>' . $row['id'] . '</td>';
          echo '<td>' . $row['name'] . '</td>';
          echo '<td>' . $row['correo'] . '</td>';
          echo '<td>' . $row['phone'] . '</td>';
          echo '<td>' . $row['affair'] . '</td>';
          echo '<td>' . $row['Message'] . '</td>';
          echo '</tr>';
      }
  
      $conexion = null;
      ?>
    </tbody>
</table>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
      $('#employeeTable').DataTable({
          "iniciodesesion1": "iniciodesesion1.php", 
          "columns": [
              { "data": "id" },
              { "data": "name" },
              { "data": "correo" },
              { "data": "phone" },
              { "data": "affair" },
              { "data": "Message" }
          ]
      });
  });
  </script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.js"></script>
</html>