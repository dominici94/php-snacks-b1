<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
    $giornata22 = [
        [
            'sqCasa' => 'Sampdoria',
            'golCasa' => 1,
            'sqOspite' => 'Torino',
            'golOspite' => 2,  
        ],
        [
            'sqCasa' => 'Salernitana',
            'golCasa' => 0,
            'sqOspite' => 'Lazio',
            'golOspite' => 3,  
        ],
        [
            'sqCasa' => 'Juventus',
            'golCasa' => 2,
            'sqOspite' => 'Udinese',
            'golOspite' => 0,  
        ],
        [
            'sqCasa' => 'Sassuolo',
            'golCasa' => 2,
            'sqOspite' => 'Verona',
            'golOspite' => 4,  
        ],
        [
            'sqCasa' => 'Venezia',
            'golCasa' => 1,
            'sqOspite' => 'Empoli',
            'golOspite' => 1,  
        ],
        [
            'sqCasa' => 'Roma',
            'golCasa' => 1,
            'sqOspite' => 'Cagliari',
            'golOspite' => 0,  
        ],
        [
            'sqCasa' => 'Atalanta',
            'golCasa' => 0,
            'sqOspite' => 'Inter',
            'golOspite' => 0,  
        ],
        [
            'sqCasa' => 'Milan',
            'golCasa' => 1,
            'sqOspite' => 'Spezia',
            'golOspite' => 2,  
        ],
        [
            'sqCasa' => 'Bologna',
            'golCasa' => 0,
            'sqOspite' => 'Napoli',
            'golOspite' => 2,  
        ],
        [
            'sqCasa' => 'Fiorentina',
            'golCasa' => 6,
            'sqOspite' => 'Genoa',
            'golOspite' => 0,  
        ],
    ];
    // var_dump($giornata22);

    for($i = 0; $i < count($giornata22); $i++){
        echo "{$giornata22[$i]['sqCasa']} - {$giornata22[$i]['sqOspite']} | {$giornata22[$i]['golCasa']} - {$giornata22[$i]['golOspite']} <br>";
    }
?> 