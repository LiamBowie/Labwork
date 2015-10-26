<html>
    <body>
        <form action="HeroResponse.php" method="post">
                <p><label>Forename</label><input type="text" name="forename"></p>
                <p><label>Surname</label><input type="text" name="surname"></p>
                <div><label>Gender:</label>
                    <p><input type="radio" value="Male" name="gender">Male</p>
                    <p><input type="radio" value="Female" name="gender">Female</p>
                </div>
                <div>
                    Superpowers:
                    <br>
                    <input type="checkbox" name="powers[]" value="Flight">Flight
                    <input type="checkbox" name="powers[]" value="Invisibility">Invisibility
                    <br>
                    <input type="checkbox" name="powers[]" value="Super Strength">Super Strength
                    <input type="checkbox" name="powers[]" value="Super Speed">Super Speed
                    <br>
                    <input type="checkbox" name="powers[]" value="Specific Weapon Skills">Specific Weapon Skills
                    <input type="checkbox" name="powers[]" value="Super Rich">Super Rich
                    <br>
                    <input type="checkbox" name="Other">Other:
                    <label>Please Specify</label><input type="text" name="otherskill">
                    <br>
                </div>
                <a href="http://1206499-labwork.azurewebsites.net/Lab2Act2/HeroResponse.php"><input type="submit" value="submit"></a>
        </form>
    </body>
</html>