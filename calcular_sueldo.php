<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado del Sueldo</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Resultado del Sueldo Semanal</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $dias_trabajados = $_POST['dias_trabajados'];
            $horas_diarias = $_POST['horas_diarias'];
            $pago_por_hora = $_POST['pago_por_hora'];

            // Calcular el sueldo semanal
            $sueldo_semanal = $dias_trabajados * $horas_diarias * $pago_por_hora;

            echo "<div class='alert alert-success'>";
            echo "<p>Nombre del empleado: <strong>$nombre</strong></p>";
            echo "<p>Sueldo semanal: <strong>$$sueldo_semanal</strong></p>";
            echo "</div>";
        }
        ?>
        <a href="index.html" class="btn btn-primary mt-3">Calcular otro sueldo</a>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
