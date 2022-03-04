<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="POST" action = "loginpage.php">
        <table align="center">
            <tr>
                <th><h2>Application Form</h2></th>
            </tr>
            <tr>
                <th><label>First Name :</label></th>
                <td><input type = "text" name = "Uname">
            </tr>
            <tr>
                <th><label>Last Name :</label></th>
                <td><input type = "text" name = "Lname">
            </tr>
            <tr>
                <th><label>Mail id :</label></th>
                <td><input type = "text" name = "Mail">
            </tr>
            <tr>
                <th><label>Address :</label></th>
                <td><input type = "text" name = "Address">
            </tr>
            <tr>
                <th><label>phone :</label></th>
                <td><input type = "number" name = "phn">
            </tr>
            <tr>
                <th><label>Date of Birth:</label></th>
                <td><input type = "text" name = "dob">
            </tr>
            <tr>
                <th><label>Nationality :</label></th>
                <td><input type = "text" name = "Nation">
            </tr>
            <tr>
                <th><label>Occupation :</label></th>
                <td><input type = "text" name = "ocupt">
            </tr>
            <tr>
                <td><input type = "submit" name = "Sub">
            </tr>
        </table>
    </form>
</body>
</html>


<?php
 include_once('conection.php');
 if(isset($_POST['Sub']))
 {
     extract($_POST);
     if(!empty($Uname) && !empty($Lname) && !empty($Mail) && !empty($Address) && !empty($phn) && !empty($dob) && !empty($Nation) && !empty($ocupt))
     {
         $query = "INSERT INTO `application` (`Uname`, `Lname`, `Mail`, `Address`, `phn`, `dob`, `Nation`, `ocupt`) VALUES ('$Uname', '$Lname', '$Mail', '$Address', '$phn', '$dob', '$Nation', '$ocupt');";
         $qry = mysqli_query($link , $query) or die(mysqli_error());
         if($qry)
         echo "<h2><center>Data Entered Successfully</center></h2>";
         else
         echo "<center>failed</center>";
     }
    
    
 else
 {
     echo "<center> <h2>All field Required *</center><h2>";
 }
}
 ?>