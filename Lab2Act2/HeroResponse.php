<html>
    <body>
        <?php
        $forename = $_POST["forename"];
        $surname = $_POST["surname"];
        $gender = $_POST["gender"];
        $flight = $_POST["flight"];


        echo $forename ." ". $surname ." is a " . $gender . " your powers are " . $flight;
        ?>
    </body>
</html>