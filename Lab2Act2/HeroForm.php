<html>
    <body>
        <form action="HeroResponse.php" method="post">
                <p><label>Forename</label><input type="text" name="forename"></p>
                <p><label>Surname</label><input type="text" name="surname"></p>
                <div><label>Gender:</label>
                    <p><input type="radio" value="male" name="gender">Male</p>
                    <p><input type="radio" value="female" name="gender">Female</p>
                </div>
                <div>
                    Superpowers:
                    <br>
                    <input type="checkbox" name="flight">Flight
                    <input type="checkbox" name="invisibility">Invisibility
                    <br>
                    <input type="checkbox" name="superstrenth">Super Strength
                    <input type="checkbox" name="superspeed">Super Speed
                    <br>
                    <input type="checkbox" name="specific-weapon-skills">Specific Weapon Skills
                    <input type="checkbox" name="super-rich">Super Rich
                    <br>
                    <input type="checkbox" name="other">Other:
                    <label>Please Specify</label><input type="text" name="otherskill">
                    <br>
                </div>
                <a href="http://1206499-labwork.azurewebsites.net/Lab2Act2/HeroResponse.php"><input type="submit" value="submit"></a>
        </form>
    </body>
</html>