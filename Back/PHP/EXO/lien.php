

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Formulaire membre PHP :: EXO</title>
</head>
<body>
    <div class="container">
<ul class="list-group list-group-flush">
  <li class="list-group-item">
  <a href="lien.php?id=1&type=france">
  France
  </a>
  </li>
  <li class="list-group-item">
    <a href="lien.php?id=2&type=italie">
  Italie
  </a>
  </li>
  <li class="list-group-item">
    <a href="lien.php?id=3&type=espagne">
  Espagne
  </a>
  </li>
  <li class="list-group-item">
      <a href="lien.php?id=4&type=allemagne">
  Allemagne
  </a>
  </li>
</ul>
</div>

<?php

foreach($_GET as $key => $value)
if($key != 'id')
{
    echo "Votre choix est <strong>$value</strong><br><br><hr>";
}


?>
</body>
</html>