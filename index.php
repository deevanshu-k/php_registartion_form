
<?php include("connection.php"); ?>
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="constraints.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<script>
    function get_enroll(id1) {
        var enrollment_id = document.getElementById(id1);
        enrollment_number = enrollment_id.value;

        console.log(enrollment_number);
    }
function populateadmisson(){
        var id1 = document.getElementById('category');
        var id2 = document.getElementById('admissionunder');
        id2.innerHTML = "";
        if (id1.value == "General") {
            var optionArray = ["|","TFW|TFW","EWS|EWS","UR|UR"];

        }
        else {
            var optionArray = ["UR|UR"];
        }

        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newoption = document.createElement("option");
            newoption.value = pair[0];
            newoption.innerHTML = pair[1];
            id2.options.add(newoption);
        }
    }
</script>

<body>

    <div class="container testbox" id="indextest">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="banner">
                    <img src="logo.jpeg" class="responsive">
                    <!-- <h1 align='center'>Sushila Devi Bansal College</h1> -->
                </div>
            <h2>Registration Form</h2>
            <div class="column">
                <div class="item">
                    <label for="scholar" style="font-weight: 600;">Scholar No<span>*</span></label>
                    <input id="scholar" type="text" name="studentscholar" required />
                </div>

                <div class="item">
                    <label for="image" style="font-weight: 600;">Upload Your Image</label>
                    <input type="file" name="uploadfile" class='imagebox' accept=".png, .jpg, .jpeg, .heic">
                </div>
            </div>

            <div class="column">
                <div class="item">
                    <label for="name" style="font-weight: 600;">Full Name<span>*</span></label>
                    <input id="name" type="text" name="studentname" required />
                </div>
                <div class="item">
                    <label for="bdate" style="font-weight: 600;">Date of Birth<span>*</span></label>
                    <input id="bdate" type="date" required name="dateofbirth" />
                    <i class="fas fa-calendar-alt"></i>
                </div>
            </div>
            <div class="column">
                <div class="item">
                    <label for="phone" style="font-weight: 600;">Phone<span>*</span></label>
                    <input id="phone" placeholder="Enter 10 digit contact no." type="number" name="phoneno" min="1000000000" max="9999999999" required oninvalid="this.setCustomValidity('please enter 10 digit moblie number')" oninput="setCustomValidity('')" />

                </div>
                <div class="item">
                    <label for="aadharno" style="font-weight: 600;">Aadhar No.<span>*</span></label>
                    <input id="aadharno" placeholder="Enter 12 digit Aadhar no." type="number" name="aadharno" min="100000000000" max="999999999999" required oninvalid="this.setCustomValidity('please enter 12 digit Aadhar.no number')" oninput="setCustomValidity('')" />
                </div>
            </div>



            <div class="item">
                <label for="mailid" style="font-weight: 600;">Mail id<span>*</span></label>
                <input id="mailid" placeholder="eg - xyz@gmail.com" type="email" name="mailid" required check />
            </div>

            <div class="column">
                <div class="item">
                    <label for="fathername" style="font-weight: 600;">Father Name<span>*</span></label>
                    <input id="fathername" type="text" placeholder="Mr." name="fathername" required />
                </div>

                <div class="item">
                    <label for="fatheroccupation" style="font-weight: 600;">Father Occupation<span>*</span></label>
                    <input id="fatheroccupation" type="text" name="fatheroccupation" required />
                </div>
            </div>
            <div class="column">
                <div class="item">
                    <label for="fathercontactno" style="font-weight: 600;">Father Contact No.<span>*</span></label>
                    <input id="fathercontactno" placeholder="Enter 10 digit contact no." class="number" type="number" name="fathercontactno" required min="1000000000" max="9999999999" oninvalid="this.setCustomValidity('please enter 10 digit moblie number')" oninput="setCustomValidity('')" />
                </div>
            </div>

            <div class="column">
                <div class="item">
                    <label for="mothername" style="font-weight: 600;">Mother Name<span>*</span></label>
                    <input id="mothername" type="text" placeholder="Mrs." name="mothername" required />
                </div>
                <div class="item">
                    <label for="motheroccupation" style="font-weight: 600;">Mother Occupation<span>*</span></label>
                    <input id="motheroccupation" type="text" name="motheroccupation" required />
                </div>
                <!-- <div class="item">
                    <label for="fathercontactno">Father Contact No.<span>*</span></label>
                    <input id="fathercontactno" placeholder="Enter 10 digit contact no." class="number" type="number" name="fathercontactno" required min="1000000000" max="9999999999" oninvalid="this.setCustomValidity('please enter 10 digit moblie number')" oninput="setCustomValidity('')" />
                </div> -->
            </div>

            <div class="column">
                <div class="item">
                    <label for="college" style="font-weight: 600;">College<span>*</span></label>
                    <select name="collegename" class="collegebox" id="collegename" onchange="populateProfession('profession','branch','collegename')" required>
                        <option selected value="" disabled selected></option>
                        <option value="SDBCE">Sushila Devi Bansal College of Engineering</option>
                        <option value="SDBCT">Sushila Devi Bansal College of Technology</option>
                    </select>
                </div>
                <div class="item">
                    <label for="course" style="font-weight: 600;">Course<span>*</span></label>
                    <select name="coursename" class="coursebox" id="profession" required onchange="populateProfession('profession','branch','collegename')">
                        <option selected value="" disabled selected></option>
                        <option value="B.TECH">B.TECH</option>
                        <option value="M.TECH/M.E">M.TECH/M.E</option>
                        <option value="MBA">MBA</option>
                    </select>
                </div>
            </div>


            <div class="column">
                <div class="item">
                    <label for="branch" style="font-weight: 600;">Branch<span>*</span></label>
                    <select name="branch" class="branchbox" id="branch" required>

                    </select>
                </div>
                <div class="item">
                    <label for="semester" style="font-weight: 600;">Semester<span>*</span></label>
                    <select name="semester" class="semesterbox" id="semester" required onchange="populateYear(this.id,'year')">
                        <option selected value="" disabled selected></option>
                                           </select>
                    <select name="year" id="year"></select>
                </div>
            </div>

            <div class="column">
                <div class="item">
                    <label for="session" style="font-weight: 600;">Session<span>*</span></label>
                    <select name="session" class="sessionbox" required>
                        <option selected value="" disabled selected></option>
                        <option value="Jan-Jun">Jan - Jun</option>
                        <option value="July-Dec">July - Dec</option>
                    </select>
                </div>

            </div>

            <div class="addressbox">

                <div class="item">
                    <label for="category" style="font-weight: 600;">Category<span>*</span></label>
                    <select name="category" id="category" class="categorybox"  onchange="populateadmisson()" required>
                        <option selected value="" disabled></option>
                        <option value="General">General</option>
                        <option value="OBC">OBC</option>
                        <option value="ST">ST</option>
                        <option value="SC">SC</option>
                    </select>
                </div>

                <div class="item">
                    <label for="admissionunder" style="font-weight: 600;">Admission Under<span>*</span></label>
                    <select name="admissionunder" class="admissionunderbox" id = "admissionunder" required>
                                            </select>
                </div>
                <div class="item">
                    <label for="minority_community" style="font-weight: 600;">Minority Community</label>
                    <select name="minoritycommunity" id="minoritycommunity" class="categorybox">
                        <option selected value="" disabled></option>
                        <option value="Jain">Jain</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Sikh">Sikh</option>
                        <option value="Parsi">Parsi</option>
                        <option value="Christian">Christian</option>
                    </select>
                </div>
            </div>



            <div class="column">
                <div class="question">
                    <label style="font-weight: 600;">Residency</label>
                    <div class="question-answer">

                        <div>
                            <input type="radio" value="Localite" id="radio_6" name="residency" id="localite" onclick="living(0)" onclick="undertaking()" />
                            <label for="radio_6" class="radio"><span>Localite</span></label>
                        </div>

                        <div>
                            <input type="radio" value="Non-Localite" id="radio_7" name="residency" id="Non-Localite" onclick="living(1)" />
                            <label for="radio_7" class="radio"><span>Non-Localite</span></label>
                        </div>
                    </div>
                </div>


                <div class="item">
                    <!-- <p id="living">Living</p> -->
                    <label id="living" style="font-weight: 600;">Living</label>
                    <select name="student_living" id="livingOptions" class="livingbox">
                        <option selected value="" disabled></option>
                        <option value="Hostel">Hostel</option>
                        <option value="House on Rent">House on Rent</option>
                        <option value="With Relatives">With Relatives</option>
                    </select>
                </div>
            </div>

            <div class="permaddress" style="background-color: #d6d6d69a;">
                <label style="font-weight: 600;">Permanent Address</label>
                <div class="item">
                    <label for="locality">Locality<span>*</span></label>
                    <input id="locality" type="text" name="locality" required />
                </div>

                <div class="addressbox">
                    <div class="item">
                        <label for="city" style="font-weight: 600;">City<span>*</span></label>
                        <input id="city" type="text" name="city" required />
                    </div>
                    <div class="item">
                        <label for="state" style="font-weight: 600;">State<span>*</span></label>
                        <!-- <input id="state" type="text" name="state" required /> -->
                        <select name="state" id="state" class="permstate" style="height: 35px; width:100%" required>
                            <option selected value="" disabled></option>
                            <option value="MP">MP</option>
                            <option value="UP">UP</option>
                            <option value="Orrisa">Orrisa</option>
                            <option value="Gujrat">Gujrat</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Andra Pradesh">Andra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Bihar">Bihar</option>                            
<option value="Himanchal Pradesh">Himanchal Pradesh</option>
<option value="Gujarat">Gujarat</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Kerala">Kerala</option>
<option value="Punjab">Punjab</option>
<option value="Odisha">Odisha</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Assam">Assam</option>
<option value="Chattisgarh">Chattisgarh</option>
<option value="Goa">Goa</option>
<option value="Haryana">Haryana</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Tripura">Tripura</option>
<option value="West Bengal">West Bengal</option>
                        </select>
                    </div>
                    <!-- https://www.sololearn.com/compiler-playground/W5WehABH3UV3/ -->
                    <div class="item">
                        <label for="pincode" style="font-weight: 600;">Pincode<span>*</span></label>
                        <input id="pincode" type="number" name="pincode" required />
                    </div>
                </div>
            </div>

            <div class="item">
                <label for="localaddress" id="localaddress-span" style="font-weight: 600;">Local Address</label>
                <input id="localaddress" type="text" placeholder="Enter full local address" name="localaddress" />
            </div>

            <div class="column">
                <div class="item">
                    <label for="guardianname" style="font-weight: 600;">Local Guardian Name<span>*</span></label>
                    <input id="guardianname" type="text" placeholder="Mr." name="guardianname" required />
                </div>
                <div class="item">
                    <label for="gurdiancontactno" style="font-weight: 600;">Local Gurdian Contact No.<span>*</span></label>
                    <input id="gurdiancontactno" type="number" name="guardiancontactno" min="1000000000" max="9999999999" required oninvalid="this.setCustomValidity('please enter 10 digit moblie number')" oninput="setCustomValidity('')" />
                </div>
            </div>


            <div class="item">
                <label style="font-weight: 600;">Academic Details:</label>
            </div>
            <table class="table">
                <tr>
                    <th style="width: 15%;">Education</th>
                    <th>Name of School/ Institute</th>
                    <th>Board/ University</th>
                    <th style="width: 10%;">Year of Passing/ Taking</th>
                    <th style="width: 15%;">Total marks/ Out of</th>
                    <th style="width: 10%;">Medium of instruction Hind/English</th>
                </tr>
                <tr>
                    <th>10th Standard</th>
                    <td><input type="text" placeholder="School Name" name="10thschool" required></td>
                    <td><input type="text" placeholder="eg-CBSE Board, MP Board" name="10thboard" required></td>
                    <td><input type="number" name="10thpassingyear" required></td>
                    <td><input type="number" name="10thmarks_get" style="width: 35px;" required>/<input type="number" name="10thmarks_outof" style="width: 35px;" required></td>
                    <td><select name="10thmedium" id="10thmedium" class="mediumbox" style="height: 33px;" required>
                            <option selected value="" disabled></option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select></td>
                </tr>
                <tr>
                    <th>12th Standard</th>
                    <td><input type="text" placeholder="School Name" name="12thschool" required></td>
                    <td><input type="text" placeholder="eg-CBSE Board, MP Board" name="12thboard" required></td>
                    <td><input type="number" name="12thpassingyear" required></td>
                    <td><input type="number" name="12thmarks_get" style="width: 35px;" required>/<input type="number" name="12thmarks_outof" style="width: 35px;" required></td>
                    <td><select name="12thmedium" id="12medium" class="mediumbox" style="height: 33px;" required>
                            <option selected value="" disabled></option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select></td>
                </tr>
                <tr>
                    <th>Diploma (Br......)</th>
                    <td><input type="text" placeholder="College Name" name="diplomacollege"></td>
                    <td><input type="text" name="diplomauniversity"></td>
                    <td><input type="number" name="diplomapassingyear"></td>
                    <td><input type="number" name="diplomamarks_get" style="width: 35px;">/<input type="number" name="diplomamarks_outof" style="width: 35px;"></td>
                    <td><select name="diplomamedium" id="medium" class="mediumbox" style="height: 33px;">
                            <option selected value="" disabled></option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select></td>
                </tr>
                <tr>
                    <th>Graduation (Mention Degree)</th>
                    <td><input type="text" placeholder="College Name" name="graduationcollege"></td>
                    <td><input type="text" name="graduationuniversity"></td>
                    <td><input type="number" name="graduationpassingyear"></td>
                    <td><input type="number" name="graduationmarks_get" style="width: 35px;">/<input type="number" name="graduationmarks_outof" style="width: 35px;"></td>
                    <td><select name="graduationmedium" id="medium" class="mediumbox" style="height: 33px;">
                            <option selected value="" disabled></option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select></td>
                </tr>
                <tr>
                    <th>Entrance Exam (if any) (JEE/ GATE/ CAT/ Other)</th>
                    <td><input type="text" placeholder="Exam Name" name="entranceexam"></td>
                    <td><input type="text" placeholder="No to fill" readonly></td>
                    <td><input type="number" name="entranceexamyear"></td>
                    <td><input type="number" name="entrancemarks_get" style="width: 35px;">/<input type="number" name="entrancemarks_outof" style="width: 35px;"></td>
                    <td><select name="entranceexammedium" id="medium" class="mediumbox" style="height: 33px;">
                            <option selected value="" disabled></option>
                            <option value="English">English</option>
                            <option value="Hindi">Hindi</option>
                        </select></td>
                </tr>
            </table>



            <div class="term_checkbox">
                <input id="checkbox" type="checkbox" required />
                <!-- <input id="checkbox" type="checkbox" onclick="undertaking(1)" onchange="undertaking_data()" /> -->
                <label for="checkbox">&emsp;I solemnly declare that the information furnished above is true to the best of my knowledge and nothing has been concealed there in. I shall be responsible for any wrong information given., read the undertaking below & accept it.</label>
            </div>



            <div class="btn-block">
                <span>If Already registered. Then</span>
                <a href="loginpage.php" class="btn">Login
                </a>
            </div>
            <div class="btn-block">
                <input type="submit" value="Submit" class="btn" name="submit">
            </div>

        </form>
    </div>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    error_reporting();


    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "student_images/" . $filename;
    move_uploaded_file($tempname, $folder);

    $studentscholar      = $_POST['studentscholar'];
    $studentname         = $_POST['studentname'];
    $dateofbirth         = $_POST['dateofbirth'];
    $phoneno             = $_POST['phoneno'];
    $aadharno            = $_POST['aadharno'];
    $mailid              = $_POST['mailid'];
    $fathername          = $_POST['fathername'];
    $fatheroccupation    = $_POST['fatheroccupation'];
    $fathercontactno     = $_POST['fathercontactno'];
    $mothername          = $_POST['mothername'];
    $motheroccupation    = $_POST['motheroccupation'];
    $collegename         = $_POST['collegename'];
    $coursename          = $_POST['coursename'];
    $branch              = $_POST['branch'];
    $semester            = $_POST['semester'];
    $academicsession     = $_POST['session'];
    $category            = $_POST['category'];
    $admissionunder      = $_POST['admissionunder'];
    $minoritycommunity   = $_POST['minoritycommunity'];
    $residency           = $_POST['residency'];
    $studentliving       = $_POST['student_living'];
    $locality            = $_POST['locality'];
    $city                = $_POST['city'];
    $state               = $_POST['state'];
    $pincode             = $_POST['pincode'];
    $localaddress        = $_POST['localaddress'];
    $guardianname        = $_POST['guardianname'];
    $guardiancontactno   = $_POST['guardiancontactno'];

    $tenthschool       = $_POST['10thschool'];
    $tenthboard        = $_POST['10thboard'];
    $tenthpassingyear  = $_POST['10thpassingyear'];
    $tenthmarks_get    = $_POST['10thmarks_get'];
    $tenthmarks_outof  = $_POST['10thmarks_outof'];
    $tenthmedium       = $_POST['10thmedium'];

    $twelthschool       = $_POST['12thschool'];
    $twelthboard        = $_POST['12thboard'];
    $twelthpassingyear  = $_POST['12thpassingyear'];
    $twelthmarks_get    = $_POST['12thmarks_get'];
    $twelthmarks_outof  = $_POST['12thmarks_outof'];
    $twelthmedium       = $_POST['12thmedium'];

    $diplomacollege       = $_POST['diplomacollege'];
    $diplomauniversity    = $_POST['diplomauniversity'];
    $diplomapassingyear   = $_POST['diplomapassingyear'];
    $diplomamarks_get     = $_POST['diplomamarks_get'];
    $diplomamarks_outof   = $_POST['diplomamarks_outof'];
    $diplomamedium        = $_POST['diplomamedium'];

    $graduationcollege       = $_POST['graduationcollege'];
    $graduationuniversity    = $_POST['graduationuniversity'];
    $graduationpassingyear   = $_POST['graduationpassingyear'];
    $graduationmarks_get     = $_POST['graduationmarks_get'];
    $graduationmarks_outof   = $_POST['graduationmarks_outof'];
    $graduationmedium        = $_POST['graduationmedium'];

    $entranceexam          = $_POST['entranceexam'];
    $entranceexamyear      = $_POST['entranceexamyear'];
    $entrancemarks_get     = $_POST['entrancemarks_get'];
    $entrancemarks_outof   = $_POST['entrancemarks_outof'];
    $entranceexammedium    = $_POST['entranceexammedium'];


    $querry1 = "SELECT * FROM student_info WHERE ScholarNo = '$studentscholar'";
    $semdata1 = mysqli_query($conn, $querry1);
    $total1 = mysqli_num_rows($semdata1);


    //echo $total;
    if ($total1 == 1) {
        echo '<script>alert("Data Already Present in database")</script>';
?>
        <meta http-equiv="refresh" content="1; url = loginpage.php" />
    <?php
    } elseif ($total1 == 0) {

        $table1 = "INSERT INTO `student_info`(`StudImage`, `ScholarNo`, `StudentName`, `DateOfBirth`, `ContactNo`, `AadharNo`, `Mailid`, `FatherName`, `FatherOccupation`, `FatherContactNo`, `MotherName`, `MotherOccupation`, `CollegeName`, `CourseName`, `Branch`, `Semester`, `AcademicSession`, `Category`, `AdmissionUnder`, `MinorityCommunity`, `Residency`, `Living`, `Locality`, `City`, `HomeState`, `Pincode`, `LocalAddress`, `GuardianName`, `GuardianContactNo`, `10thSchooling`, `10thBoard`, `10thPassingYear`, `10thMarks`, `10thStudyMedium`, `12thSchooling`, `12thBoard`, `12thPassingYear`, `12thMarks`, `12thStudyMedium`, `DiplomaCollege`, `DiplomaUniversity`, `DiplomaPassingYr`, `DiplomaMarks`, `DiplomaStudyMedium`, `GraduationCollege`, `GraduationUniversity`, `GraduationPassingYr`, `GraduationMarks`, `GraduationStudyMedium`, `EntranceExamName`, `EntranceExamyear`, `EntrancEmarks`, `EntranceExamMedium`) VALUES ('$filename', upper('$studentscholar'), upper('$studentname'), '$dateofbirth', '$phoneno', '$aadharno', upper('$mailid'), upper('$fathername'), upper('$fatheroccupation'), '$fathercontactno', upper('$mothername'), upper('$motheroccupation'), upper('$collegename'), upper('$coursename'), upper('$branch'), upper('$semester'), upper('$academicsession'), upper('$category'), upper('$admissionunder'), upper('$minoritycommunity'), upper('$residency'), upper('$studentliving'), upper('$locality'), upper('$city'), upper('$state'), '$pincode', upper('$localaddress'), upper('$guardianname'), '$guardiancontactno', upper('$tenthschool'), upper('$tenthboard'), '$tenthpassingyear', '$tenthmarks_get/$tenthmarks_outof', upper('$tenthmedium'), upper('$twelthschool'), upper('$twelthboard'), '$twelthpassingyear', '$twelthmarks_get/$twelthmarks_outof', upper('$twelthmedium'), upper('$diplomacollege'), upper('$diplomauniversity'), '$diplomapassingyear', '$diplomamarks_get/$diplomamarks_outof', upper('$diplomamedium'), upper('$graduationcollege'), upper('$graduationuniversity'), '$graduationpassingyear', '$graduationmarks_get/$graduationmarks_outof', upper('$graduationmedium'), upper('$entranceexam'), '$entranceexamyear', '$entrancemarks_get/$entrancemarks_outof', upper('$entranceexammedium'))";

        $data1 = mysqli_query($conn, $table1);

        echo '<script>alert("Record Submition Successful")</script>';
    ?>
        <meta http-equiv="refresh" content="1; url = loginpage.php" />
<?php
    } else {
        echo '<script>alert("Submition Failed")</script>';
    }
}

?>