<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página 2...</h1>
    <?php
    echo "<h2>Olá Mundo!</h2>";

    $nome = "Bruno";
    $idade = 2026 - 1992;

    echo "<h2>Olá, " . $nome . "</h2>";
    echo "<h2>Olá, $nome </h2>";
    echo '<h2>Olá, $nome </h2>';
    echo "<p>Você tem " . $idade . " anos.</p>";
    ?>
</body>

</html>