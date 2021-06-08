<?php 

    include __DIR__ . '/data/db.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/style.css">

</head>
<body>
    
    <?php foreach($database as $disco){ ?>
        <div class="row">
            <div class="disco">
                <img src="<?php echo $disco['poster'] ?>" alt="">
                <h3 class="title"><?php echo $disco['title']?></h3>
                <h3 class="author"><?php echo $disco['author']?></h3>
            </div>
        </div>
    <?php } ?>

</body>
</html>
