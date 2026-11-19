<?php
$mensaje = "";
$metodo = "";

if ($_SERVER["REQUEST_METHOD"] === "GET" &&
    isset($_GET["usuario"], $_GET["clave"])) {

    $metodo = "GET";

    if ($_GET["usuario"] === "admin" && $_GET["clave"] === "bytza2026") {
        $mensaje = "Login correcto";
    } else {
        $mensaje = "Login incorrecto";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST["usuario"], $_POST["clave"])) {

    $metodo = "POST";

    if ($_POST["usuario"] === "admin" && $_POST["clave"] === "bytza2026") {
        $mensaje = "Login correcto";
    } else {
        $mensaje = "Login incorrecto";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login Bytza</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
            margin: 40px;
        }

        .contenedor {
            max-width: 700px;
            margin: auto;
        }

        .formulario {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
        }

        input, button {
            display: block;
            width: 100%;
            box-sizing: border-box;
            padding: 10px;
            margin-top: 10px;
        }

        button {
            background: #1e293b;
            color: white;
            border: 0;
            cursor: pointer;
        }

        .resultado {
            padding: 15px;
            background: #e2e8f0;
            margin-bottom: 20px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
<div class="contenedor">
    <h1>Acceso a Bytza</h1>
    <p>Usuario de prueba: admin — Clave: bytza2026</p>

    <?php if ($mensaje !== ""): ?>
        <div class="resultado">
            <?php echo $mensaje; ?> mediante <?php echo $metodo; ?>
        </div>
    <?php endif; ?>

    <div class="formulario">
        <h2>Ingreso mediante GET</h2>

        <form method="GET" action="">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Clave" required>
            <button type="submit">Ingresar mediante GET</button>
        </form>
    </div>

    <div class="formulario">
        <h2>Ingreso mediante POST</h2>

        <form method="POST" action="">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Clave" required>
            <button type="submit">Ingresar mediante POST</button>
        </form>
    </div>
</div>
</body>
</html>
