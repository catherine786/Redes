<!DOCTYPE html>
<html>
<head>
    <title>Base de Datos</title>
    <style>
        #header {
            background-color: #007BFF;
            padding: 10px;
            text-align: center;
        }

        .nav {
            list-style-type: none;
            padding: 0;
        }

        .nav li {
            display: inline-block;
            margin-right: 20px;
        }

        .nav a, .nav .button {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 8px 16px; 
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav a:hover, .nav .button:hover {
            background-color: #0056b3;
        }

        .nav ul {
            display: none;
            position: absolute;
            background-color: #007BFF;
            border-radius: 0 0 5px 5px;
            z-index: 1;
        }

        .nav li:hover ul {
            display: block;
        }

        .nav ul li {
            display: block;
            margin: 0;
        }

        .nav ul li a {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
<div id="header">
    <ul class="nav">
        <li><a href="lista.php" class="button">Inicio</a></li>
        <li><a href="Eliminacion.php" class="button">Dar de baja</a></li>
        <li><a href="Alta.php" class="button">Dar de alta</a></li>
    </ul>
</div>
<br>
<br>
<br>
</body>
</html>
