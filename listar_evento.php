<?php
// Incluir o arquivo com a conexão com Banco de Dados 
include_once './conexao.php';

// QUERY para recuperar os eventos
$query_events = "SELECT  id, title,color,start,end FROM events";

//preparar a QUERY
$result = $conn ->prepare($query_events);

// Executar a QUERY

$result_events->execute();

//Criar o array que recebe os eventos 
$eventos = [];

// Percorrer a lista de regidtros retornando do bancos de dados
while($row_events = $result_events->fetch(PDO::FETCH_ASSOC)){

    // Extrair o array
    extract ($row_events); 

    $eventos[] = [
        'id' => $id,
        'title' => $title,
        'color' => $color,
        'start' => $start,
        'end' => $end,
    ];
}

echo json_encode($eventos);