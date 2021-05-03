<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test MAMP</title>
</head>
<body>

    <div class="container">
        <?php
            $badword = $_GET['badword'];
            $paragraph = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus, animi, inventore corrupti laboriosam omnis expedita doloremque eius repellendus repellat unde cumque, numquam natus. Autem earum, repellendus sed libero ipsum dolores.";
        ?>
        <div class="paragaph">
            <?php 
                echo $paragraph
            ?>
        </div>
        <div class="paragraph">
            <?php 
                echo strlen($paragraph)
            ?>
        </div>
        <div class="paragraph">
            <?php
                echo str_replace($badword,"***",$paragraph);
            ?>
        </div>
    </div>

    
    

</body>
</html>