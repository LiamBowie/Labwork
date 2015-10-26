<html>
    <body>
        <?php
        $forename = $_POST["forename"];
        $surname = $_POST["surname"];
        $gender = $_POST["gender"];
        $powers[] = new power[];

        if(!empty($_POST["powers"]))
        {
            foreach($_POST["powers"] as $power)
            {
                echo $power;
            }
        }

        echo $forename ." ". $surname ." is a " . $gender . " your powers are " . $flight;
        ?>
    </body>
</html>