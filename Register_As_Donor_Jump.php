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
        // put your code here
        if(isset($_POST['name']))
        {
            $name=$_POST['name'];
            $mbno=$_POST['mbno'];
            $gender=$_POST['gender'];
            $place=$_POST['place'];
            $bld_grp=$_POST['bld_grp'];
            $add=$_POST['add'];
            $day=$_POST['day'];
            $month=$_POST['month'];
            $day=$_POST['day'];
            $year=$_POST['year'];
            $email=$_POST['email'];
            $pwd=$_POST['pwd'];
            $pwd1=$_POST['pwd1'];
        
            echo "Name :".$name."<br>";
            echo "Mobile No:".$mbno."<br>";
            echo "Gender:".$gender."<br>";
            echo "Place:".$place."<br>";
            echo "Blood Group:".$bld_grp."<br>";
            echo "Address :".$add."<br>";
            echo "Day".$day."Month:".$month."Year:".$year."<br>";
            echo "E-mail:".$email."<br>";
            echo "Password:".$pwd."<br>";
            echo "Confirm Password:".$pwd1."<br>";
        }
        ?>
    </body>
</html>
