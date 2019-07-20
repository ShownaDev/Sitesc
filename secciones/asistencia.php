<?php
session_start();

$tipo_usuario = $_SESSION['tipo_usuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asistencia.css">
    <link rel="stylesheet" href="../navbar.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/96b6886ff5.js"></script>
    <title>Pase de asistencia</title>
</head>
<body>
    <div class="main">
        <!--Navbar-->
        <div class="navbar-main">
            <div class="bar-btn" id="sub-menu-btn">
                <i class="fas fa-bars" id="bar-icon"></i>
            </div>
        </div>

        <!--Submenu-->
        <div class="submenu" id="submenu">
            <a href="home.html" class="submenu-item">Inicio</a>
            <a href="asistencia.html" class="submenu-item">Pase de asistencia</a>
            <a href="reporte.html" class="submenu-item">Generar Reportes</a>
            <?php if($tipo_usuario != "Prefecto" && $tipo_usuario != "Profesor"): ?>
                <a href="admin.html" class="submenu-item">Administracion</a>
            <?php endif ?>
            <a href="../cerrar_sesion.php" class="submenu-item">Cerrar sesión</a>
        </div>
        <div class="title-and-select">
            <h2 class="selecciona">Seleccione un grupo</h2>
            <select name="" class="grupos">
                <option value="1B">1B</option>
            </select>
        </div>
        <!--Tabla de asistencia-->
        <table class="asistencia">
            <thead class="table-head">
                <tr>
                    <th class="table-data">Nombre del alumno </th>
                    <th class="table-data">Asistencia</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="table-data">Mauricio Hernandez Gomez</td>
                    <td class="table-data">
                        <input type="radio" class="radio-btn" id="radio-btn">
                        <label for="radio-btn" class="label-radio">NO/A </label>
                        <input type="radio" hidden> <!--Input del SI asistió-->
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="../submenu.js"></script>
</body>
</html>