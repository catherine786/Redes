<?php
require_once "conexion.php";
require_once "menu.php";

$_GET['ID'] = (isset($_GET['ID'])) ? $_GET['ID'] : "";
$_GET['nombre'] = (isset($_GET['nombre'])) ? $_GET['nombre'] : "";
$_GET['mail'] = (isset($_GET['mail'])) ? $_GET['mail'] : "";
$_GET['contraseña'] = (isset($_GET['contraseña'])) ? $_GET['contraseña'] : "";
$_GET['creacion'] = (isset($_GET['creacion'])) ? $_GET['creacion'] : "";
$_GET['modificacion'] = (isset($_GET['modificacion'])) ? $_GET['modificacion'] : "";
$_GET['eliminacion'] = (isset($_GET['eliminacion'])) ? $_GET['eliminacion'] : "";

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007BFF;
            color: #fff;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Tabla de Usuarios</h1>
    <?php
    $sql = "SELECT * 
            FROM usuarios";

    $res = mysqli_query($conn, $sql);
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Mail</th>
            <th>Creación</th>
            <th>Modificación</th>
            <th>Eliminación</th>
        </tr>
        <?php while($fila = mysqli_fetch_assoc($res)){ ?>
        <tr>
            <td><?php echo $fila['ID']; ?></td>
            <td><?php echo $fila['nombre']; ?></td>
            <td><?php echo $fila['mail']; ?></td>
            <td><?php echo $fila['creacion']; ?></td>
            <td><?php echo $fila['modificacion']; ?></td>
            <td><?php echo $fila['eliminacion']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
