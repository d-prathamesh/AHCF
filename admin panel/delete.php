<?php 
include('../lib/conn.php');
$id = $_GET['id'];

$deletequery = "delete from admins where id = $id";

$query = mysqli_query($conn,$deletequery);
header('location:manageuser.php');
if($query){
    ?>
    <script>
        alert("Deleted Successfully!")
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Error!")
    </script>
    <?php
}

?>
