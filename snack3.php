<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    
    <title>Document</title>
</head>
<body>
    <h1 class="ms-5 py-2">
        Snack 3
    </h1>

    <!-- Creare un array con 15 numeri casuali,
        tenendo conto che l'array non dovrà contenere 
        lo stesso numero più di una volta  -->
        <?php
            $numbers = [];

            while(count($numbers) < 15){

                $randNum = rand(1, 300);

                if(!in_array($randNum, $numbers)){
                    $numbers[] = $randNum;
                }
            }
        ?>

        <ul class="list-group w-50 ms-5">
            <?php for ($i=0; $i < count($numbers); $i++) { ?>
            <li class="list-group-item">
                <?php echo $numbers[$i]; ?>
            </li>
            <?php } ?>
        </ul>
</body>
</html>