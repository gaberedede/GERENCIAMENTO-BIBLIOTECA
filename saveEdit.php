<?php
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $livro = $_POST['livro'];
        $autor = $_POST['autor'];
        $dataDeEntrega = $_POST['dataDeEntrega'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nascimento='$data_nasc',livro='$livro',autor='$autor',dataDeEntrega='$dataDeEntrega'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>