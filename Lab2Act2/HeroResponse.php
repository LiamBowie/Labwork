<html>
    <body>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $forename = $_POST["forename"];
        $surname = $_POST["surname"];
        $gender = $_POST["gender"];
        $powers = $_POST["powers[]"];

        if(!empty($powers))
        {
            foreach($powers as $power)
            {
                if($power)
                {
                    echo $power;
                }
            }
        }

        echo $forename ." ". $surname ." is a " . $gender . " your powers are ";
        ?>
    </body>
</html>