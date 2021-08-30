<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./css/style.css">
      <title>Index-prima</title>
</head>
<body>
      <?php

      require_once__DIR__ . "/database/database.php";
      ?>

     <?php var_dump($database);?>

      <?php
      foreach($database as $disc) {?>

            <div class="album col">
                  <img src="<?php echo $disc['poster']?>" alt="<?php echo "cover album - {$disc['title']}"?>"
                   <h5><?php echo $disc['title'] ?></h5>
                   <h5><?php echo $disc['author'] ?></h5>
                   <h5><?php echo $disc['year'] ?></h5>
            </div>
      


      
      



      
</body>
</html>