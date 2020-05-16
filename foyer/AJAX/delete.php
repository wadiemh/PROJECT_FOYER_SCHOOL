<!-- include database -->

<?php

  include 'db.php';
 
  // sorry need to get id 

  $id = $_POST['delete_id'];
  $query = mysqli_query($con,"DELETE FROM utilisateur WHERE id='$id'");

     try {
    $conn = new PDO("mysql:host=localhost;dbname=okok", 'root', '');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM utilisateur WHERE id='$id'";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

 ?>
