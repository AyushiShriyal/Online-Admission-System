<link rel="stylesheet" href="style.css">
<?php
session_start();
     function values($some)
     {
        $f=$_SESSION[$some];
        echo "$f";
     }
     
?>
<div class="admission_d1">
    <div class="admission_d2">
        <form class="f1" action="thanks.html" method="POST">
            <div style="background-color: rgb(137, 219, 215);width:100%">
                <h1>Student's Details </h1>
            </div>
            <label>Students's Name </label><br>
            <input type="text" placeholder="first name" name="fname" value=<?php values("f_stud_name")?> readonly>
            <input type="text" placeholder="Middle name" name="mname" value=<?php values("m_name")?> readonly>
            <input type="text" placeholder="Last name" name="lname" value=<?php values("l_name")?> readonly><br><br>
            <label>Gender</label><br>
            <input type="radio" name="Gender" value=<?php values("gender")?> readonly>Male
            <input type="radio" name="Gender" value=<?php values("gender")?> readonly>Female
            <input type="radio" name="Gender" value=<?php values("gender")?> readonly>Others<br><br>
            <label>Email </label><br>
            <input type="text"  name="email" value=<?php values("email")?> readonly><br><br>
            <label>Phone number </label>
            <input type="number"  name="pn" value=<?php values("pn")?> readonly>
            <label>Phone number 2 </label>
            <input type="number" name="pn2" value=<?php values("pn2")?> readonly><br><br>
            <label>Date-Of-Birth </label>
            <input type="date" name="DOB" value=<?php values("dob")?> readonly><br><br>
            <label>Adhaar Card number</label>
            <input type="number" name="card_number" value=<?php values("adhar_no")?> readonly><br><br>
            <label>Permanent Address </label><br>
            <input type="text" name="Parmanent_address" value=<?php values("Parmanent_address")?> readonly><br><br>
            <label>Present Address </label><br>
            <input type="text" name="Current_Address" value=<?php values("Current_Address")?> readonly><br><br>
    

            <div>
                <h1>Parent's Details </h1>
            </div>
            
                <label>Father's Name </label><br>
                <input type="text" placeholder="First name" name="ffname" value=<?php values("ffname")?> readonly>
                <input type="text" placeholder="Middle name" name="fmname" value=<?php values("fmname")?> readonly>
                <input type="text" placeholder="Last name" name="flname" value=<?php values("flname")?> readonly><br><br>
                <label>Mother's Name </label><br>
                <input type="text" placeholder="First name" name="mfname" value=<?php values("mfname")?> readonly>
                <input type="text" placeholder="Middle name" name="mmname" value=<?php values("mmname")?> readonly>
                <input type="text" placeholder="Last name" name="mlname" value=<?php values("mlname")?> readonly><br><br>
                <label>Phone_number </label><br>
                <input type="number"  name="ppn" value=<?php values("ppn")?> readonly>
                <label>Phone_number_2 </label>
                <input type="number" name="ppn2" value=<?php values("ppn2")?> readonly><br><br>
                <label>Father's Occupation </label><br>
                <input type="text" name="foccupation" value=<?php values("foccupation")?> readonly><br><br>
                <label>Mother's Occupation </label><br>
                <input type="text" name="moccupation" value=<?php values("moccupation")?> readonly><br><br>
           

            <div>
                <h1>Educational's Details </h1>
            </div>

            
                <h3>10th Board</h3>
                <input type="text" placeholder="School name" name="school" value=<?php values("school")?> readonly>
                <select name="board" id="board" value=<?php values("board")?> readonly>
                    <option>---Board---</option>
                    <option>ICSE</option>
                    <option>CBSE</option>
                </select>
                <select name="stream" id="stream" value=<?php values("stream")?> readonly>
                    <option>---Stream---</option>
                    <option>Science with Computer</option>
                    <option>Science with Physical Education </option>
                    <option>Commerce with Computer</option>
                    <option>Commerce with Pysical Education</option>
                </select><br><br>
                <label>Passout Year</label>
                <input type="number" name="passout_Year_10" value=<?php values("passout_10")?> readonly><br><br>
                <label>Percentage </label>
                <input type="number" placeholder="Percentage %" name="per" value=<?php values("per")?> readonly><br><br>
                <h3>12th Board</h3>
                <input type="text" placeholder="school name" name="12School" value=<?php values("school_12")?> readonly>
                <select name="board2" id="board2" value=<?php values("board2")?> readonly>
                    <option>---Board---</option>
                    <option>ISC</option>
                    <option>CBSE</option>
                </select>
                <select name="stream2" id="stream2" value=<?php values("stream2")?> readonly>
                    <option>---Stream---</option>
                    <option>PCM with Computer</option>
                    <option>PCM with Physical Education</option>
                    <option>PCB with computer</option>
                    <option>PCB with Physical Education</option>
                    <option>PCB with Physical Education</option>
                    <option>Commerce with Computer</option>
                    <Option>Commerce with Physical Education</Option>
                </select><br><br>
                <label>Passout Year</label>
                <input type="number" name="passout_Year_12" value=<?php values("passout_12")?> readonly><br><br>
                <label>Percentage </label>
                <input type="number" placeholder="Percentage %" name="12per" value=<?php values("per_12")?> readonly><br><br>


                <h3>Apply for course</h3>
                <label>Course </label>
                <select name="course" id="course" value=<?php values("course")?> readonly>
                  <option>---Select---</option>
                  <option>Bachelor's Of Computer Application (BCA)</option>
                  <option>Btech</option>
                  <option>Master's of Computer Application (MCA)</option>
                  <option>Mtech</option>
                </select>
                <label>Branch </label>
                <select name="branch" id="branch" value=<?php values("branch")?> readonly>
                    <option>---Select---</option>
                    <option>civil Engineering</option>
                    <option>Computer Science</option>
                    <option>Mechanical Engineering</option>
                </select><br><br>

                <h3>---Only for Postgraduation----</h3><br>
                <label>University Name </label>
                <input type="text" name="clg" placeholder="College/University" value=<?php values("bech_clg")?> readonly><br><br>
                <label>Bachelor's course </label>
                <select name="postgcourse" id="postgcourse" value=<?php values("postgcourse")?> readonly>
                    <option>---select---</option>
                    <option>BCA</option>
                    <option>Btech</option>
                    <option>BCS.IT</option>
                </select>
                <label>Branch</label>
                <select name="postgbranch" id="postgbranch" value=<?php values("postgbranch")?> readonly>
                    <option>---Select---</option>
                    <option>civil Engineering</option>
                    <option>Computer Science</option>
                    <option>Mechanical Engineering</option>
                </select><br><br>
                <label>Year of Graduation</label>
                <input type="number" name="postgyear" value=<?php values("postgyear")?> readonly><br><br>
                <button type='submit' name="Next_btn">Next</button>
                <button name='edit' onclick="<?php 
                                              edit()?>">Edit</button>
         </form>
        
         
         
    </div>
   
</div>
