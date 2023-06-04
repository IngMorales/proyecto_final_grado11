<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Formulario en PHP + MySQL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
</head>

<body>
    <center>
        <h1>Datos Registrados</h1>
    </center>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre Completo</th>
                            <th>Nacimiento</th>
                            <th>Género</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Profesión</th>
                            <th>Actividad</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "conexion.php";
                        $query = "SELECT * FROM personas";
                        $result = mysqli_query($conexion, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['documento'] . "</td>";
                            echo "<td>" . $row['nombres'] . " " . $row['apellidos'] . "</td>";
                            echo "<td>" . $row['nacimiento'] . "</td>";
                            echo "<td>" . $row['sexo'] . "</td>";
                            echo "<td>" . $row['telefono'] . "</td>";
                            echo "<td>" . $row['correo'] . "</td>";
                            echo "<td>" . $row['profesion'] . "</td>";
                            echo "<td>" . $row['actividad'] . "</td>";
                            echo "<td>" . $row['estado'] . "</td>";
                            echo "</tr>";
                        }

                        // Cerrar conexión a la base de datos
                        mysqli_close($conexion);
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
        <center>
            <a href="index.php" class="btn btn-danger btn-lg">Registrar Nueva Persona</a>
        </center>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>

</html>