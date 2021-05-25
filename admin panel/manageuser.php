<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Title-->
    <title>AHCF | Admin List</title>

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
        #up_btn{
            background-color: #080F43;
            border: solid 2px #080F43;
            color: white;
            padding: 5px;
            border-radius: 10px;
        }
        #d_btn{
            background-color: brown;
            border: solid 2px brown;
            color: white;
            padding: 5px;
            border-radius: 10px;
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
                <a href="manageuser.php" class="ulst" style="color: #C63E2C;">Admin List</a>
                <a href="mu_add.php" class="ulst">Add Admin</a>
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
        <?php include '../lib/conn.php';
            $sql = "SELECT id, a_fname, a_email, a_cn, a_pass FROM admins";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                ?>
                <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th>Sr. No.</th>
                        <th>Name</th>
                        <th>Email Id</th>
                        <th>Mobile</th>
                        <th>Default Password</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["a_fname"];?></td>
                        <td><?php echo $row["a_email"];?></td>
                        <td><?php echo $row["a_cn"];?></td>
                        <td><?php echo $row["a_pass"];?></td>
                        <td>
                        <a href="update.php?id=<?php echo $row['id'];?>"><button id="up_btn">Update</button></a>
                        <a href="delete.php?id=<?php echo $row['id'];?>"><button id="d_btn">Delete</button></a>
                        </td>
                    </tr>   
                    </thead>
                </table>
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