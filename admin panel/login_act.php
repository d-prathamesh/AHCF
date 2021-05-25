<?php 
require_once('../lib/conn.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['a_email']) || empty($_POST['a_pass']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admins where a_email='".$_POST['a_email']."' and a_pass='".$_POST['a_pass']."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['a_email'];
                header("location:db.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct Email Id and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }


    ?>