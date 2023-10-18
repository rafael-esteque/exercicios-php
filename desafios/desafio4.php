<?php

$listaPessoas = [
    "000.000.000-12" => [
        "nome" => "Ana Banana",
        "idade" => 30,
        "telefone" => "123456789"
    ],
    "111.111.111-23" => [
        "nome" => "Pafúncio Silva",
        "idade" => 25,
        "telefone" => "987654321"
    ],
    "222.222.222-34" => [
        "nome" => "Juan Madruga",
        "idade" => 55,
        "telefone" => "555555555"
    ]
];

foreach ($listaPessoas as $cpf => $pessoa) {
    echo "CPF: $cpf, Nome: {$pessoa['nome']}, Idade: {$pessoa['idade']}, Telefone: {$pessoa['telefone']}\n";
}

$novaPessoa = [
    "333.333.333-45" => [
        "nome" => "Florinda Kika",
        "idade" => 35,
        "telefone" => "777777777"
    ]
];

$listaPessoas = array_merge($listaPessoas, $novaPessoa);

echo "\nNova pessoa adicionada:\n";

foreach ($listaPessoas as $cpf => $pessoa) {
    echo "CPF: $cpf, Nome: {$pessoa['nome']}, Idade: {$pessoa['idade']}, Telefone: {$pessoa['telefone']}\n";
}

$cpfExcluir = "111.111.111-23";

unset($listaPessoas[$cpfExcluir]);

echo "\nPessoa excluída:\n";

foreach ($listaPessoas as $cpf => $pessoa) {
    echo "CPF: $cpf, Nome: {$pessoa['nome']}, Idade: {$pessoa['idade']}, Telefone: {$pessoa['telefone']}\n";
}

?>
