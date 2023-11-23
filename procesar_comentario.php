<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="styles/diseño.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>CyberBook</title>
    <script>
        //Redirigir a index.html después de 3 segundos
        setTimeout(function () {
            window.location.href = 'index.html';
        }, 3000); 
    </script>
    <style>
        body{
            background-color: #282829;
            color: white;
        }
    </style>
</head>

<body>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $comentario = $_POST["inputcomen"];
        // Mostrar mensaje de confirmación
        echo "<h2>¡Mensaje enviado con éxito!</h2>";
        echo "<p>Comentario: $comentario</p>";
    } else {
        // Si se accede directamente a esta página sin enviar el formulario, redirigir a la página principal
        //header("Location: index.html");
        //exit();
    }
    ?>
</body>

</html>
