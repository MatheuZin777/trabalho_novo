<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Filmes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .filme {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .filme h2 {
            margin-top: 0;
        }
        .filme p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
// Array de filmes (simulação de um banco de dados)
$filmes = [
    [
        'titulo' => 'Interestelar',
        'diretor' => 'Christopher Nolan',
        'ano' => 2014,
        'genero' => 'Ficção científica',
        'sinopse' => 'Um grupo de exploradores faz uso de um buraco de minhoca recém-descoberto para superar as limitações das viagens espaciais tripuladas e vencer as vastas distâncias envolvidas em uma jornada interestelar.'
    ],
    [
        'titulo' => 'O Poderoso Chefão',
        'diretor' => 'Francis Ford Coppola',
        'ano' => 1972,
        'genero' => 'Crime, Drama',
        'sinopse' => 'A história se concentra na ascensão de um chefão da máfia ítalo-americana e seu herdeiro relutante.'
    ],
    [
        'titulo' => 'Pulp Fiction: Tempo de Violência',
        'diretor' => 'Quentin Tarantino',
        'ano' => 1994,
        'genero' => 'Crime, Drama',
        'sinopse' => 'Vários contos interligados sobre criminosos em Los Angeles.'
    ]
];

// Loop através do array de filmes para exibir na página
foreach ($filmes as $filme) {
    echo '<div class="filme">';
    echo '<h2>' . $filme['titulo'] . ' (' . $filme['ano'] . ')</h2>';
    echo '<p><strong>Diretor:</strong> ' . $filme['diretor'] . '</p>';
    echo '<p><strong>Gênero:</strong> ' . $filme['genero'] . '</p>';
    echo '<p><strong>Sinopse:</strong> ' . $filme['sinopse'] . '</p>';
    echo '</div>';
}
?>

</body>
</html>
