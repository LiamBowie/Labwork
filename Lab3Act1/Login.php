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

            <?php
                $username = "LiamBowie";
                $password = "IAmBossEh123";

                if($_POST["user"] == $username && $_POST["pass"] == $password)
                {
                    setcookie("username", $username);
                    setcookie("access_level", "standarduser");
                }
            ?>
        </form>
    </body>
</html>