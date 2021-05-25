<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Title-->
    <title>AHCF | Upcoming Event</title>

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
      #ue_user{
        background-color: #080F43;
        color: white;
        margin-top: 20px;
        padding: 10px;
      }
      #image{
        padding: 10px;
        width: 250px;
        height: 250px;
      }
      #rm_btn{
         background-color: white;
         border: solid 2px white;
         border-radius: 15px;
         padding: 5px;
         margin-top: 28px;
      }
      #res_btn{
         background-color: red;
         border: solid 2px red;
         border-radius: 15px;
         padding: 5px;
         color: white;
         margin-top: 25px;
         margin:3px;
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
              <a class="nav-link" href="upcoming_events.php">Upcoming Events</a>
            </li>
            <li class="nav-item s_nav">
              <a class="nav-link active" href="c_events.php">Events</a>
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
  <!--Section-->
    <div class = "container">
    <h2>Our Events</h2>
    <?php include 'lib/conn.php';
            $sql = "SELECT ue_id, ue_title, ue_poster, ue_des FROM u_events where e_status = 'Completed'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
    ?>
    <section>
    <div class = "row" id = "ue_user">
    <div class = "col-sm-4">
        <center>
        <h2><?php echo $row["ue_title"];?></h2>
        <img src="event_images/<?php echo $row["ue_poster"];?>" class = "img-fluid img-responsive" id="image">
              </center>
    </div>
    <div class = "col-sm-8">
        <p style="font-size: 20px;">Event Description :<?php echo $row["ue_des"];?> </p>
        <a href="read_more.php?id=<?php echo $row['ue_id'];?>"><button id="rm_btn"><b>Read More</b></button></a>
        <a href="user_registration.php"><button id="res_btn"><b>Give Feedback</b></button></a>
        <a href="user_registration.php"><button id="res_btn"><b>View Images</b></button></a>
    </div>
    </div>
    <?php
               
            }
          } else {
            echo "0 results";
          }
      ?>

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