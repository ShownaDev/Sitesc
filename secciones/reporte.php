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
    <link rel="stylesheet" href="reporte.css">
    <link rel="stylesheet" href="../navbar.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/96b6886ff5.js"></script>
    <title>Generar Reportes</title>
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
            <?php if($tipo_usuario != "Prefecto" && $tipo_usuario != "Profesor") ?>
                <a href="admin.html" class="submenu-item">Administracion</a>
            <?php endif; ?> 
            <a href="login.html" class="submenu-item">Inicio de sesión</a>
            <a href="../cerrar_sesion.php" class="submenu-item">Cerrar sesión</a>
        </div>

        <!--Formulario generador de reportes-->
        <form action="" class="gen-reporte">
            <label for="nombre" class="label-form">Nombre del estudiante</label>
            <input type="text" id="nombre" class="inp-form">
            
            <label for="grupo" class="label-form">Grupo</label>
            <select name="" id="grupo" class="select-rep">
                <option value="1B">1B</option>
            </select>

            <label for="tipo" class="label-form">Tipo</label>
            <select name="" id="tipo" class="select-rep">
                <option value="INASISTENCIA">INASISTENCIA</option>
            </select>

            <label for="maestro" class="label-form">Maestro</label>
            <select name="" id="maestro" class="select-rep">
                <option value="JAIME HURTADO">JAIME HURTADO</option>
            </select>

            <label for="dias-justificados" class="label-form">Dias justificados</label>
            <input type="text" name="" id="dias-justificados" class="inp-form">

            <label for="visita-dom" class="label-form">Visita domiciliaria</label>
            <input type="text" id="visita-dom" class="inp-form">
            
            <label for="observaciones" class="label-form">Observaciones</label>
            <input type="text" id="observaciones" class="inp-form">

            <label for="citatorio" class="label-form">Citatorio</label>
            <select name="" id="" class="select-rep">
                <option value="texto">Texto</option>
            </select>

            <input type="submit" value="Agregar" class="btn-send">
        </form>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <script src="../submenu.js"></script>
</body>
</html>