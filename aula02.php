<?php
/******************************************************
 * Exemplo de uso de constantes e tipos de dados em PHP
 * Autor: Yasmin
 ******************************************************/
define("TAXA", 0.15);
const EMPRESA = "CodePlus";

echo EMPRESA;
echo "<br>";
echo TAXA;
echo "<hr>";

/******************************************************
 * Verificando o tipo das variáveis
 ******************************************************/
$altura = 1.75;       // float
$idade = 25;          // integer
$mensagem = "Olá PHP!"; // string

echo "Altura: ";
var_dump($altura);
echo "<br>Tipo: " . gettype($altura) . "<br><br>";

echo "Idade: ";
var_dump($idade);
echo "<br>Tipo: " . gettype($idade) . "<br><br>";

echo "Mensagem: ";
var_dump($mensagem);
echo "<br>Tipo: " . gettype($mensagem) . "<br>";
echo "Comprimento da mensagem: " . strlen($mensagem);
echo "<hr>";

/******************************************************
 * Trabalhando com Arrays
 ******************************************************/
// Array indexado
$cores = ["azul", "verde", "amarelo"];
echo "Primeira cor: " . $cores[0];
echo "<br>Segunda cor: " . $cores[1];

// Array associativo
$usuario = [
    "nome" => "Carlos",
    "idade" => 28,
    "cidade" => "Recife"
];
echo "<br>Nome do usuário: " . $usuario["nome"];

// Adicionando um item ao array
$cores[] = "vermelho";

// Imprimindo array completo
echo "<hr><pre>";
print_r($cores);
echo "</pre>";

// Removendo item do array
unset($cores[1]); // remove "verde"
echo "<pre>";
print_r($cores);
echo "</pre>";

// Funções úteis
echo "Total de cores: " . count($cores);

// Ordenando arrays
sort($cores);
echo "<br><b>Ordenado (A-Z):</b><br>";
print_r($cores);

rsort($cores);
echo "<br><b>Ordenado (Z-A):</b><br>";
print_r($cores);
echo "<hr>";

// Verificando existência de variável
if (isset($usuario["idade"])) {
    echo "Idade informada: " . $usuario["idade"];
} else {
    echo "Idade não disponível";
}

// Verificando se variável é nula
echo "<hr>";
$teste = null;
if (is_null($teste)) {
    echo "A variável \$teste é nula.";
} else {
    echo "A variável \$teste NÃO é nula.";
}
echo "<hr>";

/******************************************************
 * Arrays Multidimensionais
 ******************************************************/
$marcas = [
    ["Nike", "Adidas", "Puma"],
    ["Samsung", "Apple", "Xiaomi"],
    ["Dell", "HP", "Lenovo"]
];
echo "<pre>";
print_r($marcas);
echo "</pre>";

$produtos = array(
    array("Caderno", "Caneta", "Lápis"),
    array("Notebook", "Tablet", "Smartphone"),
    array("Mouse", "Teclado", "Monitor")
);
echo "<pre>";
print_r($produtos);
echo "</pre>";

/********* Criando listas HTML a partir de array *********/
for ($linha = 0; $linha < count($marcas); $linha++) {
    echo "<p><b>Categoria $linha</b></p>";
    echo "<ul>";
    for ($coluna = 0; $coluna < count($marcas[$linha]); $coluna++) {
        echo "<li>" . $marcas[$linha][$coluna] . "</li>";
    }
    echo "</ul>";
}
echo "<hr>";

/******************************************************
 * Trabalhando com formulários
 ******************************************************/
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome_usuario"])) {
    $nome = htmlspecialchars($_POST["nome_usuario"]);
    echo "<strong>Olá, $nome!</strong>";
}
?>

<!-- Formulário HTML -->
<form action="" method="post">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome_usuario" id="nome" required>
    <input type="submit" value="Enviar">
</form>
