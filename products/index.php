<?php 
require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../config/database.php";

// take all data from database named stocks

$stock = $db->query("SELECT * FROM stock")->fetch_all(MYSQLI_ASSOC);

var_dump($stock);

?>



<h1>List of Stock</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id_product</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Stock</th>
      <th scope="col">action</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>


<?php 
require __DIR__ . "/../includes/footer.php"
?>