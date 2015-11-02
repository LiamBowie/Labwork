<html>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        session_start()
    ?>
    <body>
        <form name="form" action="#" method="post">
            <p>
                <label>Username</label><input type="text" name="input_username">
            </p>
            <p>
                <label>Password</label><input type="password" name="input_password">
            </p>
            <input type="submit" value="submit">
        </form>

        <?php
        $username = "LiamBowie";
        $password = "NormalPass123";
        $userInput_Name;
        $userInputPass;

        if(isset($_POST["input_username"])) {
            $userInput_Name = $_POST["input_username"];
            $userInputPass = $_POST['input_password'];
        }

        if($userInput_Name == $username && $userInputPass == $password) {
            if(!isset($_SESSION['username'])) {
                $_SESSION['username'] = $username;
            }
            if(!isset($_SESSION['access_level'])) {
                $_SESSION['access_level'] = "standard_user";
            }
            header("Location: homepage.php");
        }
        ?>
    </body>
</html>