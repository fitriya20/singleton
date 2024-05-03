<?php
require_once("view.php");
$read = View::motor();
$data = $read->readMotor();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">merk</th>
      <th scope="col">type</th>
      <th scope="col">harga</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1;?>
    <?php foreach ($data as $key => $value) : ?>
    <tr>
        <th scope="row"><?= $i++ ?></th>
        <td><?= $value['merk'] ?></td>
        <td><?= $value['type'] ?></td>
        <td><?= $value['harga'] ?></td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>