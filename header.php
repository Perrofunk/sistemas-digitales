<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas Digitales 2022</title>
    <link rel="stylesheet" href="/sistemas-digitales/styles.css">
</head>
<body>
    <?php 
        if($paginaActual !== "Menu Principal"){
            echo '<p style="margin:0px;padding:0px;"><a href="/sistemas-digitales/index.php">Volver al menú</a></p>';
        }
    ?>

    <header>
        <h1>SISTEMAS DIGITALES</h1>
        <?php 
        echo "<h2>".$paginaActual."</h2>";
        ?>
    </header>