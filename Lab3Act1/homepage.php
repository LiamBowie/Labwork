<html>
    <body>
         <?php
         displayAccessLevelInformation($_COOKIE["access_level"]);

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