<?php
    #Author: Mikhail Shaw
   include "controller/MainController.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $title = "Mi Casa: Home";
        include "partials/head.php";
    ?>
</head>


<body>
    <main class="HomeMain">
        <div>
            <h1>Welcome!! 👋 
            <br>!Mi Casa Es Su Casa!</h1>
            <?php
                session_start();

                if(isset($_SESSION["logged"])){
                    ?>
                        <label><a href="property.php"><?php echo $_SESSION["name"]. ", let's Begin";?></a></label>
                    <?php
                }else{
                    ?>
                        <label><a href="register.php"><?php echo "Let's Register";?></a> </label>
                    <?php
                }
            ?>

            <div class="lowerIcons">
                <span>🏠</span>
                <span>👪</span>
            </div>
        </div>
    </main>
</body>

</html>