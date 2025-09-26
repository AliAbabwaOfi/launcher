<?php
header('Content-Type: application/json');

// Exemplo de notícias
$news = [
    [
        "id" => 1,
        "title" => "Atualização 1.0.1 lançada!",
        "content" => "Correções de bugs e melhorias no desempenho.",
        "date" => "2025-09-26"
    ],
    [
        "id" => 2,
        "title" => "Novo evento semanal",
        "content" => "Participe do evento e ganhe recompensas exclusivas!",
        "date" => "2025-09-25"
    ]
];
echo json_encode($news, JSON_PRETTY_PRINT);
