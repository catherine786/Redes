<?php
require "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contraseña = '$contraseña' AND eliminacion IS NULL";

    $resultado = $conn->query($sql);

    if ($resultado->num_rows == 1) {
        header("Location: lista.php");
        exit();
    } else {
        echo "Asegurese que el usuario o la contraseña sean correctos y que el usuario no haya sido dado de baja";
    }
}
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

        h2 {
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

        label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="password"] {
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
    <div class="form-container">
        <form method="POST" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" required><br><br>

            <input type="submit" value="Iniciar Sesión"><br><br>
            <span class="contraseña">¿No tienes cuenta aún? <a href="Alta.php">Regístrate</a></span>
        </form>
    </div>
</body>
</html>
