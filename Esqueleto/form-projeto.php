<?php
if(isset($_POST['submit'])){
    /*print_r($_POST['cadastro-nome']);
    print_r($_POST['cadastro-email']);
    print_r($_POST['cadastro-senha']);
    print_r($_POST['cadastro-cpf']);
    print_r($_POST['cadastro-telefone']); */

    include_once('config.php');

    $nome = $_POST['cadastro-nome'];
    $email = $_POST['cadastro-email'];
    $senha = $_POST['cadastro-senha'];
    $cpf = $_POST['cadastro-cpf'];
    $telefone = $_POST['cadastro-telefone'];
    $gastronomia = $_POST['cadastro-gastronomia'];
    $confeitaria = $_POST['cadastro-confeitaria'];

    $result = mysqli_query($conexao,"INSERT INTO possiveisclientes (cadastro-nome,cadastro-email,cadastro-senha,cadastro-cpf,cadastro-telefone,cadastro-gastronomia,cadastro-confeitaria) VALUES ('$nome','$email','$senha','$cpf','$telefone','$gastronomia','$confeitaria')");
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style/style.css">
</head>
<body>
    <div class="apresentação">
        <img src="Style/logo-site-instituto-gourmet.png" alt="logo-site-instituto-gourmet">
        <div class="apresentacao-titulo">
            <h1>Instituto</h1>
            <h2>Gourmet</h2>
        </div>
    </div>
    <div class="navbar">
        <a href="Ebooks.html">E-Books</a>
        <a href="#">Home</a>
        <a href="#">Faça Login</a>
    </div>
    <div class="home">
        <header>
                <h1>Bibioteca Gourmet</h1>
                <p> A plataforma biblioteca gourmet foi idealizada com o pensamento de expandir a culinária no Brasil. Nossos conteúdos são de fácil acesso e intuitivos, viablizando que qualquer e-book possar ser apresentado em salas de aula, projetos sociais e até mesmo transmitir o primeiro contato com a culinária para as crianças.
                    Nosso conteúdo é totalmente gratuito, e abordamos diversos pontos de vista e receitas sobre a nossa cultura, no qual você poderá ampliar seus conhecimentos, e poderá aprender a fazer aquela receitinha para quem você ama não é mesmo?</p>
        </header>
        <div class="form-cadastro">
            <h1>
                Cadastre-se para receber nossos E-Books
            </h1>
        
            <form action="form-projeto.php" method="post" class="cadastramento-inputs">
                <label for="nome">Nome</label>
                <input type="nome" id="cadastro-nome" placeholder="Enter yout name" name="cadastro-nome">

                <label for="email">E-mail</label>
                <input type="email" id="cadastro-email" placeholder="Enter your email" name="cadastro-email">


                <label for="senha">Senha</label>
                <input type="password" name="cadastro-senha" id="cadastro-senha" placeholder="**********" name="cadastro-senha">
                

                <label for="cpf">CPF</label>
                <input type="text" name="cadastro-cpf" id="cadastro-cpf" placeholder="000.000.000-00" name="cadastro-cpf">
                
                
                <label for="telefone">Telefone</label>
                <input type="tel" id="cadastro-telefone" placeholder="+55 (00)000000000" name="cadastro-telefone">
        
                <div class="checkbox-style">
                    <input type="checkbox" name="cadastro-gastronomia" id="cadastro-gastronomia">
                    <label for="cadastro-gastronomia" id="gastronomia">Gastronomia</label>
                    <input type="checkbox" name="cadastro-confeitaria" id="cadastro-confeitaria">
                    <label for="confeitaria" id="cadastro_confeitaria">Confeitaria</label>
                </div>
        
                <button type="submit" id="cadastro-submit">Cadastrar</button>
                <p class="cadastramento-footer">Ja tem cadastro? <a href="#">Faça Login</a></p>
            </form>
    </div>
    </div>
    <footer>

    </footer>
</body>
</html>