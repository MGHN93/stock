<?php
require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../config/database.php";

// take all data from database named stocks

$stock = $db->query("SELECT * FROM supplies")->fetch_all(MYSQLI_ASSOC);

// var_dump($stock);

?>



<h1>List of Stock</h1>
<a href="./create.php"><button class="btn btn-info">+ New Product</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Stock</th>
      <th scope="col">action</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $number = 1;
    foreach ($stock as $s):
    ?>
      <tr>
        <th scope="row"><?= $number; ?></th>
        <td><?= $s['Name']; ?></td>
        <td><?= $s['Description']; ?></td>
        <td><?= $s['Stock']; ?></td>
        <td>
          <a href="#" class="btn btn-warning">EDIT</a>
          <a href="#" class="btn btn-danger">DELETE</a>

        </td>
      </tr>



    <?php
      $number += 1;
    endforeach; ?>
    

    <?php
    require __DIR__ . "/../includes/footer.php"
    ?>