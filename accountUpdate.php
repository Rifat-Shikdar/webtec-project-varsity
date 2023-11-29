<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
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
    <form action="accountUpdateValidation.php" method="post" novalidate>
        <table>

            <td>
                <h1>Update Account Information</h1>
                <fieldset>
                    <legend><b> &nbsp; Update Account Form</b></legend><br><br>

                    <table>
                        <tr>
                            <td>
                                <img src="" alt="">

                                <b>Id :</b> <input type="number"  name="id" 
                                    value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : "" ?>">
                                <?php echo isset($_SESSION['idErr']) ? $_SESSION['idErr'] : "" ?>
                                <br><br>

                                <b>First Name:</b> <input type="text" placeholder="Enter your first name" name="firstName"
                                    value="<?php echo isset($_SESSION['firstName']) ? $_SESSION['firstName'] : "" ?>">
                                <?php echo isset($_SESSION['firstNameErr']) ? $_SESSION['firstNameErr'] : "" ?>
                                <br><br>

                                <b>Last Name:</b> <input type="text" placeholder="Enter your last name" name="lastName"
                                    value="<?php echo isset($_SESSION['lastName']) ? $_SESSION['lastName'] : "" ?>">
                                <?php echo isset($_SESSION['lastNameErr']) ? $_SESSION['lastNameErr'] : "" ?>
                                <br><br>


                                <b> Date of Birth :</b> <input type="date" name="dob" id="dob"
                                    value="<?php echo isset($_SESSION['dob']) ? $_SESSION['dob'] : "" ?>">
                                <?php echo isset($_SESSION['dobErr']) ? $_SESSION['dobErr'] : "" ?>
                                <br><br>





                                <b> Email:</b> <input type="email" placeholder="Enter your email here" name="email" id="email"
                                    value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>">
                                <?php echo isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : "" ?>
                                <br><br>


                                <b> Phone Number: </b><input type="tel" name="phoneNumber" id="phoneNumber"
                                    value="<?php echo isset($_SESSION['phoneNumber']) ? $_SESSION['phoneNumber'] : "" ?>">
                                <?php echo isset($_SESSION['phoneNumberErr']) ? $_SESSION['phoneNumberErr'] : "" ?>
                                <br><br>


                                <b> Gender:</b>
                                <input type="radio" id="Male" name="gender" value="Male">
                                <label for="Male">Male</label>

                                <input type="radio" id="Female" name="gender" value="Female">
                                <label for="Female">Female</label><br>

                                <?php echo isset($_SESSION['genderErr']) ? $_SESSION['genderErr'] : "" ?>
                                <br><br>

                                <b>Blood Group :</b><label for="bloodGroup"></label>
                                <select name="bloodGroup" id="bloodGroup" aria-placeholder="bloodGroup">
                                    <option value="">Select Your Option</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                <?php echo isset($_SESSION['bloodGroupErr']) ? $_SESSION['bloodGroupErr'] : "" ?>
                                <br><br>


                                <b> Security Question:</b> <input type="text" name="securityQuestion"
                                    id="securityQuestion" placeholder="What is you favourite food"
                                    value="<?php echo isset($_SESSION['securityQuestion']) ? $_SESSION['securityQuestion'] : "" ?>">
                                <?php echo isset($_SESSION['securityQuestionErr']) ? $_SESSION['securityQuestionErr'] : "" ?>
                                <br><br>


                            </td>
                        </tr>
                    </table>
                </fieldset>



                <br>
               <input type="submit" name="submit" id="submit" value="Submit"><br><br>
                <button><a href="patientProfile.php"> Back</a></button>
               
</body>
<hr>
<footer>
    <h5>Hospital Management System</h5>
    <p>@copy right reserved</p>
</footer>

</html>