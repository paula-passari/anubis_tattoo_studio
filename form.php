<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Anubis Tattoo Studio</title>
</head>
<body>
    <div>
        <!-- Logo e menu -->
        <?php
            include("header.php");
        ?>
    </div>

    <?php
        //Armazena os dados do formulário em variáveis
        $nome = $_POST['name'];
        $fone = $_POST['phone'];
        $email = $_POST['email'];
        $assunto = $_POST['subject'];
        $mensagem = $_POST['message'];

        //Joga os dados das variáveis em um vetor
        $contato = array("Nome" => $nome, "Telefone" => $fone, "Email" => $email, "Assunto" => $assunto, "Mensagem" => $mensagem);

        // Verifica se arquivo JSON existe. Se não existir, cria-o
        if(file_exists("dados.json")){
            // se existe, extrai a informação do arquivo
            $string = file_get_contents("dados.json");
            // transformando o arquivo dados.json em um vetor PHP
            $json = json_decode($string, true);
        }

        // Adicionando no vetor $json o vetor $contato com as variáveis recebidas pelo formulário
        $json["contatos"][] = $contato;    
        
        // abre o arquivo dados.json em modo de escrita
        $fp = fopen('dados.json', 'w');
        //Se der algum erro, entra neste if
        if($fp == false){
            print(error_get_last());
        }
        // escreve no arquivo em json
        fwrite($fp, json_encode($json));
        // fecha o arquivo
        fclose($fp);
    ?>

    <div>
        <!-- mensagem na tela -->
        <h2 style="text-align: center; margin-top: 100px;">Sua mensagem foi enviada com sucesso!</h2>
    </div>
</body>
</html>