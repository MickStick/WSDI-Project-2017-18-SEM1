<?php
    #Author: Mikhail Shaw
    include "controller/MainController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Register";
        include "partials/head.php";
    ?>
</head>
<body>
    <div class="BGblur"></div> <!-- Just The Background, nuh too pree it-->
    <main class="RegMain">
        <form action="/regisvalid.php" method="post">
            <label>Register 👤</label>
            <table>
                <tr><td><input  name="fname" type="text" placeholder="First Name"></td></tr>
                <tr><td><input name="mname" type="text" placeholder="Middle Name (Optional)"></td></tr>
                <tr><td><input  name="lname" type="text" placeholder="Last Name"></td></tr>
                <tr><td><input  name="tel1" type="number" placeholder="Telephone 1"></td></tr>
                <tr><td><input  name="tel2" type="number" placeholder="Telephone 2 (Optional)"></td></tr>
                <tr><td><input  name="email" type="email" placeholder="Email Address"></td></tr>
                <tr><td><input  name="trn" type="text" placeholder="Tax Registration Number"></td></tr>
                <tr><td><input  name="pword" type="password" placeholder="Password"></td></tr>
                <tr><td><input  name="rpword" type="password" placeholder="Re-Type Password"></td></tr>
            </table>
            <button type="submit" id="regBtn">Register</button>
        </form>
        
    </main>
</body>
</html>