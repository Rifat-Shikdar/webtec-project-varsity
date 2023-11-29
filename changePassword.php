<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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

    <form action="validationChangePassword.php" method= "post" novalidate>
    
    <h2>Change Password</h2>
    <fieldset>
        <legend>Change Password</legend>
        <table>
            <tr>
                <td>

                <b> Email:</b> <input type="email" placeholder="Enter your email" name="email" id="email"
                  value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>">
                <?php echo isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : "" ?>
                <br><br>

               
                <b>Old Password:</b> <input type="password" placeholder="Enter old password" name="oldPassword" id="oldPassword"
                  value="<?php echo isset($_SESSION['oldPassword']) ? $_SESSION['oldPassword'] : "" ?>">
                <?php echo isset($_SESSION['oldPasswordErr']) ? $_SESSION['oldPasswordErr'] : "" ?>
                <br><br>

                <b>Password:</b> <input type="password" placeholder="Enter new password" name="password" id="password"
                  value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : "" ?>">
                <?php echo isset($_SESSION['passwordErr']) ? $_SESSION['passwordErr'] : "" ?>
                <br><br>

                <b> Confirm Password:</b> <input type="password" placeholder="Confirm Password " name="confirmPassword" id="confirmPassword"
                  value="<?php echo isset($_SESSION['confirmPassword']) ? $_SESSION['confirmPassword'] : "" ?>">
                <?php echo isset($_SESSION['confirmPasswordErr']) ? $_SESSION['confirmPasswordErr'] : "" ?>
                <br><br>

            

            
                </td>
            </tr>
        </table>
    </fieldset><br>
    <input type="submit" name = "submit" id = "submit" value = "Done"><br><br>
    <button><a href="patientProfile.php">Go back</a></button>
</form>

</body>
<hr>
<footer>
    <h5>Hospital Management System</h5>
    <p>@copy right reserved</p>
</footer>
</html>