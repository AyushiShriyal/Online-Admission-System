<?php
session_start();
$server="localhost";
$username="root";
$password="";
$db="onlineadmission";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
    echo "connection failed";
}

        if(isset($_POST['login_btn']))
        {
           $login_name=$_POST["login_name"];
           $pass=$_POST["login_password"];
           $sq="select * from apply where username='$login_name' and password='$pass'";
           $result=mysqli_query($conn,$sq);
           $num=mysqli_num_rows($result);
           if($num==1)
           {
               $_SESSION['user']=$login_name;
            header('location:admission.html');
           }
           else
           {
           // header('location:login.html');
           }
        }
        else{
           // header('location:login.html');
        }

?>