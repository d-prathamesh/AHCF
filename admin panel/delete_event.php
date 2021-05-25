<?php 
include('../lib/conn.php');
$id = $_GET['id'];

$deletequery = "delete from u_events where ue_id = $id";

$query = mysqli_query($conn,$deletequery);
header('location:manageevents.php');
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
