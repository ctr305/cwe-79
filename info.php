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
    <h2>Datos del estudiantes <small class="text-muted fs-5">Universidad Veracruzana</small></h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">información</li>
        </ol>
    </nav>
    <p>A continuación se muestra la información del estudiante seleccionado.</p>

    <div class="card mb-2">
        <div class="card-header">
            Datos del estudiante
        </div>
        <div class="card-body">
            <p><strong>Id:</strong> <?php echo $_GET['id']; ?></p>
            <p><strong>Nombre:</strong> 
                <?php
                if ($_GET['id'] === "1") {
                    echo "Carlos Sánchez";
                } elseif ($_GET['id'] === "2") {
                    echo "María Pérez";
                } elseif ($_GET['id'] === "3") {
                    echo "José González";
                }
                ?>
            </p>
            <p><strong>Edad:</strong> 
                <?php
                if ($_GET['id'] === "1") {
                    echo "25";
                } elseif ($_GET['id'] === "2") {
                    echo "22";
                } elseif ($_GET['id'] === "3") {
                    echo "23";
                }
                ?>
            </p>
            <p><strong>Facultad:</strong> 
                <?php
                if ($_GET['id'] === "1") {
                    echo "Facultad de Contaduría y Administración";
                } elseif ($_GET['id'] === "2") {
                    echo "Facultad de Ingeniería";
                } elseif ($_GET['id'] === "3") {
                    echo "Facultad de Contaduría y Administración";
                }
                ?>
            </p>
        </div>
    </div>

    <p><span class="badge text-bg-primary">Usuario: <?php echo $_SESSION['username']; ?></span> <a href="salir.php">Cerrar sesión</a></p>
</body>

</html>