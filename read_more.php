<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Title-->
    <title>AHCF | Details about Upcoming Event</title>

    <!--Favicon-->
    <link rel="shortcut icon" href="../imgs/logo.png" type="image/x-icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--CSS-->
    <link href="css/user.css" rel="stylesheet">
    <style>
        #sec{
            background-color: #080F43;
            color: white;
            padding:20px;
        }
        #res_btn{
         background-color: brown;
         border: solid 2px brown;
         border-radius: 15px;
         padding: 5px;
         color: white;
         margin-top: 25px;
         margin:3px;
         width:30%;
      }
      img{
          width: 400px;
          height: 400px;
          padding:5px;
          margin: 10px;
          border: dotted 2px white;
      }
    </style>

    <!--JS links-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>
   <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: white; margin-bottom: 0px; padding-bottom: 0px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img class="img-fluid img-responsive" src="imgs/logocom.png" width="250px" height="250px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item s_nav">
              <a class="nav-link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item s_nav">
              <a class="nav-link" href="#">Media Coverage</a>
            </li>
            <li class="nav-item s_nav">
              <a class="nav-link" href="#">About AHCF</a>
            </li>
            <li class="nav-item s_nav">
              <a class="nav-link active" href="upcoming_events.php">Upcoming Events</a>
            </li>
            <li class="nav-item s_nav">
              <a class="nav-link" href="c_events.php">Events</a>
            </li>
            <li class="nav-item s_nav">
              <a class="nav-link" href="#">Members</a>
            </li>
            <li class="nav-item s_nav">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--Line-->
  <hr style="color: rgba(198, 62, 44, 1); height: 15px; opacity: 1;">

    <div class = "container" id="sec">
    <h2></h2>
    <?php 
            include 'lib/conn.php';
                $ids = $_GET['id'];
                $showquery = "select * from u_events where ue_id={$ids}";
                $showdata = mysqli_query($conn,$showquery);
                $arrdata = mysqli_fetch_array($showdata);
            if(isset($_POST['submit'])){
                $idupdate = $_GET['id'];
                $ue_title = $_POST['ue_title'];
                $ue_poster = $_POST['ue_poster'];
                $ue_des = $_POST['ue_des'];
                $ue_date = $_POST['ue_date'];
                $ue_time = $_POST['ue_time'];
                $ue_mode = $_POST['ue_mode'];
                $ue_venue = $_POST['ue_venue'];


                $query = "update u_events set ue_id=$ids, ue_title='$ue_title', ue_poster='$ue_poster',ue_des='$ue_des',ue_date='$ue_date',ue_time='$ue_time', ue_mode='$ue_mode', ue_venue='$ue_venue' where ue_id= $idupdate";

                $res = mysqli_query($conn,$query);

                if($res){
                    ?>
                    <script>
                    alert("Event Updated Successfuly");
                    </script>
                    <?php
                }else {
                    ?>
                    <script>
                    alert("Failed to update Event");
                    </script>
                    <?php
                }

            }

        ?>
    <section>
    <div class = "row" id = "ue_user">
    <div class = "col-sm-4">
        <center>
        <h2><?php echo $arrdata["ue_title"];?></h2>
        <img src="event_images/<?php echo $arrdata["ue_poster"];?>">
              </center>
    </div>
    <div class = "col-sm-8">
        <p>Event Description :<?php echo $arrdata["ue_des"];?> </p><br><br>
        <p>Date :<?php echo $arrdata["ue_date"];?> </p>
        <p>Time :<?php echo $arrdata["ue_time"];?> </p>
        <p>Mode :<?php echo $arrdata["ue_mode"];?> </p>
        <p>Venue :<?php echo $arrdata["ue_venue"];?> </p>
        <a href="user_registration.php"><button id="res_btn">Register</button></a>
    </div>
    </div>
    </div>
    </section>
    
    <!-- Optional JavaScript; choose one of the two! -->
      
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>