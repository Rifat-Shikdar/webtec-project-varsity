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
    <form action="forgetPasswordValidation.php" method= "post" novalidate>

    <fieldset>
        <legend>Forget Password</legend>
        <table>
            <tr>
                <td>
               
                <b> Email:</b> <input type="email" placeholder="Enter your email here" name="email" id="email"
                  value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>">
                <?php echo isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : "" ?>
                <br><br>

                <b> Security Question:</b> <input type="text" name="securityQuestion" id="securityQuestion" placeholder="What is you favourite food"
                  value="<?php echo isset($_SESSION['securityQuestion']) ? $_SESSION['securityQuestion'] : "" ?>">
                <?php echo isset($_SESSION['securityQuestionErr']) ? $_SESSION['securityQuestionErr'] : "" ?>
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