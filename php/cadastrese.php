<?php
    include('conexao.php');

    $cpf = $_POST['CPF'];
    $nome = $_POST['NOME'];
    $email = $_POST['EMAIL'];
    $nascimento = $_POST['NASCIMENTO'];
    $senha = $_POST['SENHA'];

    $query = $juncao->prepare('insert into ACESSO(CPF, NOME, EMAIL, NASCIMENTO, SENHA) values (:cpf, :nome, :email, :data, :senha)');

    $query->execute(
        array(
            ':cpf' => $cpf,
            ':nome' => $nome,
            ':email' => $email,
            ':data' => $nascimento,
            ':senha' => $senha 
        )
    );

    header('location:/html/cadastrese.html');
?>