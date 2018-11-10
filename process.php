<?php


require_once('C:\wamp64\www\project\connect.php');
session_start();


    if(isset($_POST['login']))
    {
        if(empty($_POST['uname']) || empty($_POST['upass']))
        {
           header("location:login.php?Empty= Fill in the blanks"); 
        }
        else
        {
            $uname=$_POST['uname'];
			$password=$_POST['upass'];

            $query="select * from users where uname='".$uname."'AND upass='".$password."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['user']=$_POST['uname'];
                header("location:home.php");
            }
            else
            {
                header("location:login.php?Invalid= enter correct username and password");
            }
        }

    }
    else
    {
        header("location:login.php");
    }