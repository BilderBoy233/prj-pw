<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" type="image/x-Icon" href="img/form.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Dados</title>
</head>
<body>
        <nav>
        <ul>
            <li><a href="index.php">Formulário</a></li>
            <li><a href="dados.php">Dados</a></li>
        </ul>
    </nav>
                <div class="center">

                    <div class="center">
        <?php
    // ve se vc consegue colocar pra mostrar a imagem, se for imagem o arquivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<strong>Nome:</strong> " . htmlspecialchars($_POST['nome']) . "<br>";
    echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "<br>";
    echo "<strong>Nascimento:</strong> " . htmlspecialchars($_POST['date']) . "<br>";

    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];

        // 1. Verifica se o arquivo é uma imagem
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        
        if (in_array($fileType, $allowedTypes)) {
            // Para exibir a imagem imediatamente sem mover de pasta (usando Base64)
            $imageData = base64_encode(file_get_contents($fileTmpPath));
            $src = 'data:' . $fileType . ';base64,' . $imageData;

            echo "<strong>Arquivo enviado:</strong> " . htmlspecialchars($fileName) . "<br>";
            echo "<img src='$src' alt='Imagem Enviada' style='max-width: 300px; margin-top: 10px; border-radius: 8px;'>";
        } else {
            echo "<strong>Arquivo enviado:</strong> " . htmlspecialchars($fileName) . " (Não é uma imagem válida).";
        }
    } else {
        echo "<strong>Arquivo não enviado.</strong>";
    }
}
?>
</div>
                </div>
            <div id="resultado"></div>
                <script src="js/script.js"></script>
</body>
</html>
