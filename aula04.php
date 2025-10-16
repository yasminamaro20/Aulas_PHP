<?php
/**********************************************
 * PROFESSOR: DIEGO
 * AULA: Manipulação de Strings em PHP
 **********************************************/

/* ========= CONCATENAÇÃO ========= */
$nome = "Maria";
$sobrenome = "Silva";
$idade = 30;

$nome_completo = $nome . " " . $sobrenome;
echo "Nome Completo: $nome_completo<br>";
echo "Idade: " . $idade . " anos.<br>";

/* ========= INTERPOLAÇÃO ========= */
$fruta = "Maçã";

// Aspas duplas interpretam variáveis
echo "Duplas: Eu gosto de comer uma $fruta por dia.<br>";

// Aspas simples não interpretam variáveis
echo 'Simples: Eu gosto de comer uma $fruta por dia.<br>';

/* ========= FUNÇÕES ÚTEIS ========= */
$texto = "Olá mundo!";
echo "O texto é: $texto<br>";
echo "Seu tamanho é: " . strlen($texto) . " caracteres.<br>"; // strlen conta caracteres

/* ========= SUBSTITUIR PALAVRAS ========= */
$original = "Eu amo programar em Python.";
$novo_texto = str_replace("Python", "PHP", $original);

echo "Texto Original: $original<br>";
echo "Texto Modificado: $novo_texto<br>";

/* ========= ENCONTRAR POSIÇÃO DE UMA PALAVRA ========= */
$frase = "A casa é azul e a porta é azul.";
$busca = "porta";
$posicao = strpos($frase, $busca); // Retorna a posição ou false

if ($posicao !== false) {
    echo "A palavra '$busca' foi encontrada na posição: $posicao<br>";
} else {
    echo "A palavra '$busca' não foi encontrada.<br>";
}

// Palavra que não existe
$busca_errada = "verde";
if (strpos($frase, $busca_errada) === false) {
    echo "A palavra '$busca_errada' não foi encontrada.<br>";
}

/* ========= EXTRAIR SUBSTRINGS ========= */
$dados = "ABCDE12345FGHIJ";

// Extrair 5 caracteres a partir do índice 5
$numeros = substr($dados, 5, 5);  // 12345
echo "Números: $numeros<br>";

// Extrair do índice 10 até o final
$letras_final = substr($dados, 10);  // FGHIJ
echo "Final: $letras_final<br>";

// Usar índice negativo (últimos 5 caracteres)
$ultimas_letras = substr($dados, -5);  // GHIJ
echo "Últimos 5: $ultimas_letras<br>";

/* ========= MAIÚSCULAS / MINÚSCULAS ========= */
$titulo = "Manipulação de Strings em PHP";

echo "Minúsculas: " . strtolower($titulo) . "<br>";       // Tudo minúsculo
echo "Maiúsculas: " . strtoupper($titulo) . "<br>";       // Tudo maiúsculo
echo "Primeira Maiúscula: " . ucfirst(strtolower($titulo)) . "<br>"; // Só a 1ª maiúscula
?>
