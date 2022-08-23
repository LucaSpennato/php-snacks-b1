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
    
</body>
</html>