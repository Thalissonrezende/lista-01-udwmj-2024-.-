// Função para calcular a soma de dois números
function calcularSoma($num1, $num2) {
    $soma = $num1 + $num2;
    return $soma;
}

// Variáveis para teste
$numero1 = 5;
$numero2 = 10;

// Chamada da função e exibição do resultado
$resultado = calcularSoma($numero1, $numero2);
echo "A soma de $numero1 e $numero2 é: $resultado";