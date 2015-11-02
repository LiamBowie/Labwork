<html>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        session_start()
    ?>
    <body>
        <?php
        displayAccessLevelInformation($_SESSION["access_level"]);

        function displayAccessLevelInformation($access_level)
        {
            if ($access_level == "standard_user") {
                echo "<p> you are logged in as a standard user</p>";
            } elseif ($access_level == "root") {
                echo "<p>you are currently logged in as a root user</p>";
                echo "<p>you now have access to additional administrative privelages.</p>";
            }
        }
        ?>
    </body>
</html>