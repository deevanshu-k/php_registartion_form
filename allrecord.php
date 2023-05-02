<?php include("connection.php") ?>

<?php
session_start();
$userprofile = $_SESSION['user_name'];
if ($userprofile == true) {
} else {
?>
    <meta http-equiv="refresh" content="0; url = loginpage.php" />
<?php
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="logincss/main.css">
    <style>
        h2 {
            font-family: Poppins-Bold;
            /* justify-content: center; */
            align-items: center;
            text-align: center;
            color: #fff;
        }

        body {
            width: 100%;
            min-height: 100%;
            min-height: 100vh;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            /* justify-content: center; */
            /* align-items: center; */
            padding: 15px;
            background-size: cover;
        }

        .btn-block1 {
            margin-top: 5px;
            text-align: center;
            justify-content: center;
            display: flex;

        }

        .btn-block1 .btn {
            width: 110px;
            padding: 4px;
            border: none;
            border-radius: 5px;
            background: #007be0cc;
            font-size: 16px;
            text-align: center;
            color: #fff;
            cursor: pointer;
        }

        .btn-block1 .btn:hover {
            background: #000362b7;
        }
        .btn-block2 {
            margin-top: 20px;
            text-align: center;
            justify-content: right;
            display: flex;

        }

        .btn-block2 .btn {
            width: 110px;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background: #007be0cc;
            font-size: 16px;
            text-align: center;
            color: #fff;
            cursor: pointer;
        }

        .btn-block2 .btn:hover {
            background: #000362b7;
        }
        .btn-block3 {
            margin-top: 20px;
            text-align: center;
            justify-content: center;
            display: flex;

        }

        .btn-block3 .btn {
            width: 110px;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background: #007be0cc;
            font-size: 16px;
            text-align: center;
            color: #fff;
            cursor: pointer;
        }

        .btn-block3 .btn:hover {
            background: #000362b7;
        }
        .mt-5 {
            border-radius: 20px;
        }

        .card-header {
            margin-bottom: 4px;
            margin-top: 6px;
            border-bottom: 10px solid rgba(0, 0, 0, .125);
        }

        .student_table {
            border: 2px grey;
            background-color: #fff;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-spacing: 50px;
            margin-top: 30px;
        }

        th,
        td {
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 5px;
            padding-right: 5px;
            border: 1px solid #dddddd;
        }

        th {
            text-align: center;
        }
    </style>
</head>

<body style="background-image: url('images/bg-01.jpg');">

    <div class="container">

        <div class="row justify-content-center">

            <h2>Welcome to Admin Panel - <?php echo $_SESSION['user_name']; ?></h2>
            <div class="btn-block1">
                <a href="logout.php"><input type="btn" value="Log Out" class="btn" name="logout"></a>
            </div>

            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Enter the Scholar to Fetch Data</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="stud_id" value="<?php if (isset($_GET['stud_id'])) {
                                                                                    echo $_GET['stud_id'];
                                                                                } ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>
                        <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "firstyearinfo");

                                if (isset($_GET['stud_id'])) {
                                    $stud_id = $_GET['stud_id'];

                                    $query = "SELECT * FROM student_info WHERE ScholarNo='$stud_id' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $row) {
                                ?>
                                            <img src="student_images/<?php echo $row['StudImage']; ?>" width="100px" height="100px" align="center">
                                            <div class="form-group mb-3">
                                                <label for="">Date Of Registration</label>
                                                <input type="text" value="<?= $row['RegDate']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Student Name</label>
                                                <input type="text" value="<?= $row['StudentName']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Scholar No</label>
                                                <input type="text" value="<?= $row['ScholarNo']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Date of Birth</label>
                                                <input type="text" value="<?= $row['DateOfBirth']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Contact No</label>
                                                <input type="text" value="<?= $row['ContactNo']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Aadhar No</label>
                                                <input type="text" value="<?= $row['AadharNo']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Mail Id</label>
                                                <input type="text" value="<?= $row['Mailid']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Father Name</label>
                                                <input type="text" value="<?= $row['FatherName']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">FatherOccupation</label>
                                                <input type="text" value="<?= $row['FatherOccupation']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Father Contact No</label>
                                                <input type="text" value="<?= $row['FatherContactNo']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Mother Name</label>
                                                <input type="text" value="<?= $row['MotherName']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Mother Occupation</label>
                                                <input type="text" value="<?= $row['MotherOccupation']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">College Name</label>
                                                <input type="text" value="<?= $row['CollegeName']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Branch Name</label>
                                                <input type="text" value="<?= $row['Branch']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Semester</label>
                                                <input type="text" value="<?= $row['Semester']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Academic Session</label>
                                                <input type="text" value="<?= $row['AcademicSession']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Category</label>
                                                <input type="text" value="<?= $row['Category']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Admission Under</label>
                                                <input type="text" value="<?= $row['AdmissionUnder']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Minority Community</label>
                                                <input type="text" value="<?= $row['MinorityCommunity']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Residency</label>
                                                <input type="text" value="<?= $row['Residency']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Living</label>
                                                <input type="text" value="<?= $row['Living']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Locality</label>
                                                <input type="text" value="<?= $row['Locality']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">City</label>
                                                <input type="text" value="<?= $row['City']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">State</label>
                                                <input type="text" value="<?= $row['HomeState']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Pincode</label>
                                                <input type="text" value="<?= $row['Pincode']; ?>" class="form-control">
                                            </div>
                                <?php
                                        }
                                    } else {
                                        echo "No Record Found";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-block2">
                    <a href="export.php"><button type="button" class="btn">Export All</button></a>
                </div>
                <!-- <div class="btn-block3">
                <input type="submit" value="Update" class="btn" name="submit">    
                <a href=""><button type="button" class="btn">Update</button></a>
                </div> -->
            </div>

        </div>

    </div>
    </form>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php

if (isset($_POST['submit'])) {
    error_reporting();

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

    
    $updatequerry = "UPDATE `student_info` SET `ScholarNo`='studentscholar',`StudentName`='studentname',`DateOfBirth`='dateofbirth',`ContactNo`='phoneno',`AadharNo`='aadharno',`Mailid`='mailid',`FatherName`='fathername',`FatherOccupation`='fatheroccupation',`FatherContactNo`='fathercontactno',`MotherName`='mothername',`MotherOccupation`='motheroccupation',`CollegeName`='collegename',`CourseName`='coursename',`Branch`='branch',`Semester`='semester',`AcademicSession`='session',`Category`='category',`AdmissionUnder`='admissionunder',`MinorityCommunity`='minoritycommunity',`Residency`='residency',`Living`='student_living',`Locality`='locality',`City`='city',`HomeState`='state',`Pincode`='pincode' WHERE ScholarNo='$stud_id'";

    $query_run = mysqli_query($con, $updatequerry);

    if($query_run)
    {
        echo "Record Updated Into Database";
    }
    else
    {
        echo "Updation Failed";
    }
}
?>