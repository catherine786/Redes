<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $mail = $_POST["mail"];
    $contraseña = $_POST["contraseña"];
    $confirmar_contraseña = $_POST["confirmar_contraseña"];

    if ($contraseña === $confirmar_contraseña) {
        $sql = "INSERT INTO `usuarios` (`nombre`, `mail`, `contraseña`, `creacion`, `modificacion`, `eliminacion`)
                VALUES ('$nombre', '$mail', '$contraseña', current_timestamp(), current_timestamp(), NULL)";

        if (mysqli_query($conn, $sql)) {
            $last_id = mysqli_insert_id($conn);
            echo "Nuevo usuario creado exitosamente";
            header("Location: lista.php");
            exit(); 
        } else {
            echo "Error al crear el usuario: " . mysqli_error($conn);
        }
    } else {
        echo "Una de las contraseñas que ingreso no coincide con la otra";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alta de Usuario</title>
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
        input[type="email"],
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
        <form method="post" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required><br><br>

            <label for="mail">Correo Electrónico:</label>
            <input type="email" name="mail" required><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" required><br><br>

            <label for="confirmar_contraseña">Confirmar Contraseña:</label>
            <input type="password" name="confirmar_contraseña" required><br><br>

            <input type="submit" value="Crear Usuario">
        </form>
    </div>
</body>
</html>
