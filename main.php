<?php
    include('protecao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload/Download</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="base">
        <main>
            <article id="left">
                <div id="content-1">
                    <form action="" autocomplete="off">
                        <h4>Olá! (Email logado: <?php echo $_SESSION['usuario']; ?>)</h4>
                        <label for="server">Server:</label>
                        <input type="text" name="server" id="server" placeholder="ftp://www...">
                    </form>
                    <a href="downup.php" id="mainbutton">Download/Upload</a>
                    <h4><a href="logout.php">Sair</a></h4>
                </div>
            </article>
            <article id="right">
                <div id="content-2">
                    <img src="img/imgnuvem.png" alt="Imagem Ilutrativa" height="350px">
                </div>
            </article>
        </main>
    </div>
</body>
</html>