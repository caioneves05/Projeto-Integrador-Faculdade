
<?php
// if (isset($_POST['submit'])) {}
/*print_r($_POST['cadastro-nome']);
    print_r($_POST['cadastro-email']);
    print_r($_POST['cadastro-senha']);
    print_r($_POST['cadastro-cpf']);
    print_r($_POST['cadastro-telefone']); */

include_once('config.php');

$nome = $_POST['cadastroNome'];
$email = $_POST['cadastroEmail'];
$senha = $_POST['cadastroSenha'];
$cpf = $_POST['cadastroCpf'];
$telefone = $_POST['cadastroTelefone'];
$gastronomia = $_POST['cadastroGastronomia'];
$confeitaria = $_POST['cadastroConfeitaria'];

$result = mysqli_query($conexao, "INSERT INTO usuarios(cadastroNome,cadastroEmail,cadastroSenha,cadastroCpf,cadastroTelefone,cadastroGastronomia,cadastroConfeitaria) VALUES ('$nome','$email','$senha','$cpf','$telefone','$gastronomia','$confeitaria')");

?>

