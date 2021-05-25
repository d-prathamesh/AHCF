<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Title-->
    <title>AHCF | Update Event</title>

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
    <link href="../css/dashboard.css" rel="stylesheet">

    <style>
        #f_btn{
            background-color: #080F43;
            color: white;
            width: 100%;
            margin-top: 30px;
            padding: 5px;
        }
    </style>

  </head>
  <body>
      <div style="margin: 2%;">
      <div class = "row">
        <!--Dashboard Navbar-->
        <div class = "col-md-2" id = "navbar">
            <h1 id="title">AHCF</h1><br>
            <p><a a href="db.php" class="navlist">Dashboard</a></p>
            <p><a href ="manageuser.php" class="navlist">Manage Admins</a></p>
            <p class="active_sec"><a a href="managevideos.php" style="color: black; text-decoration: none;">Manage Events</a></p>
        </div>
        <!--Components-->
        <div class = "col-md-10 d_bg">
            <div class="row">
                <div class="col-sm-8" style="margin-top: 25px;">
                    <a href="manageevents.php" class="ulst" >Event List</a>
                    <a href="me_addevent.php" class="ulst" style="color: #C63E2C;">Add Event</a>
                    <a href="ue_action.php" class="ulst">Upcoming Events</a>
                    <a href="ce_action.php" class="ulst">Completed Events</a>
                </div>
                <div class="col-sm-4">
                    <a href="#"><img src="../imgs/graph.png" width="60" height="60" style="border-radius: 50%; float: right;"></a>
                
                
                </div>
    </div>
    <hr style="color: #C63E2C; height: 2px;">
        <div class="container">
        <form action ="" method="POST">
            <div class="row">
            <?php 
            include '../lib/conn.php';
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
                <div class="col-sm-6">
                    <center>
                    <input type="text" placeholder="Enter Event Title" class="cutab" name="ue_title" value="<?php echo $arrdata["ue_title"];?>">
                    </center>
                </div>
                <div class="col-sm-6">
                    <center>
                    <input id="f_btn" type="file" name="ue_poster" id="fileToUpload" value="<?php echo $arrdata["ue_poster"];?>">
                    </center>
                </div>
            </div>
            <input type="text" name="ue_des" placeholder="Enter Event Description" class="cutab" value="<?php echo $arrdata["ue_des"];?>">
            <div class="row">
                <div class="col-sm-6">
                    <center>
                    <input type="date" class="cutab" name="ue_date" value="<?php echo $arrdata["ue_date"];?>">
                    </center>
                </div>
                <div class="col-sm-6">
                    <center>
                    <input type="datetime" class="cutab" placeholder="Enter Time of event" name="ue_time" value="<?php echo $arrdata["ue_time"];?>">
                </div>
            </div>
            <p class="cutab">Select Mode of Event</p>
                <input type="radio" id="" name="ue_mode" value="Online" value="<?php echo $arrdata["ue_mode"];?>">
                <label for="Online">Online</label>
                <input type="radio" id="" name="ue_mode" value="Offline" value="<?php echo $arrdata["ue_mode"];?>">
                <label for="Offline">Offline</label>

            <input type="text" placeholder="Enter Event Venue" class="cutab" name="ue_venue" value="<?php echo $arrdata["ue_venue"];?>">

            <center>
                
            <button class="cutabtn" name = "submit">Update Event</button>
            </center>
        </from>
        
        </div>

    
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