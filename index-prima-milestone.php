<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <link rel="stylesheet" href="./css/style.css">
      <title>Index-prima</title>
</head>
<body>
      <?php

      require_once __DIR__ . "/database/database.php";
      ?>

      <div class="container"> 
            <div class="row">

                  
      
            <?php
                  foreach($database as $disc) {?>

                  <div class="album-container col-4">
                        <div class="inner-album">
                              <div class="image-album">
                                    <div class="poster">
                                          <img src="<?php echo $disc['poster']?>" alt="<?php echo "cover album - {$disc['title']}"?>">
                                    </div>
                              </div>
                              <div class="text-album">
                                    <h5><?php echo $disc['title'] ?></h5>
                                    <h5><?php echo $disc['author'] ?></h5>
                                    <h5><?php echo $disc['year'] ?></h5>
                              </div>
                        </div>
                  </div>
                  <?php     
                  }
                  ?>
            </div>
      </div>

      
      



      
</body>
</html>