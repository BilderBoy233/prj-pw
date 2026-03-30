<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport content="width=device -width, initial-scale=1.0">
        <meta name="keywords" content="">
        <meta name="descripition" content="Free web tutorials">
        <meta name="author" content="">
        <link rel="Icon" type="image/x-Icon" href="img/form.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

    <title>Form</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Formulário</a></li>
            <li><a href="dados.php">Dados</a></li>
        </ul>
    </nav>
    <div class="center">

        <?php
    echo "<h1>Form</h1>";
    ?>
    </div>
    <div class="center">
    <form action="dados.php" enctype="multipart/form-data" method="post">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome">
        
        <label for="email">Email: </label> 
        <input type="text" id="email" name="email">
        
        <label for="date">Nascimento: </label>
        <input type="date" id="date" name="date">
        
        <label for="file">Sua foto engraçada: </label>
        <input type="file" id="file" name="file">
        
        <!-- <button type="submit" id="botao" name="botao">ENVIAR!!!</button> -->
        
        
        <button type="submit" id="enviarBtn">Enviar</button>
    </form>
    </div>

</body>
</html>