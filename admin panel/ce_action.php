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
        }
        img{
          padding: 10px;
          width: 200px;
          height:200px
        }
        h2{
          margin-top:10px;
        }
        .btn{
          background-color: red;
          border: solid 2px white;
          color:white;
          padding: 5px;
          font-size: 18px;
          border-radius: 10px;
          margin:5px;
          
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
            <p class="active_sec"><a a href="manageevents.php" style="color: black; text-decoration: none;">Manage Events</a></p>
            
        </div>
        <!--Components-->
        <div class = "col-md-10 d_bg">
            <div class="row">
                <div class="col-sm-8" style="margin-top: 25px;">
                    <a href="manageevents.php" class="ulst">Event List</a>
                    <a href="me_addevent.php" class="ulst">Add Event</a>
                    <a href="ue_action.php" class="ulst">Upcoming Events</a>
                    <a href="ce_action.php" class="ulst"  style="color: #C63E2C;">Completed Events</a>
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
    <div class="card mb-3" style="max-width: 100%;">
    <?php include '../lib/conn.php';
            $sql = "SELECT ue_id, ue_title, ue_poster, ue_des FROM u_events where e_status ='Completed' ";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                ?>
        <div class="row g-0" style="border: solid 2px black; margin: 2px;background-color: #080F43; color:white">
        <div class="col-md-4">
            <center>
            <h2><?php echo $row["ue_title"];?></h2>
            <img src="../event_images/<?php echo $row["ue_poster"];?>">
            </center>
        </div>
        <div class="col-md-8" style = "font-size:20px">
        <div class="card-body">
        <p class="card-text">Details About Event : <?php echo $row["ue_des"];?></p>
        <a href="update_events.php?id=<?php echo $row['ue_id'];?>"><button class="btn">Edit</button></a> 
        <a href="delete_event.php?id=<?php echo $row['ue_id'];?>"><button class="btn">Delete</button></a>
        <a href="mcomplete_event.php?id=<?php echo $row['ue_id'];?>"><button class="btn">Mark as complete</button></a>
      </div>
    </div>
          
  </div>
  <?php
               
              }
            } else {
              echo "0 results";
            }
        ?>
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