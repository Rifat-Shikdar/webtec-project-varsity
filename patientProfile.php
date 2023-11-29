
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Hospital Management System </h1>
<a href="">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Index</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="">Contact Us</a><br>
    <?php
    session_start();

    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();}

    echo "Successful !!!", '<br>';
    echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : "N/A";

    echo "<hr>"; ?>

    <table>
        <header>
            <h2>Welcome to Patient Profile</h2>
            <?php 
            echo "Hello !!!" ,'&nbsp;&nbsp;';
            echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : "N/A"; ?><br><hr>

           <p>For View Account &nbsp;&nbsp;<button> <a href="viewAccount.php">View Account</a></button></p>
            <p> For Change your Password &nbsp;&nbsp;&nbsp;&nbsp;<button><a href="changePassword.php">Change Password</a></button>
            </p>
            <p>Update your Information &nbsp;<button><a href="accountUpdate.php">Modify You Information</a></button><br></p>
            <hr>
            <p>Test Reports &nbsp;<button><a href="report.php">Reports</a></button><br></p>
            <button><a href="logOut.php">Logout</a></button>
        </header>
        <main>

        </main>
        <footer>

        </footer>
    </table>



    

</body>
<hr>
<footer>
    <h5>Hospital Management System</h5>
    <p>@copy right reserved</p>
</footer>

</html>