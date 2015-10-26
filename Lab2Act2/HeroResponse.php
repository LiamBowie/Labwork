<html>
    <body>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $forename = $_POST["forename"];
        $surname = $_POST["surname"];
        $gender = $_POST["gender"];
        $powers = $_POST["powers"];
        $str = "Your powers are: ";

        echo $forename ." ". $surname ." is a " . $gender . ". Your powers are: ";

        if(!empty($powers))
        {
            foreach($powers as $power)
            {
                if($power)
                {
                    echo $power . ", ";
                }
            }
        }
        ?>
    </body>
</html>