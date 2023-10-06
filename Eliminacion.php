<?php
require_once "conexion.php";
require_once "menu.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $contrasena = $_POST["contrasena"];
    $confirmarContrasena = $_POST["confirmar_contrasena"];

    if ($contrasena === $confirmarContrasena) {
        $sqlUpdateEliminacion = "UPDATE USUARIOS SET eliminacion = NOW() WHERE nombre = '$nombre' AND contraseña = '$contrasena'";
        
        if ($conn->query($sqlUpdateEliminacion) === TRUE) {
            echo "Campo 'eliminacion' actualizado correctamente.";
        } else {
            echo "Error al actualizar el campo 'eliminacion': " . $conn->error;
        }
    } else {
        echo "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Eliminación</title>
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
    <h2>Actualizar Eliminación</h2>
    <div class="form-container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <label for="confirmar_contrasena">Confirmar Contraseña:</label>
        <input type="password" name="confirmar_contrasena" required><br><br>

        <input type="submit" value="Actualizar Eliminación">
    </form>
    </div>
</body>
</html>