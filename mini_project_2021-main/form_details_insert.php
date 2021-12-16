<?php
session_start();
$server="localhost";
$userna="root";
$password="";
$db="onlineadmission";

$conn=mysqli_connect($server,$userna,$password,$db);
if(!$conn)
{
    echo "connection failed";
}
$_SESSION['f_stud_name']=$_POST["fname"];
$_SESSION['gender']=$_POST['Gender'];
$_SESSION['email']=$_POST['email'];
$_SESSION['pn']=$_POST['pn'];
$_SESSION['dob']=$_POST['DOB'];
$_SESSION['adhar_no']=$_POST['card_number'];
$_SESSION['Parmanent_address']=$_POST['Parmanent_address'];
$_SESSION['ffname']=$_POST['ffname'];
$_SESSION['mfname']=$_POST['mfname'];
$_SESSION['ppn']=$_POST["ppn"];
$_SESSION['foccupation']=$_POST['foccupation'];
$_SESSION['moccupation']=$_POST['moccupation'];
$_SESSION['school']=$_POST['school'];
$_SESSION['board']=$_POST['board'];
$_SESSION['stream']=$_POST['stream'];
$_SESSION['passout_10']=$_POST['passout_Year_10'];
$_SESSION['per']=$_POST['per'];
$_SESSION['school_12']=$_POST['12School'];
$_SESSION['board2']=$_POST['board2'];
$_SESSION['stream2']=$_POST['stream2'];
$_SESSION['passout_12']=$_POST['passout_Year_12'];
$_SESSION['per_12']=$_POST['12per'];
$_SESSION['course']=$_POST['course'];
$_SESSION['branch']=$_POST['branch'];
$_SESSION['bech_clg']=$_POST['clg'];
$_SESSION['postgcourse']=$_POST['postgcourse'];
$_SESSION['postgyear']=$_POST['postgyear'];
if(isset($_POST["Next_btn"])){
   
    //print'<script>alert("please enter the right password");</script>';
    header('location:upload.html');
}
?>