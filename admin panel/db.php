<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Title-->
    <title>AHCF | Dashboard</title>

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
    <link href="../css/dashboard.css" rel="stylesheet" type="text/css">
    
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
    </style>


  </head>
  <body>
      <div style="margin: 2%;">
      <div class = "row">

        <!--Dashboard Navbar-->

        <div class = "col-md-2" id = "navbar">
            <h1 id="title">AHCF</h1><br>
            <p class="active_sec"><a a href="db.php" style="color: black; text-decoration: none;">Dashboard</a></p>
            <p><a href ="manageuser.php" class="navlist">Manage Admins</a></p>
            <p><a a href="manageevents.php" class="navlist">Manage Events</a></p>
        </div>

        <!--Components-->

        <div class = "col-md-10 d_bg">
            <div class="row">
            <div class="col-sm-6">
                <h1 style="color: #C63E2C;">Overview</h1>
            </div>
            <div class="col-sm-6" id="in_div">

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

<!--Actions -->

        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-6">
                <p class="headd">Upcoming Events</p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aut voluptatem repellendus! Sapiente eveniet dolorum praesentium possimus cupiditate quidem aliquid similique, laudantium eos, recusandae veniam sit officia nesciunt aperiam sint.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maxime inventore consectetur eos consequuntur rem officia sequi cumque ipsum porro eveniet illo sint asperiores atque accusamus nam dolorum, nesciunt quisquam?
            </div>
             <div class="col-sm-6">
                <p class="headd">Completed Events</p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aut voluptatem repellendus! Sapiente eveniet dolorum praesentium possimus cupiditate quidem aliquid similique, laudantium eos, recusandae veniam sit officia nesciunt aperiam sint.
                <br>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur totam sed amet, odit a laboriosam blanditiis facilis repellat ullam nulla modi dolorum fugit illum nostrum, esse corporis maxime commodi temporibus.
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <div class="col-sm-6">
                <p class="headd">Registered User</p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt aut voluptatem repellendus! Sapiente eveniet dolorum praesentium possimus cupiditate quidem aliquid similique, laudantium eos, recusandae veniam sit officia nesciunt aperiam sint.
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat maxime inventore consectetur eos consequuntur rem officia sequi cumque ipsum porro eveniet illo sint asperiores atque accusamus nam dolorum, nesciunt quisquam?
            </div>
             
        </div>
        
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