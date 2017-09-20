<?php
    include "controller/MainController.php";
    if($_SERVER["REQUEST_METHOD"] != "POST"){
        header("location: /register.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "partials/head.php";
    ?>
</head>
<body>
    <main>
        <label for="fname"><?php echo $_POST["fname"]; ?></label>
        <label for="mname"><?php echo $_POST["mname"]; ?></label>
        <label for="lname"><?php echo $_POST["lname"]; ?></label>
        <label for="tel1"><?php echo $_POST["tel1"]; ?></label>
        <label for="tel2"><?php echo $_POST["tel2"]; ?></label>
        <label for="email"><?php echo $_POST["email"]; ?></label>
        <label for="trn"><?php echo $_POST["trn"]; ?></label>
        <label for="pword"><?php echo $_POST["pword"]; ?>></label>
        <label for="rpword"><?php echo $_POST["rpword"]; ?></label>
    </main>
</body>
</html>