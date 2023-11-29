<?php
session_start();
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Test Report</title>
</head>

<body>
<?php

    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();}

   ?>
<h1>Hospital Management System </h1>
<a href="">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Index</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Contact Us</a><br>

    <table>
        <thead>
            <tr>
                <h1>View Test Report</h1>
                <hr>
            </tr>
        </thead>
        <tbody>


            <?php


            function sanitize($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            $email = sanitize($_SESSION['email']);

            $con = Connection();
            $sql = "Select email, testName, testDate,medicalHistory from testreport Where email ='$email'";
            $status = mysqli_query($con, $sql);


            if ($status) {
                while ($row = mysqli_fetch_assoc($status)) {

                    echo '
        <tr>
        <td>
                email      : <b>' . $row['email'] . ' </b><br><br>
                testName    :<b>' . $row['testName'] . '</b><br><br>
                testDate    :<b>' . $row['testDate'] . '</b><br><br>
                medicalHistory :<b>' . $row['medicalHistory'] . '</b><br><br>
            
      
    </tr>';
                }
            }



            ?>

        </tbody>
    </table>
    <hr>
    <!-- <button><a href="accountUpdate.php">Modify You Information</a></button><br> -->
    <br><button><a href="report.php">Back</a></button>
    <button><a href="deleteTest.php">Delete</a></button>
    <button><a href="patientProfile.php">Home</a></button><br>


</body>
<hr>
<footer>
    <h5>Hospital Management System</h5>
    <p>@copy right reserved</p>
</footer>
</html>