<?php
    include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            @import url("styles.css"); 
        </style>
    </head>
    <body>

        <div id="container">
            
            <p id="logo">
            <a href="https://fontmeme.com/dragon-ball-z-font/"><img src="https://fontmeme.com/permalink/171013/494be0ef5bf2ce1c5562f71f2ffe0e3b.png" alt="dragon-ball-z-font" border="0"></a>
            </p>
            
            <h1>Which fighter are you?</h1>
            
            <form>
                    <div>
                        <span>What is your name?</span>
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div>
                        <span>Do you like fighting?</span>
                        <input type="radio" name="yes" value="yes" id="yes"/>
                        <label for="yes">Yes</label>
                        <input type="radio" name="no" value="no" id="no"/>
                        <label for="no">No</label>
                    </div>
                    <div class="form-group">
                        <select name="class" id="drop-down" style:"color: black; font-size:1.5em">
                            <option value>Select Class</option>
                            <option value="saiyan">Saiyan</option>
                            <option value="namekian">Namekian</option>
                            <option value="frieza">Frieza Army</option>
                            <option value="human">Human</option>
                        </select>
                    </div>
                    <div>
                        <input type="reset">
                        <input type="submit" value="Submit">
                    </div>
            </form>
                    
        <?php
            $saiyan = array("Goku","Vegeta","Gohan","Goten","Trunks","Napa","Raditz","Bardock", "Broly","King_Vegeta");
            $namekian = array("Piccolo", "Dende","Kami","Nail","Guru");
            $frieza = array("Frieza","Cooler","King_Cold","Zarbon","Dodoria");
            $human = array("Hercule","Videl","Yamcha", "Krillin", "Roshi","Bulma","ChiChi");
           
            if (isset($_GET['name'])) {
                if( ($_GET['name'] == null) || ($_GET['class'] == null) || ($_GET['yes']== null && $_GET['no']== null)){
                    echo "<div> Please fill out all form elements.</div>";
                }
                else 
                {
                    echo "<div>Hello <span id='name'>" .$_GET['name']. "</span> you got </div>";
                    fighter();
                }
            }
        ?>
        </div>
    </body>
</html>