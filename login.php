<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1,
        .nav_head {
            color: #333;
            text-align: center;
        }

        nav {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: none;
        }

        legend {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        button {
            background-color: #333;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #555;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<body>


    <h1>Hospital Management System </h1>
   <div class="nav_head">
   <a href="">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Index</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Contact Us</a><br>
   </div>
    <form action="loginValidation.php" method="post" novalidate >
        <hr><hr>
        <?php echo isset($_SESSION['successMessage']) ? $_SESSION['successMessage'] : ""; ?>

            <br><hr>
        <fieldset>
            <legend>Log In</legend>
            <table>
                <tr>
                    <td>

                    <b> Email:</b> <input type="email" name="email" id="email"
                  value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>">
                <?php echo isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : "" ?>
                <br><br>

                <b>Password:</b> <input type="password" name="password" id="password"
                  value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : "" ?>">
                <?php echo isset($_SESSION['passwordErr']) ? $_SESSION['passwordErr'] : "" ?>
                <br><br>

                <label for="rememberMe">
                <input type="checkbox" name="rememberMe" id="rememberMe"
                    value="checked" />
                Remember Me
            </label>
                    </td>
                </tr>
            </table>
        </fieldset><br>
        <input type="submit" name="submit" id="submit" value="Log in">&nbsp;&nbsp;<br><br>
        <a href="forgetPassword.php"> Forget Password ?</a><br><br>
        <p>Do not have any Account ?</p>
        <p> For Sign up &nbsp;&nbsp;<button><a href="registration.php">Registration</a></button></p>
        

    </form>

</body>
<hr>
<footer>
    <h5>Hospital Management System</h5>
    <p>@copy right reserved</p>
</footer>

</html>