<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //precisa configurar a timezone
        date_default_timezone_set("Europe/Lisbon");
        echo "Hoje é dia " . date("d/M/Y");
        echo ", e a hora atual é " . date("G:i:s");
        
    ?>
</body>
</html>