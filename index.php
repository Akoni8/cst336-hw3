<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>

        

        <div id="container">
            
            <h1>HTML Forms / PHP</h1>
            <h2>Sport Search Form</h2>
            
            
            <form>
                <div>
                    <input type="text" name="team" placeholder="Team">
                </div>
                <div>
                    <input type="radio" name="professional" value="professional" id="professional"/>
                    <label for="professional">Professional</label>
                    <input type="radio" name="college" value="college" id="college"/>
                    <label for="college">College</label>
                </div>
                <div>
                    <input type="radio" name="male" value="male" id="male"/>
                    <label for="male">Male</label>
                    <input type="radio" name="female" value="female" id="female"/>
                    <label for="female">Female</label>
                </div>
                <div>
                    <select name="category" id="drop-down" style:"color: black; font-size:1.5em">
                        <option value>Select Sport</option>
                        <option value="Basketball">Basketball</option>
                        <option value="Swimming">Swimming</option>
                        <option value="Track&Field">Track&Field</option>
                        <option value="Baseball/Softball">Baseball/Softball</option>
                        <option value="Wrestling">Wrestling</option>
                        <option value="Football">Football</option>
                    </select>
                </div>
                <div>
                    <input type="reset">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
        <?php
        if (isset($_GET['search']) && ($_GET['search'] !== '')) {
            $search = urlencode($_GET['search']);
            echo "<a href='http://google.com/q={$search}'>Click here to search for '$search'</a>";
        }
        ?>
        
    </body>
</html>