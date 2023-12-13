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
  <h1>Tabla de registros</h1>
  <table id="employeeTable" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
        </tr>
    </thead>
    <tbody>
      <?php
      require_once("../Clases/Registrarse.php");
  
      $conexion = new Conexion();
  
      $consulta = $conexion->query('SELECT * FROM Registrarse');
  
      while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) {
          echo '<tr>';
          echo '<td>' . $row['id'] . '</td>';
          echo '<td>' . $row['name'] . '</td>';
          echo '<td>' . $row['email'] . '</td>';
          echo '<td>' . $row['password'] . '</td>';
          echo '</tr>';
      }
  
      $conexion = null;
      ?>
    </tbody>
  </table>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.10/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  
  <script>
    $(document).ready(function() {
  var table = $('#employeeTable').DataTable({
    "ajax": {
      "url": "registro1.php",
      "dataSrc": "data"
    },
    "columns": [
      { "data": "id" },
      { "data": "name" },
      { "data": "email" },
      { "data": "password" }
    ]
  });

  if ($.fn.dataTable.isDataTable('#employeeTable')) {
    console.log('DataTables se inicializó correctamente.');
  } else {
    console.error('Hubo un problema al inicializar DataTables.');
  }
});
  </script>
  <script>
    $(document).ready(function() {
      let table = new DataTable('#myTable');
    });
  </script>
</body>
</html>
