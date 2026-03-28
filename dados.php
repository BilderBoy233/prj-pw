<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" type="image/x-Icon" href="img/form.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Dados</title>
</head>
<body>
    <?php
    // ve se vc consegue colocar pra mostrar a imagem, se for imagem o arquivo
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "<br>";
        echo "<strong>Nascimento:</strong> " . htmlspecialchars($_POST['date']) . "<br>";
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            echo "<strong>Arquivo enviado:</strong> " . htmlspecialchars($_FILES['file']['name']);
        } else {
            echo "<strong>Arquivo não enviado.</strong>";
        }
    }
    ?>
            <div id="resultado"></div>
                <script src="js/script.js"></script>
</body>
</html>