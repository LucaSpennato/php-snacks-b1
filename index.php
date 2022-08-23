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

    <h1>
        Snack 2
    </h1>

    <!-- Passare come parametri GET name, mail e age e verificare 
    (cercando i metodi che non conosciamo nella documentazione) 
    che name sia più lungo di 3 caratteri, che mail contenga 
    un punto e una chiocciola e che age sia un numero. 
    Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

    <form action="index.php" method="GET">
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="number" name="age">
        <input type="submit">
    </form>

    <?php
    ?>
    <h5>
        <?php
        $name = $_GET['name'];
        $mail = $_GET['email'];
        $age = $_GET['age'];

        if (
            !strlen($name > 3)
            && (strpos($mail, '@') > 0
                && strpos($mail, '.') > 3)
            && is_numeric($age)
        ) {
            echo 'accesso riuscito';
        } else {
            echo 'accesso negato';
        }
        ?>
    </h5>

    <h1>
        Snack 3
    </h1>

    <!-- Creare un array con 15 numeri casuali,
        tenendo conto che l'array non dovrà contenere 
        lo stesso numero più di una volta  -->

    <h5>
        <?php
        $numbers = [];

        // while(count($numbers) < 15){
        //     $randNum = rand(1, 300);

        //     // if(!in_array($randNum, $numbers)){

        //     // }

        //     var_dump($array);


        // }
        ?>
    </h5>

    <h1>
        Snack 4
    </h1>

        <!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
        Prendere il paragrafo e suddividerlo in tanti paragrafi. 
        Ogni punto un nuovo paragrafo. -->

    <?php

        $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Harum, veniam? Nihil enim veritatis qui sunt voluptates voluptatum ut.
        doloribus aut fuga dolore beatae numquam tempore inventore fugiat temporibus nostrum eligendi.';

        $splittedParagraph = explode('.', $paragraph);
    ?>
         
    <?php 
        for ($i=0; $i < count($splittedParagraph); $i++) {    
    ?>

    <p>
        <?php 
            echo $splittedParagraph[$i];
        ?>
    </p>

    <?php } ?>

    <h1>
        Snack 7
    </h1>

    <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

</body>

</html>