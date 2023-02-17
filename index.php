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
            <article id="left">s
                <div id="content-1">
                    <form action="" autocomplete="off">
                        <label for="server" style="margin-right: 150px;">Login:</label>
                        <input type="text" name="user" id="user" placeholder="User">
                        <input type="password" name="pass" id="pass" placeholder="Password">
                        <label for="server">Server:</label>
                        <input type="text" name="server" id="server" placeholder="ftp://www...">
                        <h4>Upload</h4>
                        <label for="file" style="margin-right: 150px;">Arquivo a Enviar:</label>
                        <input type="file" name="file" id="file">
                        <input type="submit" value="Enviar" class="enviar">
                        <h4>Download</h4>
                        <label for="url" style="margin-right: 150px;">Arquivo:</label>
                        <input type="text" name="url" id="url" placeholder="https://www...">
                        <label for="" style="margin-right: 150px;">Baixar para:</label>
                        <input type="text" name="local" id="local" placeholder="C:\dados\">
                        <input type="submit" value="Baixar" class="enviar">
                    </form>
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