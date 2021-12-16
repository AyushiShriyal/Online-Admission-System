<?php
$server="localhost";
$username="root";
$password="";
$db="onlineadmission";

$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn)
{
    echo "connection failed";
}

    $name=$_POST["apply_name"];
    $username=$_POST["apply_username"];
    $email=$_POST["apply_email"];
    $password=$_POST["apply_password"];
   
        if(isset($_POST["apply"]))
        {
               $sq="select * from apply where username='$username'";
               $result=mysqli_query($conn,$sq);
               $num=mysqli_num_rows($result);
               if($num==1)
               {
                  //echo "username already taken";
                  echo '<script>alert("username already taken please enter another username");</script>';
            
               }
               else
               {
                $sql="insert into apply(name,username,email,password) values('$name','$username','$email','$password')";
                $rs= mysqli_query($conn,$sql);
                if($rs)
                {
                    header('location:login.html');
                }
                else
                {
                    echo "problem";
                }
            }
        }
        else
        {
            header('location:Apply_now.html');
        }
       
    

?>