<?php
/*
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/

$matches = [
    [
        'casa' => [
            'nomeSquadra' => 'Olimpia Milano',
            'punti' => 55
        ],
        'ospite' => [
            'nomeSquadra' => 'Cantù',
            'punti' => 60
        ]
    ],
    [
        'casa' => [
            'nomeSquadra' => 'Dolomiti Energia',
            'punti' => 90
        ],
        'ospite' => [
            'nomeSquadra' => 'Fortitudo Bologna',
            'punti' => 40
        ]
    ]  
];

foreach ( $matches as $partita ) {
    echo $partita['casa']['nomeSquadra'] . " - "  . $partita['casa']['punti']. " - "  .$partita['ospite']['punti']. "<br>";
}


?>