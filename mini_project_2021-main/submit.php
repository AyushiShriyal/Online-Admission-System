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

if(isset($_POST["submit_form"]))
        {
            $user=$_SESSION['user'];
            $f_stud_name=$_SESSION["f_stud_name"];
           
$gender=$_SESSION['gender'];
$email=$_SESSION['email'];
$pn=$_SESSION['pn'];

$dob=$_SESSION['dob'];
$adhar_no=$_SESSION['adhar_no'];
$Parmanent_address=$_SESSION['Parmanent_address'];
$ffname=$_SESSION['ffname'];

$mfname=$_SESSION['mfname'];

$ppn=$_SESSION["ppn"];

$foccupation=$_SESSION['foccupation'];
$moccupation=$_SESSION['moccupation'];
$school=$_SESSION['school'];
$board=$_SESSION['board'];
$stream=$_SESSION['stream'];
$passout_10=$_SESSION['passout_10'];
$per=$_SESSION['per'];
$school_12=$_SESSION['school_12'];
$board2=$_SESSION['board2'];
$stream2=$_SESSION['stream2'];
$passout_12=$_SESSION['passout_12'];
$per_12=$_SESSION['per_12'];
$course=$_SESSION['course'];
$branch=$_SESSION['branch'];
$bech_clg=$_SESSION['bech_clg'];
$postgcourse=$_SESSION['postgcourse'];
$postgyear=$_SESSION['postgyear'];
               $sq="select * from details where username='$user'";
               $result=mysqli_query($conn,$sq);
               $num=mysqli_num_rows($result);
               if($num==1)
               {
                  //echo "username already taken";
                //  echo '<script>alert("you have already submitted the form ");</script>';
                 echo "hey  '$user'";
                 header('location:show_form.php');
               }
               else
               { 
                $upload_photo=$_POST['photo'];
                $marksheet_10=$_POST['10th_Marksheet'];
                $marksheet_12=$_POST['12th_Marksheet'];

                $tmc=$_POST['tmc'];         
                $sql="insert into details(student_name,gender,email,contact,dob,adhar,address,father_name,mother_name,parent_contact,father_occupation,mother_occupation,10_school_name,10_board,10_stream,10_passout_year,10_percentage,12_school_name,12_board,12_stream,12_passout_year,12_percentage,course,branch,university,b_course,graduation_year,photo,10_certificate,12_certificate,certificates,username) values('$f_stud_name','$gender','$email','$pn','$dob','$adhar_no','$Parmanent_address','$ffname','$mfname','$ppn','$foccupation','$moccupation','$school','$board','$stream','$passout_10','$per','$school_12','$board2','$stream2','$passout_12','$per_12','$course','$branch','$bech_clg','$postgcourse','$postgyear','$upload_photo','$marksheet_10','$marksheet_12','$tmc','$user')";
                $rs= mysqli_query($conn,$sql);
                if($rs)
                {
                    echo "form succesfully submitted";
                    header('location:show_form.php');
                }
                else
                {
                    echo "problem";
                }
            }
      //      session_destroy();
        }

        ?>