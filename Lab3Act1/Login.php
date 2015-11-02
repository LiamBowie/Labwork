<html>
    <body>
        <form>
            <p>
                <label>Username</label><input type="text" name="user">
            </p>
            <p>
                <label>Password</label><input type="password" name="pass">
            </p>
            <input type="submit" value="submit">
        </form>

        <?php
        $username = "LiamBowie";
        $password = "NormalPass123";

        if($_POST["user"] == $username && $_POST["pass"] == $password)
        {
            setcookie("username", $username);
            setcookie("access_level", "standard_user");
            header("Location: homepage.php");
        }
        ?>
    </body>
</html>