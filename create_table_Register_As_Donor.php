<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hostname = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "blood_bank";

// Create connection
        $conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

// sql to create table
        $sql = "INSERT INTO `register as donor`(`Id`, `Full Name`, `Mb No`, `Gender`, `Lcation`, `Blood Group`, `Address`, `DOB`, `E-Mail`, `Password`, `C_Password`)";
                    

        if ($conn->query($sql) === TRUE) {
            echo "Table Register_As_Donor created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        ?>
    </body>
</html>
