<?php
// Definindo a senha pré-definida (simulando um banco de dados)
$senha_correta = "Varginha";

// Solicita a senha do usuário via terminal
echo "Digite sua senha: ";
$senha_usuario = trim(fgets(STDIN));

// Valida a senha inserida pelo usuário
if ($senha_usuario === $senha_correta) {
    echo "Login bem-sucedido! Bem-vindo(a)!\n";
} else {
    echo "Erro: Senha incorreta. Tente novamente.\n";
}
?>





<?php
// Solicitar ao usuário que digite quantos patinhos foram passear
echo "Quantos patinhos foram passear? ";
$quantidade_patinho = trim(fgets(STDIN));

// Validar se o valor digitado é um número válido
if (!is_numeric($quantidade_patinho) || $quantidade_patinho <= 0) {
    echo "Por favor, insira um número válido de patinhos.\n";
    exit;
}

// Gerar a letra da música
$patinhos_restantes = $quantidade_patinho;
while ($patinhos_restantes > 0) {
    echo "$patinhos_restantes patinhos foram passear\n";
    echo "Além das montanhas para brincar\n";
    echo "A mamãe gritou: Quá, quá, quá, quá!\n";
    echo "Mas só $patinhos_restantes patinhos voltaram de lá!\n\n";
    $patinhos_restantes--;
}

// A mamãe patinha encontra todos os patinhos
echo "A mamãe patinha foi procurar\n";
echo "E todos os patinhos ela foi encontrar!\n";
echo "Agora, todos juntos, patinhos estão de volta!\n";
echo "Fim da música! 🦆🎶\n";
?>







<?php

// Simulando um banco de dados com várias contas
$contas = [
    ["numero" => "24675", "cpf" => "198.566.289-59", "saldo" => 5000.75],
    ["numero" => "67890", "cpf" => "987.652.574-20", "saldo" => 1200.50],
    ["numero" => "11223", "cpf" => "111.222.333-44", "saldo" => 300.00],
    ["numero" => "44556", "cpf" => "444.555.666-77", "saldo" => 10000.00],
];

// Função para consultar a conta pelo número
function consultarConta($numeroConta, $contas) {
    foreach ($contas as $conta) {
        if ($conta["numero"] === $numeroConta) {
            return $conta;
        }
    }
    return null;
}

// Solicitar ao usuário o número da conta a ser consultada
echo "Digite o número da conta que deseja consultar: ";
$numeroConta = trim(fgets(STDIN));  // Pegando a entrada do usuário

// Consultar as informações da conta
$conta = consultarConta($numeroConta, $contas);

// Exibir as informações da conta
if ($conta !== null) {
    echo "\nInformações da Conta:\n";
    echo "Número da Conta: " . $conta["numero"] . "\n";
    echo "CPF do Proprietário: " . $conta["cpf"] . "\n";
    echo "Saldo: R$ " . number_format($conta["saldo"], 2, ',', '.') . "\n";
} else {
    echo "\nConta não encontrada.\n";
}
?>


