
<?php
// 1. Variáveis
$nome = "João";
$idade = 30;

// 2. Operadores
$soma = 10 + 5;
$subtracao = 20 - 8;
$multiplicacao = 6 * 4;
$divisao = 15 / 3;

// 3. Estruturas condicionais
if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

// 4. Estruturas de repetição
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i<br>";
}

// 5. Arrays
$frutas = array("maçã", "banana", "laranja");
echo "Uma fruta: " . $frutas[0];

// 6. Funções
function saudacao($nome) {
    echo "Olá, $nome!";
}
saudacao("Maria");

// 7. Superglobais
echo "IP do cliente: " . $_SERVER['REMOTE_ADDR'];

// 8. Manipulação de strings
$texto = "Olá, mundo!";
echo strlen($texto);

// 9. Manipulação de datas
$dataAtual = date("d/m/Y");
echo "Data atual: $dataAtual";

// 10. Inclusão de arquivos
include("header.php");

// 11. Manipulação de arquivos
$file = fopen("arquivo.txt", "r");
$content = fread($file, filesize("arquivo.txt"));
fclose($file);

// 12. Tratamento de exceções
try {
    $resultado = 10 / 0;
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}

// 13. Cookies e sessões
setcookie("usuario", "joao", time() + 3600); // Cookie com duração de 1 hora

session_start();
$_SESSION['login'] = "logado";

// 14. Classes e objetos
class Pessoa {
    public $nome;
    public $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function apresentar() {
        echo "Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

$pessoa = new Pessoa("Carlos", 25);
$pessoa->apresentar();

// 15. Herança
class Aluno extends Pessoa {
    public $matricula;
    
    public function __construct($nome, $idade, $matricula) {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
    }
    
    public function exibirMatricula() {
        echo "Minha matrícula é {$this->matricula}.";
    }
}

$aluno = new Aluno("Ana", 20, "12345");
$aluno->exibirMatricula();

// ... Adicione mais conceitos e funcionalidades aqui ...

?>
