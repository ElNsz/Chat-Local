<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../assets/css/style.css">
    <title>Chat Local</title>
</head>
<body>
    <div class="botao-delete">
        <input name="deletemsg" type="submit" id="deletemsg" value="Resetar Chat" />
    </div>
    <div class="voltar-inicio">
        <a href="./index.php">Voltar</a>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
           
            $(document).ready(function () {
                $("#deletemsg").click(function () {
                    $.post("deletado.php");
                    return true;
                });
            });
        </script>
</body>
</html>