<?php require("/home/miguel/cursos/php/pratical/arch/bootstrap.php");?>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Crud Básico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>
  <div class="container">
    <?php 
      try {
        require load();
      } catch (Exception $e) {
        echo $e;
      }
    ?>
  </div>
  </body>
</html>
