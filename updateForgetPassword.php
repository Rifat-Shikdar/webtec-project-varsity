<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
</head>
<body>
<h1>Hospital Management System </h1>
<a href="">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Index</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Contact Us</a><br>
    <form action="updateForgetPasswordValidation.php" method= "post" novalidate>

    <fieldset>
        <legend>Forget Password</legend>
        <table>
            <tr>
                <td>
               
                <b> Email:</b> <input type="email" name="email" id="email"
                  value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>">
                <?php echo isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : "" ?>
                <br><br>

                <b>New Password:</b> <input type="password" name="newPassword" id="newPassword"
                  value="<?php echo isset($_SESSION['newPassword']) ? $_SESSION['newPassword'] : "" ?>">
                <?php echo isset($_SESSION['newPasswordErr']) ? $_SESSION['newPasswordErr'] : "" ?>
                <br><br>

                <b> Confirm New Password:</b> <input type="password" name="confirmNewPassword" id="confirmNewPassword"
                  value="<?php echo isset($_SESSION['confirmNewPassword']) ? $_SESSION['confirmNewPassword'] : "" ?>">
                <?php echo isset($_SESSION['confirmNewPasswordErr']) ? $_SESSION['confirmNewPasswordErr'] : "" ?>
                <br><br>

            

            
                </td>
            </tr>
        </table>
    </fieldset><br>
    <input type="submit" name = "submit" id = "submit" value = "Done"><br><br>
    <button><a href="login.php">Go back</a></button>
</form>

</body>
<hr>
<footer>
    <h5>Hospital Management System</h5>
    <p>@copy right reserved</p>
</footer>
</html>