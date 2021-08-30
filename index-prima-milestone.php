<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Index-prima</title>
</head>
<body>
      <?php
      require_once__DIR__ . "/database/database.php";

      foreach($database as $disc) {
            echo "{$disc['title']} <br/>";
            echo "{$disc['author']} <br/>";
      }


      
      ?>



      
</body>
</html>