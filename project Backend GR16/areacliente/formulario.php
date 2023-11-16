<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];
        $login = $_POST['login'];
        $nome_marterno = $_POST['nome_marterno'];
        $genero = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereço = $_POST['endereco'];
        $cep = $_POST['cep'];
        $cpf = $_POST['cpf'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,confirmar_senha,login,nome_marterno,genero,
        data_nascimento,telefone,celular,cidade,endereco,cep,cpf) VALUES ('$nome','$email','$senha','$confirmar_senha','$login','$nome_marterno','$genero',
        '$data_nascimento','$telefone','$celular','$cidade','$estado','$endereço','$cep','$cpf')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\folha.css">
    <title>Document</title>
</head>
<body>
    <div id="logoContent">
    <a id="logo" href="../index.html"><img src="../areacliente/imagens/logo_branca.png" alt="logo da telecall" ></a>
    </div>
    <div class="content">
        <h1>Ficha de Cadastro </h1>
        <form action="formulario.php" method="post" id="form">
            <div>
                <input type="text" name="nome" placeholder="Digite seu nome" class="inputs required" oninput="nameValidate()">
                <span class="span-required">Nome deve ter no mínimo 15 caracteres</span>
                <span class="span-required">Nome deve ter no maxímo 60 caracteres</span>
            </div>
            <div>
                <input type="email" name="email" placeholder="Digite seu melhor email" class="inputs required" oninput="emailValidate()">
                <span class="span-required">Digite um email válido</span>
            </div>
            <div>
                <input type="password" name="senha" placeholder="Senha" class="inputs required" oninput="mainPasswordValidate()">
                <span class="span-required">Digite uma senha com no mínimo 8 caracteres</span>
            </div>
            <div>
                <input type="password" name="confirmar_senha" placeholder="Repita a sua senha" class="inputs required" oninput="comparePassword()">
                <span class="span-required">Senhas devem ser compatíveis</span>
            </div>
            <div>
                <input type="text" id="login" name="login" placeholder="Digite seu Login" class="inputs required" onkeyup="toLimit(this)" required>
                <span class="span-required">Login deve possuir 6 caracteres</span>
            </div>
            <div>
                <input type="text" name="nome_marterno" placeholder="Digite seu Nome Marterno" class="inputs required" required>
                <span class="span-required">Por favor preencha, campo vazio!</span> 
            </div>
            <p>Sexo:</p>
            <div  class="box-select">
                <div>
                    <input type="radio" name="genero" id="m" value="m" name="sexo">
                    <label for="m">Masculino</label> 
                </div>
                <div>
                    <input type="radio" name="genero" id="f" value="f" name="sexo">
                    <label for="f">Feminino</label>
                </div>
                <div>
                    <input type="radio" name="genero" id="o" value="o" name="sexo">
                    <label for="o">Outro</label>
                </div>  
            </div>
            <div>
                <input type="date" name="data_nascimento"  class="inputs required" required>
            </div>
            <div>
                <input type="text" name="telefone" placeholder="Digite seu Telefone" class="inputs required" 
                onkeydown="ajustaTelefone(this)" onkeypress="ajustaTelefone(this)" onkeyup="ajustaTelefone(this)" required>
            </div>
            <div>
                <input type="text" name="celular" placeholder="Digite seu Celular" class="inputs required" 
                onkeydown="ajustaTelefone(this)" onkeypress="ajustaTelefone(this)" onkeyup="ajustaTelefone(this)" required>
            </div>
            <div>
                <input type="text" name="cidade" placeholder="Digite a sua Cidade" class="inputs required" required>
            </div>
            <div>
                <input type="text" name="estado" placeholder="Digite seu Estado" class="inputs required" required>
            </div>
            <div>
                <input type="text" name="endereco" placeholder="Digite seu Endereço" class="inputs required" required>
            </div>
            <div>
                <input type="text" name="cep" placeholder="Digite seu CEP" class="inputs required" 
                onkeydown="ajustaNumeros(this)" onkeypress="ajustaNumeros(this)" onkeyup="ajustaNumeros(this)" required>

            </div>
            <div>
                <input type="text" name="cpf" placeholder="Digite seu CPF" class="inputs required" 
                onkeydown="ajustaCpf(this)" onkeypress="ajustaCpf(this)" onkeyup="ajustaCpf(this)" required>  
            </div>
            <button type="submit" name="submit" onclick="vazio()">Enviar</button>
            <button type="reset" class="submit"><b>LIMPAR</b></button>
        </form>
    </div>
<script src="../areacliente/js/aqv.js"></script>
</body>
</html>
