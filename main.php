
<?php
// Classes e Objetos
class Pessoa {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

$pessoa = new Pessoa("Maria");

// Funções
function saudacao($nome) {
    return "Olá, $nome!";
}

$mensagem = saudacao($pessoa->getNome());

// Condicionais
if ($mensagem) {
    echo $mensagem . "<br>";
} else {
    echo "Mensagem vazia.<br>";
}

// Loops
for ($i = 1; $i <= 5; $i++) {
    echo "Iteração $i<br>";
}

// Interfaces e Herança
interface Animal {
    public function fazerSom();
}

class Cachorro implements Animal {
    public function fazerSom() {
        echo "Au au!<br>";
    }
}

$cachorro = new Cachorro();
$cachorro->fazerSom();

// Módulos (incluindo um exemplo de inclusão)
include "modulos/exemplo_modulo.php";

// Operadores Lógicos
$num1 = 10;
$num2 = 5;

if ($num1 > $num2 && $num2 != 0) {
    echo "$num1 é maior que $num2 e $num2 não é zero.<br>";
}

// Template Strings (usando interpolação)
$fruta = "maçã";
echo "Uma fruta: {$fruta}s são deliciosas!<br>";

// Tipos Genéricos (PHP não suporta diretamente, mas pode ser simulado)
$generico = "texto genérico";
echo "Valor genérico: $generico<br>";

// Tipagem Null e Undefined
$valorNulo = null;
$valorIndefinido;

if (is_null($valorNulo)) {
    echo "Valor é nulo.<br>";
}

if (!isset($valorIndefinido)) {
    echo "Valor é indefinido.<br>";
}
?>
