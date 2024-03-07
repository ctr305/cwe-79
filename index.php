<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<p>No tiene permisos para ver esta página. <a href='login.php'>Iniciar sesión</a></p>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="data:;base64,iVBORw0KGgo=" />
    <title>Lista de estudiantes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="container mt-3">
    <h2>Lista de estudiantes <small class="text-muted fs-5">Universidad Veracruzana</small></h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Inicio</li>
        </ol>
    </nav>
    <p>Haga clic en el vínculo Ver datos para ver la información completa de un estudiante.</p>
    <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>información</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Carlos Sánchez</td>
                <td><a href="info.php?id=1">Ver datos</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>María Pérez</td>
                <td><a href="info.php?id=2">Ver datos</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>José González</td>
                <td><a href="info.php?id=3">Ver datos</a></td>
            </tr>
        </tbody>
    </table>

    <p><span class="badge text-bg-primary">Usuario: <?php echo $_SESSION['username']; ?></span> <a href="salir.php">Cerrar sesión</a></p>
</body>

</html>
