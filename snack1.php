<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Creiamo un array contenente le partite di basket di
     un'ipotetica tappa del calendario. Ogni array avrà una squadra 
     di casa e una squadra ospite, punti fatti dalla squadra di casa 
     e punti fatti dalla squadra ospite. Stampiamo a schermo tutte 
     le partite con questo schema.
    Olimpia Milano - Cantù | 55-60 -->

    <h1>
        PHP snack 1
    </h1>

    <ul>
        <?php 
            $games = [
                [
                    'homeTeam' => 'bulls',
                    'guestTeam' => 'NY',
                    'HTScore' => '76',
                    'GTScore' => '88',
                ],
                [
                    'homeTeam' => 'Milano',
                    'guestTeam' => 'Eagles',
                    'HTScore' => '40',
                    'GTScore' => '90',
                ],
                [
                    'homeTeam' => 'bulls',
                    'guestTeam' => 'Eagles',
                    'HTScore' => '30',
                    'GTScore' => '60',
                ],
                [
                    'homeTeam' => 'NY',
                    'guestTeam' => 'Milano',
                    'HTScore' => '40',
                    'GTScore' => '33',
                ],
                [
                    'homeTeam' => 'Eagles',
                    'guestTeam' => 'NY',
                    'HTScore' => '88',
                    'GTScore' => '76',
                ],
            ];

            for ($i=0; $i < count($games); $i++) {  ?>
        <li>
            <?php
                echo $games[$i]['homeTeam'] . ' - ' . $games[$i]['guestTeam'] . ' | ' . $games[$i]['HTScore'] . ' - ' . $games[$i]['GTScore'];
            ?>
        </li>

        <?php } ?>
    </ul>
    
</body>

</html>