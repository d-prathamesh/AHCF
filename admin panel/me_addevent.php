<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Title-->
    <title>AHCF | Add Event</title>

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
        #log_btn{
            border-radius: 25px;
            background-color: #080F43;
            color: white;
            padding: 10px;
            border: solid 2px;
            margin-left: 20px;
            }
        #in_div{
            text-align: right;
            font-size: 20px;
            margin-top:20px;
        }
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
                <div class="col-sm-4" id="in_div">
                    <!--PHP LOGOUT -->
            <?php
                session_start();

                if(isset($_SESSION['User']))
                {
                    echo ' WellCome ' . $_SESSION['User'];
                    echo '<a href="logout.php?logout"><button id="log_btn">Logout</button></a>';
                }
                else
                {
                    header("location:index.php");
                }

            ?> 
                </div>
    </div>
    <hr style="color: #C63E2C; height: 2px;">
    <?php
error_reporting(0);
?>
        <div class="container">
        <form action ="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <center>
                    <input required type="text" placeholder="Enter Event Title" class="cutab" name="ue_title">
                    </center>
                </div>
                <div class="col-sm-6">
                    <center>
                    <input required id="f_btn" type="file" name="uploadfile" value=""/>
                    </center>
                </div>
            </div>
            <input required type="text" name="ue_des" placeholder="Enter Event Description" class="cutab" maxlength="4294967295">
            <div class="row">
                <div class="col-sm-6">
                    <center>
                    <input required type="date" class="cutab" name="ue_date">
                    </center>
                </div>
                <div class="col-sm-6">
                    <center>
                    <input required type="datetime" class="cutab" placeholder="Enter Time of event" name="ue_time">
                </div>
            </div>
            <p class="cutab">Select Mode of Event</p>
                <input type="radio" id="" name="ue_mode" value="Online">
                <label for="Online">Online</label>
                <input type="radio" id="" name="ue_mode" value="Offline">
                <label for="Offline">Offline</label>

            <input type="text" placeholder="Enter Event Venue" class="cutab" name="ue_venue" required>

            <center>
                
            <button class="cutabtn" name = "submit">Submit</button>
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

<?php 
    include '../lib/conn.php';
    if(isset($_POST['submit'])){
        $ue_title = $_POST['ue_title'];
        $ue_poster = $_POST['ue_poster'];
        $ue_des = $_POST['ue_des'];
        $ue_date = $_POST['ue_date'];
        $ue_time = $_POST['ue_time'];
        $ue_mode = $_POST['ue_mode'];
        $ue_venue = $_POST['ue_venue'];

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "../event_images/".$filename;

        $insertquerry = "insert into u_events(ue_title, ue_poster, ue_des, ue_date, ue_time, ue_mode, ue_venue)
        values ('$ue_title', '$filename', '$ue_des', '$ue_date', '$ue_time', '$ue_mode', '$ue_venue')
        ";

        $res = mysqli_query($conn,$insertquerry);

        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }

        if($res){
            ?>
            <script>
            alert("Event Created Successfuly");
            </script>
            <?php
        }else {
            ?>
            <script>
            alert("Event not created");
            </script>
            <?php
        }

    }
    $result = mysqli_query($conn, "SELECT * FROM u_events");
?>
