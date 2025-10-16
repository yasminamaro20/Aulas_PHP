<?php
    /** AULA 01 - INTRODUÇÃO AO PHP */
    /** Professor: Diego Paiani Cardoso */

    // Comentário de uma linha
    /* Comentário
       de múltiplas
       linhas */

    /**********************************
     * TIPOS DE DADOS EM PHP:
     * String - Texto
     * Integer - Números inteiros
     * Float - Números decimais
     * Boolean - true ou false
     **********************************/

    $quantidade = 25;           // integer
    $mensagem = "Bem-vindo!";   // string
    $preco = 9.99;              // float
    $ativo = false;             // boolean

    echo "Início do Script PHP!";
    echo "<hr>";

    /**************************************
     * OPERADORES ARITMÉTICOS
     **************************************/
    $x = 12;
    $y = 4;

    echo $x + $y; echo "<hr>"; // Soma
    echo $x - $y; echo "<hr>"; // Subtração
    echo $x * $y; echo "<hr>"; // Multiplicação
    echo $x / $y; echo "<hr>"; // Divisão
    echo $x % $y; echo "<hr>"; // Módulo
    echo $x ** $y; echo "<hr>"; // Exponenciação

    /**************************************
     * OPERADORES DE ATRIBUIÇÃO
     **************************************/
    $valor = 20;
    $valor += 5; echo $valor . "<hr>";
    $valor -= 3; echo $valor . "<hr>";
    $valor *= 2; echo $valor . "<hr>";
    $valor /= 4; echo $valor . "<hr>";
    $valor %= 3; echo $valor . "<hr>";

    /**************************************
     * OPERADORES DE COMPARAÇÃO
     **************************************/
    $a = 10;
    $b = 8;

    var_dump($a == $b);
    var_dump($a === $b);
    var_dump($a != $b);
    var_dump($a > $b);
    var_dump($a < $b);
    var_dump($a >= $b);
    var_dump($a <= $b);
    echo "<hr>";

    /**************************************
     * OPERADORES LÓGICOS
     **************************************/
    $v = true;
    $f = false;

    var_dump($v && $f);
    var_dump($v || $f);
    var_dump(!$v);
    echo "<hr>";

    /**************************************
     * INCREMENTO E DECREMENTO
     **************************************/
    $contador = 5;
    echo ++$contador . "<hr>"; // pré-incremento
    echo $contador++ . "<hr>"; // pós-incremento
    echo --$contador . "<hr>"; // pré-decremento
    echo $contador-- . "<hr>"; // pós-decremento
    echo "<hr>";

    /**************************************
     * CONDICIONAIS
     **************************************/
    $idade = 17;

    if ($idade >= 18) {
        echo "Você é maior de idade.<hr>";
    } else {
        echo "Você é menor de idade.<hr>";
    }

    $media = 6;

    if ($media >= 7) {
        echo "Aprovado<hr>";
    } elseif ($media >= 5) {
        echo "Em recuperação<hr>";
    } else {
        echo "Reprovado<hr>";
    }

    // switch-case
    $mes = "março";
    switch ($mes) {
        case "janeiro":
            echo "Começo do ano<hr>";
            break;
        case "março":
            echo "Início das aulas<hr>";
            break;
        default:
            echo "Mês não identificado<hr>";
    }

    /**************************************
     * ESTRUTURAS DE REPETIÇÃO
     **************************************/
    $i = 1;
    while ($i <= 3) {
        echo "Loop while: $i<hr>";
        $i++;
    }

    $j = 1;
    do {
        echo "Loop do-while: $j<hr>";
        $j++;
    } while ($j <= 3);

    for ($k = 1; $k <= 3; $k++) {
        echo "Loop for: $k<hr>";
    }

    $cidades = ["Rio", "São Paulo", "Curitiba"];
    foreach ($cidades as $cidade) {
        echo "Cidade: $cidade<hr>";
    }

    /**************************************
     * FORMULÁRIO
     **************************************/
    if (isset($_POST['usuario'])) {
        $nomeUsuario = $_POST['usuario'];
        echo "Olá, $nomeUsuario!";
    }

    /**************************************
     * TIPAGEM E CASTING
     **************************************/
    $n1 = 7;      // int
    $n2 = 7.5;    // float
    $str = "teste";
    $log = true;
    $nulo = NULL;

    var_dump($n1);
    var_dump($n2);
    var_dump($str);
    var_dump($log);
    var_dump($nulo);

    $n1 = (string) $n1;
    var_dump($n1);
    echo "<hr>";

    /**************************************
     * CONSTANTES
     **************************************/
    define("EMPRESA", "CodeCorp");
    const VERSAO = "1.0.5";

    echo EMPRESA . "<hr>";
    echo VERSAO . "<hr>";

    /**************************************
     * FUNÇÕES
     **************************************/
    function boasVindas($nome) {
        return "Seja bem-vindo, $nome!";
    }
    echo boasVindas("Lucas") . "<hr>";

    function multiplicar($x, $y) {
        return $x * $y;
    }
    echo multiplicar(4, 3) . "<hr>";

    $divisao = function($a, $b) {
        return $b != 0 ? $a / $b : "Divisão por zero!";
    };
    echo $divisao(10, 2) . "<hr>";

    /**************************************
     * ARRAYS
     **************************************/
    $animais = ["cachorro", "gato", "pássaro"];
    echo $animais[1] . "<hr>";

    $usuario = [
        "nome" => "Fernanda",
        "idade" => 28,
        "email" => "fernanda@email.com"
    ];
    echo $usuario["email"] . "<hr>";

    $animais[] = "peixe";
    print_r($animais); echo "<hr>";

    unset($animais[0]);
    print_r($animais); echo "<hr>";

    sort($animais);
    print_r($animais); echo "<hr>";

    rsort($animais);
    print_r($animais); echo "<hr>";

    echo count($animais) . "<hr>";

    if (isset($usuario["nome"])) {
        echo "Usuário: " . $usuario["nome"] . "<hr>";
    }

    $exemplo = NULL;
    echo is_null($exemplo) ? "É nula<hr>" : "Não é nula<hr>";

    /**************************************
     * ARRAY MULTIDIMENSIONAL
     **************************************/
    $biblioteca = [
        ["PHP", "JavaScript", "Python"],
        ["HTML", "CSS", "SQL"],
        ["Java", "C#", "Go"]
    ];

    for ($i = 0; $i < count($biblioteca); $i++) {
        echo "<b>Seção $i</b><br>";
        echo "<ul>";
        for ($j = 0; $j < count($biblioteca[$i]); $j++) {
            echo "<li>" . $biblioteca[$i][$j] . "</li>";
        }
        echo "</ul><hr>";
    }

    /**
     * Funções úteis para arrays:
     * - array_push(), array_pop()
     * - array_shift(), array_unshift()
     * - in_array(), array_search()
     * - sort(), rsort()
     * - array_merge(), array_slice(), array_reverse()
     */
?>
<!-- Formulário HTML -->
<form method="post">
    Digite seu nome: <input type="text" name="usuario">
    <input type="submit" value="Enviar">
</form>
