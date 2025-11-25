<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
    
    function saudacao($nome) {
        return "Olá, $nome";
    }

    echo saudacao("Lucas");
    
    ?>
</body>
</html>