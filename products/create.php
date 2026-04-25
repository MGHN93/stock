<?php
require __DIR__ . "/../includes/header.php";
require __DIR__ . "/../config/database.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    
    $db->query ("INSERT INTO supplies(name, description, stock) VALUES('$name','$description',$stock)");

}

?>

<form action="#" method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">

  <div class="mb-3">
    <label class="form-label">Description</label>
    <input type="text" class="form-control" name="description">
  </div>

 <div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="number" class="form-control" name="stock">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php
require __DIR__ . "/../includes/footer.php"
?>