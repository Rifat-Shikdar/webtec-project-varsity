<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
<?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();}

   ?>
<h1>Hospital Management System </h1>
<a href="">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Index</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Contact Us</a><br>
    <hr><br>
    <h1>Reports</h1><br>
    <hr><br>
    <a href="testReport.php">Test Reports</a><br><br><hr>
    <a href="viewTestReport.php">View Test Reports</a><br><br>
    <a href="viewTestReportAllinfo.php">View Test Reports All Info</a><br><br>
    <!-- <a href="updateTestReport.php">Update Test Report</a><br><br> -->
    <a href="patientProfile.php">Home</a><br>
</body>
<hr>
<footer>
    <h5>Hospital Management System</h5>
    <p>@copy right reserved</p>
</footer>
</html>