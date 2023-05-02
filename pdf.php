<?php include("connection.php") ?>
<?php
session_start();
echo "Welcome " . $_SESSION['user_name'];
$userprofile = $_SESSION['user_name'];

if ($userprofile == true) {
} else {
?>
    <meta http-equiv="refresh" content="0; url = loginpage.php" />
<?php
}
?>
<html>

<head>
    <title>Print Page</title>
    <link rel="stylesheet" type="text/css" href="pdfpage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common.min.css" />
    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/jszip.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>

</head>

<body>
    <div class="btn-block1">
        <a href="logout.php"><input type="btn" value="Log Out" class="btn1" name="logout"></a>
    </div>
    <!--  -->

    <?php
    $querry3 = "SELECT * FROM student_info WHERE Mailid = '$userprofile'";
    $data3 = mysqli_query($conn, $querry3);

    if (mysqli_num_rows($data3) > 0) {
        foreach ($data3 as $row) {
    ?>
            <div class="pdf-page size-a4">
                <page size="A4">
                    <div class="banner">
                        <img src="logo.jpeg" height="210px" width="780px" margin-top="auto" margin-right="auto" justify-content="center" align-items="center" display="flex" background-size="cover" alt="Your Image">
                    </div>
                    <h4 align='center'>Umaria, A.B. Road, Rau, INDORE-453 331 (M.P.)</h4>
                    <div class="academic">
                        Date of Registration: <input type="text" size=8 value=<?php echo $row['RegDate']; ?>>
                    </div>
                    <h2 align='center'>Registration Form</h2>

                    <img src="student_images/<?php echo $row['StudImage']; ?>" width="100px" height="100px" align="right">
                    <ul class="cards" type="1">
                        <li>Application for Registration for the Academic Session: <input type="text" size=5 readonly="true" value=<?php echo $row['AcademicSession']; ?>> </li>

                        <li>Course: <input type="text" size=7 readonly="true" value=<?php echo $row['CourseName']; ?>>
                            Branch: <input type=text size="52" readonly="true" value="<?php echo $row['Branch']; ?>"></li>

                        <li>Semester: <input type="text" size="14" readonly="true" value="<?php echo $row['Semester']; ?>"> Commencing w.e.f.<input type="text" readonly="true"></li>

                        <li>Scholar No.: <input type="text" readonly="true" value=<?php echo $row['ScholarNo']; ?>></li>
                    </ul>
                    <div class="academic">
                        <h3>Personal Particulars:</h3>
                    </div>
                    <ul class="cards" type="1">
                        <li>Name: <input type="text" readonly="true" value="<?php echo $row['StudentName']; ?>"> Date of Birth: <input type="text" size="10" readonly="true" value=<?php echo $row['DateOfBirth']; ?>></li>Contact No. <input type="text" size="12" readonly="true" value="<?php echo $row['ContactNo']; ?>">Mail: <input type="text" size=35 readonly="true" value=<?php echo $row['Mailid']; ?>>
                        <li>Aadhar No. <input type="text" readonly="true" value=<?php echo $row['AadharNo']; ?>></li>



                        <li>Father Name: <input type="text" readonly="true" size="30" value="<?php echo $row['FatherName']; ?>">Father Occupation: <input type="text" readonly="true" value="<?php echo $row['FatherOccupation']; ?>"></li>
                        Father Contact No. <input type="text" readonly="true" size="10" value="<?php echo $row['FatherContactNo']; ?>">

                        <li>Mother Name: <input type="text" readonly="true" value="<?php echo $row['MotherName']; ?>"> Mother Occupation: <input type="text" readonly="true" value="<?php echo $row['MotherOccupation']; ?>"></li>

                        <li>Permanent Address: Locality: <input type="text" size="55" readonly="true" value="<?php echo $row['Locality']; ?>"></li>
                        City <input type="text" readonly="true" size="12" value="<?php echo $row['City']; ?>"> State: <input type="text" readonly="true" size="12" value="<?php echo $row['HomeState']; ?>"> Pincode <input type="text" readonly="true" size="12" value="<?php echo $row['Pincode']; ?>">

                        <li>Not Localite students only: State the living: <input type="text" readonly="true" value="<?php echo $row['Living']; ?>"></li>
                        Local Address: <input type="text" readonly="true" value="<?php echo $row['LocalAddress']; ?>">

                        <li>Guardian Name: <input type="text" readonly="true" value="<?php echo $row['GuardianName']; ?>"> Guardian Contact No. <input type="text" readonly="true" size="10" value="<?php echo $row['GuardianContactNo']; ?>"></li>

                        <li>Category: <input type="text" readonly="true" size="10" value=<?php echo $row['Category']; ?>> Admission Under: <input type="text" size="6" readonly="true" value="<?php echo $row['AdmissionUnder']; ?>"> Minority Community: <input type="text" readonly="true" size="8" value=<?php echo $row['MinorityCommunity']; ?>></li>
                        
                    </ul>

                    <div class="academic">
                        <!-- <label style="font-weight: 600;">Academic Details:</label> -->
                        <h3>Academic Details:</h3>
                    </div>
                    <table class="table">
                        <tr>
                            <th style="width: 12%;">Education</th>
                            <th style="width: 10%;">Name of School/ Institute</th>
                            <th style="width: 10%;">Board/ University</th>
                            <th style="width: 8%;">Year of Passing/ Taking</th>
                            <th style="width: 8%;">Total marks/ Out of</th>
                            <th style="width: 5%;">Medium of instruction Hind/ English</th>
                        </tr>
                        <tr>
                            <th>10th Standard</th>
                            <td><input type="text" style="width: 190px;" name="10thschool" value="<?php echo $row['10thSchooling']; ?>" readonly></td>
                            <td><input type="text" style="width: 160px;" name="10thboard" value="<?php echo $row['10thBoard']; ?>" readonly></td>
                            <td><input type="number" style="width: 70px;" value="<?php echo $row['10thPassingYear']; ?>" name="10thpassingyear" readonly></td>
                            <td><input type="text" name="10thmarks_get" value="<?php echo $row['10thMarks']; ?>" style="width: 55px;" readonly>
                            <td><input type="text" name="10thmedium" value="<?php echo $row['10thStudyMedium']; ?>" style="width: 70px;" readonly></td>
                            </td>
                        </tr>
                        <tr>
                            <th>12th Standard</th>
                            <td><input type="text" style="width: 190px;" value="<?php echo $row['12thSchooling']; ?>" name="12thschool" readonly></td>
                            <td><input type="text" style="width: 160px;" value="<?php echo $row['12thBoard']; ?>" name="12thboard" readonly></td>
                            <td><input type="number" style="width: 70px;" value="<?php echo $row['12thPassingYear']; ?>" name="12thpassingyear"></td>
                            <td><input type="text" style="width: 55px;" value="<?php echo $row["12thMarks"]; ?>" name="12thmarks_get" readonly>
                            <td><input type="text" name="12thmedium" style="width: 70px;" value="<?php echo $row['12thStudyMedium']; ?>" readonly></td>
                        </tr>
                        <tr>
                            <th>Diploma (Br......)</th>
                            <td><input type="text" style="width: 190px;" name="diplomacollege" value="<?php echo $row['DiplomaCollege']; ?>" readonly></td>
                            <td><input type="text" style="width: 160px;" name="diplomauniversity" value="<?php echo $row['DiplomaUniversity']; ?>" readonly></td>
                            <td><input type="number" style="width: 70px;" name="diplomapassingyear" value="<?php echo $row['DiplomaPassingYr']; ?>" readonly></td>
                            <td><input type="text" name="diplomamarks_get" style="width: 55px;" value="<?php echo $row['DiplomaMarks']; ?>" readonly>
                            <td><input type="text" name="diplomamedium" style="width: 70px;" value="<?php echo $row['DiplomaStudyMedium']; ?>" readonly></td>
                        </tr>
                        <tr>
                            <th>Graduation (Mention Degree)</th>
                            <td><input type="text" style="width: 190px;" name="graduationcollege" value="<?php echo $row['GraduationCollege']; ?>" readonly></td>
                            <td><input type="text" style="width: 160px;" name="graduationuniversity" value="<?php echo $row['GraduationUniversity']; ?>" readonly></td>
                            <td><input type="number" style="width: 70px;" name="graduationpassingyear" value="<?php echo $row['GraduationPassingYr']; ?>" readonly></td>
                            <td><input type="text" name="graduationmarks_get" style="width: 55px;" value="<?php echo $row["GraduationMarks"]; ?>" readonly>
                            <td><input type="text" name="graduationmedium" style="width: 70px;" value="<?php echo $row['GraduationStudyMedium']; ?>" readonly></td>

                        </tr>
                        <tr>
                            <th>Entrance Exam (if any) (JEE/ GATE/ CAT/ Other)</th>
                            <td><input type="text" style="width: 190px;" name="entranceexam" value="<?php echo $row['EntranceExamName']; ?>" readonly></td>
                            <td><input type="text" style="width: 160px;" readonly></td>
                            <td><input type="number" style="width: 70px;" name="entranceexamyear" value="<?php echo $row['EntranceExamyear']; ?>" readonly></td>
                            <td><input type="number" name="entrancemarks_get" style="width: 55px;" value="<?php echo $row['EntrancEmarks']; ?>" readonly>
                            <td><input type="text" name="entranceexammedium" style="width: 70px;" value="<?php echo $row['EntranceExamMedium']; ?>" readonly></td>
                        </tr>
                    </table>
                    <div class="undertaking">
                        <label for="undertaking_text">I solemnly declare that the information furnished above is true to the best of my knowledge and nothing has been concealed there in. I shall be responsible for any wrong information given.</label>
                    </div>


                    <div class="column1">
                        <div class="item1">
                            <label>Signature of the student:</label>

                        </div>
                        <div class="item1">
                            <label>Signature of Parents:</label>
                        </div>
                    </div>

                </page>
            </div>
            <div class="btn-block">
                <button id="pdf-generate" class="btn">Download</button>
            </div>
    <?php
        }
    } else {
        echo "No record found.";
    }
    ?>

    <!-- <div class="btn-block">
        <button id="pdf-generate" class="btn">Download</button>
    </div> -->
    <style>
        .pdf-page {
            font-family: "DejaVu Sans", "Arial", sans-serif;
        }
    </style>

    <script>
        kendo.pdf.defineFont({
            "DejaVu Sans": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans.ttf",
            "DejaVu Sans|Bold": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Bold.ttf",
            "DejaVu Sans|Bold|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf",
            "DejaVu Sans|Italic": "https://kendo.cdn.telerik.com/2016.2.607/styles/fonts/DejaVu/DejaVuSans-Oblique.ttf"
        });
    </script>


    <script>
        function getPDF(selector) {
            kendo.drawing.drawDOM($(selector)).then(function(group) {
                kendo.drawing.pdf.saveAs(group, 'testing.pdf');
            });
        }
    </script>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        page[size="A4"] {
            width: 790px;
            height: 1000px;
        }

        page {
            background: white;
            display: block;
            margin: 0 auto;
        }

        .banner {
            margin-left: 10px;
            margin-right: auto;
            margin-top: 10px;
            background-size: contain;
        }

        .column1 {
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
            margin-top: 60px;
            margin-bottom: 30px;
        }

        .column1 .item1 {
            width: 45%;
            text-align: center;
            margin-bottom: 20px;
        }

        .item1 {
            margin-bottom: 30px;
        }

        input,
        select,
        textarea {
            border: 0.8px solid rgb(207, 207, 207, 0.762);
            /* border-radius: 3px; */
        }


        .undertaking {
            margin-top: 30px;
            margin-left: 12px;
            margin-right: 12px;

        }

        .academic {
            margin-left: 10px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin-left: 10px;
            /* margin-right: 20px; */
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 6px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }


        .btn-block {
            margin-top: 400px;
            text-align: center;
            margin-bottom: 40px;
        }

        .btn-block .btn {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #f19307c5;
            font-size: 16px;
            color: #fff;
            cursor: pointer;

        }
.btn-block .btn:hover {
            background: #000362b7;
        }

        .btn-block1 {
            margin-top: 5px;
            text-align: left;

        }

        .btn-block1 .btn1 {
            width: 105px;
            height: 30px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #f19307c5;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            text-align: center;
        }

        .btn-block1 .btn1:hover {
            background: #000362b7;
        }
    </style>

    </div>

    <script type="text/javascript">
        $('#pdf-generate').click(function() {
            getPDF('.pdf-page');
        })
    </script>
</body>

</html>