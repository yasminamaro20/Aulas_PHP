
<?php
/****************************************************
 * AULA: Programação Orientada a Objetos em PHP
 * Professor: Diego
 * Tópicos: Classes, Objetos, Encapsulamento, Herança,
 * Polimorfismo e Métodos Estáticos
 ****************************************************/

/* ========== CLASSE PESSOA ========== */
class Pessoa {
    public $nome;
    public $idade;

    // Construtor
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    // Método público
    public function apresentar() {
        echo "Olá! Meu nome é {$this->nome} e tenho {$this->idade} anos.<br>";
    }
}

// Instância
$p1 = new Pessoa("Ana", 25);
$p1->apresentar();

/* ========== CLASSE CARRO ========== */
class Carro {
    public $marca;
    public $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes() {
        echo "Carro: {$this->marca} {$this->modelo}<br>";
    }
}

$carro1 = new Carro("Toyota", "Corolla");
$carro2 = new Carro("Ford", "Mustang");

$carro1->exibirInformacoes();
$carro2->exibirInformacoes();

/* ========== HERANÇA E POLIMORFISMO ========== */
class Animal {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function falar() {
        echo "O animal faz um som.<br>";
    }
}

class Cachorro extends Animal {
    public function falar() {
        echo "{$this->nome} diz: Au au!<br>";
    }
}

class Gato extends Animal {
    public function falar() {
        echo "{$this->nome} diz: Miau!<br>";
    }
}

$dog = new Cachorro("Rex");
$cat = new Gato("Mimi");

$dog->falar();
$cat->falar();

/* 
 * Nota: O método "falar" é sobrescrito nas subclasses (polimorfismo)
 * A mesma chamada resulta em comportamentos diferentes.
 */

/* ========== ENCAPSULAMENTO ========== */
class ContaBancaria {
    public $titular;
    private $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente.<br>";
        }
    }

    public function verSaldo() {
        echo "Saldo atual: R$ {$this->saldo}<br>";
    }
}

$conta = new ContaBancaria("João", 1000);
$conta->depositar(500);
$conta->verSaldo();
// $conta->saldo; // Erro: acesso direto ao atributo privado

/* ========== MÉTODOS E ATRIBUTOS ESTÁTICOS ========== */
class Matematica {
    public static $pi = 3.14159;

    public static function somar($a, $b) {
        return $a + $b;
    }

    public static function areaCirculo($raio) {
        return self::$pi * ($raio ** 2);
    }
}

// Acesso sem instanciar
echo "Soma: " . Matematica::somar(5, 3) . "<br>";
echo "Área do círculo: " . Matematica::areaCirculo(4) . "<br>";

?>
