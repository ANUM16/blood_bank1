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
        if (isset($_POST['pname'])) {
            $pname = $_POST['pname'];
            $pbld_grp = $_POST['pbld_grp'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $day1 = $_POST['day1'];
            $month1 = $_POST['month1'];
            $year1 = $_POST['year1'];
            $pmbno = $_POST['pmbno'];
            $hname = $_POST['hname'];
            $hadd = $_POST['hadd'];
            $pblood = $_POST['pblood'];

            echo "Patient's Name:" . $pname . "<br>";
            echo "Patient's Blood group:" . $pbld_grp . "<br>";
            echo "Day:" . $day . "Month:" . $month . "Year:" . $year . "<br>";
            echo "Day:" . $day1 . "Month:" . $month1 . "Year:" . $year1 . "<br>";
            echo "Mobile No:" . $pmbno . "<br>";
            echo "Hospital's Name:" . $hname . "<br>";
            echo "Hospital's Address:" . $hadd . "<br>";
            echo "Purpose for Blood;" . $pblood . "<br>";
        }
        ?>
    </body>
</html>
