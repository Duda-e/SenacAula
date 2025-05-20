<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Back-end</title>
    <style>
        .titulo{
            color: pink;
            font-size: 35px;
            font-family: Verdana;  
        }
        .texto{
            color: grey;
            font-size: 16px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1 class="titulo">
        <?php echo "Meu Título"; ?>
    </h1>
    <p class="texto"><?php print "Meu primeiro texto PHP"; ?></p>
    <p class="texto"><?php echo "Segundo paragrafo"; ?></p>
</body>
</html>