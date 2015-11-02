<html>
    <body>
        <form>
            <p>
                <label>Username</label>
                <input type="text" name="user">
            </p>
            <p>
                <label>Password</label>
                <input type="password" name="pass">
            </p>
            <a href="http://1206499-labwork.azurewebsites.net/Lab3Act1/homepage.php"><input type="submit" value=""login"></a>
        </form>

        <?php
        $username = "LiamBowie";
        $password = "IAmBossEh123";

        if($_POST["user"] == $username && $_POST["pass"] == $password)
        {
            setcookie("username", $username);
            setcookie("access_level", "standarduser");
        }
        ?>
    </body>
</html>