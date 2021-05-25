<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Title-->
    <title>AHCF | Add Admin Form</title>

    <!--Favicon-->
    <link rel="shortcut icon" href="../imgs/logo.jpg" type="image/x-icon">

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
    </style>

  </head>
  <body>
      <div style="margin: 2%;">
      <div class = "row">
        <!--Dashboard Navbar-->
        <div class = "col-md-2" id = "navbar">
            <h1 id="title">AHCF</h1><br>
            <p><a a href="db.php" class="navlist">Dashboard</a></p>
            <p class="active_sec"><a href ="manageuser.php" style="color: black; text-decoration: none;">Manage Admins</a></p>
            <p><a a href="manageevents.php" class="navlist">Manage Events</a></p>
        </div>
        <!--Components-->
        <div class = "col-md-10 d_bg">
                <div class="row">
                    <div class="col-sm-6" style="margin-top: 25px;">
                        <a href="manageuser.php" class="ulst">Admin List</a>
                        <a href="mu_add.php" class="ulst" style="color: #C63E2C;">Add Admin</a>
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
        <div class="row">
            <div class="col-sm-12">
                <form style="font-family: 'Times New Roman', Times, serif;" action = "" method="POST">
                    <center>
                    <h1>Create an Admin</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Enter First Name" name = "a_fname" id="a_fname" required class="cutab">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Enter Last Name" name = "a_lname" id="a_lname" required class="cutab">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="date" placeholder="Enter Birthdate" name = "a_dob" id="a_dob" required class="cutab">
                        </div>
                        <div class="col-sm-6">
                            <input type="tel" placeholder="Enter Contact Number" name = "a_cn" id="a_cn" required class="cutab">
                        </div>
                        <div class="col-sm-12">
                            <input type="email" placeholder="Enter Admin email" name = "a_email" id="a_email" required class="cutab"><br>
                            <input type="password" placeholder="Create default password" name="a_pass" id="a_pass" required class="cutab"><br>
                            <button class="cutabtn" name = "submit_a">Create Admin</button>
                            </div>
                    </div>
                   
                </center>
                </form>
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

<?php 
    include '../lib/conn.php';
    if(isset($_POST['submit_a'])){
        $a_fname = $_POST['a_fname'];
        $a_lname = $_POST['a_lname'];
        $a_dob = $_POST['a_dob'];
        $a_cn = $_POST['a_cn'];
        $a_email = $_POST['a_email'];
        $a_pass = $_POST['a_pass'];

        $sql = "INSERT INTO admins (a_fname, a_lname, a_dob, a_cn, a_email, a_pass)
        VALUES ('$a_fname', '$a_lname', '$a_dob', '$a_cn' , '$a_email', '$a_pass')";

        $res = mysqli_query($conn,$sql);

        if($res){
            ?>
            <script>
            alert("Admin Created Successfuly");
            </script>
            <?php
        }else {
            ?>
            <script>
            alert("Admin not created");
            </script>
            <?php
        }

    }

?>