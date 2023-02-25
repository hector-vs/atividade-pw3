<?php
    include('protecao.php');
    include_once('conexao.php');
    require_once('zipar.class.php');
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
    <?php
        if(isset($_POST['enviarq'])){
            $arq = $_FILES['arquivo']['name'];

            $arq = str_replace(" ","_",$arq);
            $arq = str_replace("ç","c",$arq);

            if(file_exists("arquivos/$arq")){
                $a = 1;
                while(file_exists("arquivos/[$a]$arq")){
                    $a++;
                }

                $arq = "[".$a."]".$arq;
            }

            if(move_uploaded_file($_FILES['arquivo']['tmp_name'], "arquivos/".$arq)){
                $zip = new Zipar();
                $zip->ziparArquivos($arq, $arq.".zip", "arquivos/");
                unlink("arquivos/$arq");

                $result_upload = "INSERT INTO arquivos (nome) VALUES ('$arq.zip')";
                mysqli_query($mysqli, $result_upload);

                echo "<p id='warning' style='background-color: green;'>Upload realizado com sucesso!</p>";
            }else{
                echo "<p id='warning' style='background-color: red;'>Upload NÃO FOI realizado com sucesso!</p>";
            }
        }
    ?>
    <div class="base">
        <main>
            <article id="left">
                <div id="content-1-main">
                    <a href="main.php">Voltar</a>
                    <form action="" enctype="multipart/form-data" name="upload" method="post">
                        <input type="file" name="arquivo" id="file">
                        <input type="submit" name="enviarq" value="Enviar">
                    </form>
                    <div id="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th style="width: 200px;">Nome</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    if(isset($_POST['enviarq'])){
                                        $sql = "SELECT * FROM arquivos ORDER BY id DESC";
                                        $result = $mysqli->query($sql);
                                        while($user_data = mysqli_fetch_assoc($result)){
                                            echo "<tr> <td>".$user_data['id']."</td> <td>".$user_data['nome']."</td> <td><a href='arquivos/".$arq."'>Download</a></td> </tr>";
                                        }
                                    }   
                                ?>
                            </tbody>
                        </table>
                    </div>
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