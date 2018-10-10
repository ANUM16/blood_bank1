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
        
        <?php include './dbconnect.php'?>
        <?php
        $sql = "create database blood_bank";
        if (mysqli_query($link, $sql)) {
            echo "Database created successfully";
        } 
        else {
            echo "Error creating database: " . $link->error;
        }
        ?>
    </body>
</html>
