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
        <form action="Register_As_Donor_Jump.php" method="post">
            <div class="container">
                <fieldset style="border: 0.5px solid red;">
                    <legend>REGISTER AS A DONOR</legend>
                    <table>
                        <p>Please fill in this form to create an account.</p><hr>
                        <tr>
                            <th>Full Name</th>
                            <td style="text-align:right"><input type="text" name="name" placeholder="Enter Full Name"></td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td><input type="number" name="mbno"></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>
                                <input type="radio" name="gender" value="Male">Male &nbsp;
                                <input type="radio" name="gender" value="Female">Female &nbsp;                               
                                <input type="radio" name="gender" value="Others">Others
                            </td>
                        </tr>
                        
                        <tr>
                            <th>Location</th>
                            <td>
                                <select name="place" required>
                                    <option>Place</option>
                                    <option value="ANGL">Angul</option>
                                    <option value="BBS">Bhubaneswar</option>
                                    <option value="BLS">Balasore</option>
                                    <option value="BRG">Bargarh</option>
                                    <option value="BHC">Bhadrak</option>
                                    <option value="BLGR">Balangir </option>                                        
                                    <option value="CTC">Cuttack</option>                                        
                                    <option value="DNKL">Dhenkanal</option>                                        
                                    <option value="GAM">Ganjam</option>                                        
                                    <option value="JJKR">Jajpur Road</option>
                                    <option value="JSGR">Jharsuguda </option>                                        
                                    <option value="KNPR">Kendrapara</option>                                       
                                    <option value="KUR">Khordha</option>
                                    <option value="KRPU">Koraput</option>                                       
                                    <option value="NMBR">Mayurbhanj </option>                                       
                                    <option value="PURI">Puri </option>
                                    <option value="RGDA">Rayagada</option>
                                    <option value="SBP">Sambalpur</option>
                                </select>
                            </td>                            
                        </tr>
                        <br>
                        <tr>
                            <th>Blood Group</th>
                            <td>
                                <select name="bld_grp"required>
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
                            <th>Address</th>
                            <td><textarea name="add"></textarea></td>
                        </tr>


                        <tr>
                            <th>Date Of Birth</th>
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
                            <th>E-Mail</th>
                            <td><input type="email" name="email"  placeholder="Enter E-mail" required></td>
                        </tr>

                        <tr>
                            <th>Password</th>
                            <td><input type="password" name="pwd" required></td>
                        </tr>

                        <tr>
                            <th>Confirm Password</th>
                            <td><input type="password" name="pwd1" required></td>
                        </tr>

                        <tr>
                            <th></th>
                            <td><input type="checkbox" required>I authorize the website to display my mobile contact so that 
                                needy persons <br>could contact as when in emergency.</td>
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