<?php
    //teste, apagar depois
    //echo "Hello world! Bem vindo: " . $_POST["nome_usuario"] . " " . $_POST["sobrenome_usuario"] . ", Você foi cadastrado com sucesso";

//Variáveis
$nome_usuario = $sobrenome_usuario = $email = $login = $senha = $data_nascimento = $pais_origem = "";
//erros
$nome_usuarioERR = $sobrenome_usuarioERR = $emailERR = $loginERR = $senhaERR = $data_nascimentoERR = ""; 

echo time("h:i:sa");

//Validação de campos, primeiro verifica se esta vazio depois direciona a função de validação de registro da variável
if ($_SERVER["REQUEST_METHOD"] == "POST")
    if (empty($_POST["nome_usuario"])) {
        $nome_usuarioERR  = "O campo nome é obrigatório";
        print $nome_usuarioERR . "<br>";
    } else {
        $nome_usuario = teste_entrada($_POST["nome_usuario"]);
        //verifica se tem apenas letras
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nome_usuario)) {
            $nome_usuarioErr = "Somente letras são permitidos";
            echo $nome_usuarioERR;
        } else {
            continue;
        }
    } if (empty($_POST["sobrenome_usuario"])) {
        $sobrenome_usuarioERR = "O campo sobrenome é obrigatório";
        print $sobrenome_usuarioERR . "<br>";
    } else {
        $sobrenome_usuario = teste_entrada($_POST["sobrenome_usuario"]);
    } if (empty($_POST["email"])) {
        $emailERR = "O campo de E-mail é obrigatório";
        print $emailERR . "<br>";
    } else {
        $email = teste_entrada($_POST["email"]);
        // Verifica se o formato do email esta correto
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailERR = "Invalid email format";
        }
    } if (empty($_POST["login"])) {
        $loginERR = "O campo login é obrigatório";
        print $loginERR . "<br>";
    } else {
        $login = teste_entrada($_POST["login"]);
    } if (empty($_POST["senha"])) {
        $senhaERR = "O campo senha é obrigatório";
        print $senhaERR . "<br>";
    } else {
        $senha = teste_entrada($_POST["senha"]);
    }

    //Função de validação de registros
function teste_entrada($campo) {
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}

//UPLOAD de imagens
//Conexão
function conectar() {
    echo "conectado!";
};

//Sessões e cookies

/*
//armazenamento de data
//Verificação de Idade
function maioridade() {
    //calcular o ano atual menos o ano de nascimento
    $ano_nasc = "";
    $ano_atual = "";
    $idade = "";
        //retornar a verificação se é ou não maior de 18 anos
        if($idade < "18") {
            continue;
        }else {
            echo "Mostrar mensagem informando que a pessoa não possui idade suficinte";
        }
};
*/
?>