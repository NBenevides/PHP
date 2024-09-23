<?php 
// print_r($_POST['nota1']); trazer um específico
// print_r($_POST) trazer todos

$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];

$media = ($nota1+$nota2+$nota3+$nota4)/4;

echo "Meu nome é $nome e Minha nota final é $media";
echo "<br>";
echo "<br>";
echo "<br>";

if ($media>=6) {
    $situacao = "Aprovado!";
}
elseif ($media>4 && $media<6) {
    $situacao = "de Recuperação!";
}
else {
    $situacao = "Reprovado!";
}

echo "O Aluno $nome está $situacao";

?>