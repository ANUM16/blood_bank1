<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style1.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <form action="Register_As_Donor_Jump" method="post">
            <div class="container">
                <fieldset style="border: 0.5px solid red;">
                    <legend>RAISE A REQUEST</legend>
                    <table>
                        <p>Please fill in this form to create an account.</p><hr>
                        <tr>
                            <th>Patient's Name</th>
                            <td style="text-align:right"><input type="text" name="pname" placeholder="Enter Patient's Full Name"></td>
                        </tr>
                        
                        <tr>
                            <th> Patient's Blood Group</th>
                            <td>
                                <select name="pbld_grp"required>
                                    <option>Select Blood group</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="A1+">A1+</option>
                                    <option value="A1-">A1-</option>
                                    <option value="A2+">A2+</option>
                                    <option value="A2-">A2-</option>
                                    <option value="A1B+">A1B+</option>
                                    <option value="A1B-">A1B-</option>
                                    <option value="A2B+">A2B+</option>
                                    <option value="A2B-">A2B-</option>  
                                    <option value="BB">Bombay Blood Group</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <th> Patient's Date Of Birth </th>
                            <td>
                                <select name = "day" required>
                                    <option>Day</option>
                                    <?php
                                    for ($day = 1; $day <= 31; $day++) {
                                        echo"<option value = '" . $day . "'>" . $day . "</option>";
                                    }
                                    ?>
                                </select>
                                <select name = "month" required>
                                    <option>Month</option>
                                    <?php
                                    for ($month = 1; $month <= 12; $month++) {
                                        echo"<option value = '" . $month . "'>" . $month . "</option>";
                                    }
                                    ?>
                                </select>
                                <select name = "year" required>
                                    <option>Year</option>
                                    <?php
                                    for ($year = 1975; $year <= 2018; $year++) {
                                        echo"<option value = '" . $year . "'>" . $year . "</option>";
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>
                        
                         <tr>
                            <th>When you need blood</th>
                            <td>
                                <select name = "day1" required>
                                    <option>Day</option>
                                    <?php
                                    for ($day1 = 1; $day1 <= 31; $day1++) {
                                        echo"<option value = '" . $day1 . "'>" . $day1 . "</option>";
                                    }
                                    ?>
                                </select>
                                <select name = "month1" required>
                                    <option>Month</option>
                                    <?php
                                    for ($month1 = 1; $month1 <= 12; $month1++) {
                                        echo"<option value = '" . $month1 . "'>" . $month1 . "</option>";
                                    }
                                    ?>
                                </select>
                                <select name = "year1" required>
                                    <option>Year</option>
                                    <?php
                                    for ($year1 = 1975; $year1 <= 2018; $year1++) {
                                        echo"<option value = '" . $year1 . "'>" . $year1 . "</option>";
                                    }
                                    ?>
                                </select>                            
                            </td>
                        </tr>

                        <tr>
                            <th>How many units of blood</th>
                            <td>
                                <select name="unit" required>
                                    <option>Units of Blood</option>
                                    <?php
                                    for ($unit = 1; $unit <= 4; $unit++) {
                                        echo"<option value='".$unit."'>".$unit."</option>";
                                    }
                                    ?>
                                                                   
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>Mobile Number</th>
                            <td><input type="number" name="pmbno"></td>
                        </tr>
                                                                                               
                         <tr>
                            <th>Hospital Name</th>
                            <td><input type="text" name="hname" placeholder="Enter Hospital's Name" required></td>
                        </tr>

                        <tr>
                            <th>Hospital Address</th>
                            <td><textarea name="hadd" placeholder="Enter Hospital's Address" required></textarea></td>
                        </tr>

                        <tr>
                            <th>Purpose for blood</th>
                            <td><input type="text" name="pblood" placeholder="Purpose for Blood" required></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><input type="checkbox" required>I authorize the website to display my mobile contact so that 
                                I <br>could be contacted.</td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><button type="submit" value="submit">Submit</button></td>
                        </tr>
                    </table>
                </fieldset>  
            </div>
        </form>
    </body>
</html>