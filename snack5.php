<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <h1>
        Snack 5
    </h1>

    <!-- Creare un array contenente qualche alunno di un'ipotetica classe. 
    Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


    <?php
        $class = [
            [
                'name' => 'Johnny',
                'last name' => 'Stecchino',
                'votes' => [
                    'math' => 7,
                    'english' => 8,
                    'science' => 7,
                ],
            ],
            [
                'name' => 'Johnny',
                'last name' => 'Depp',
                'votes' => [
                    'math' => 6,
                    'english' => 10,
                    'science' => 7,
                ],
            ],
            [
                'name' => 'Leila',
                'last name' => 'Skywalker',
                'votes' => [
                    'math' => 10,
                    'english' => 10,
                    'science' => 10,
                ],
            ],
        ];
    ?>

    <ul>
        <?php for ($i=0; $i < count($class); $i++) {
            $votes = $class[$i]['votes'];
            $math = $votes['math'];
            $english = $votes['english'];
            $science = $votes['science'];
            $average =  ($math +  $english + $science) / count($votes);
        ?>

            <li>
                <?php
                    echo $class[$i]['name'] .'  '. $class[$i]['last name'];
                ?>
                <ul>
                    <li>
                        <?php 
                            echo ' Votes average: ' .  intval($average);
                        ?>
                    </li>
                </ul>
            </li>

        <?php } ?>
    </ul>

</body>
</html>