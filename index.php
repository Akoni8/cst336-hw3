<!DOCTYPE html>
<html>
    <head>
        <title>Homework 3</title>
        <link rel="stylesheet" href="styles.css" type="text/css" />
    </head>
    <body>

        <div id="container">
            
            <!--<h1> <span id="dragon">Dragon</span> <span id="ball">Ball</span> <span id="z">Z</span></h1>-->
            <!--<h2 id="fighter">Fighter</h2>-->
            <a href="https://fontmeme.com/dragon-ball-z-font/"><img src="https://fontmeme.com/permalink/171005/9c302a752a3cbd4ddeaf73cf76bfb9e4.png" alt="dragon-ball-z-font" border="0"></a>
            
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
                <div>
                    <input type="radio" name="male" value="male" id="male"/>
                    <label for="male">Male</label>
                    <input type="radio" name="female" value="female" id="female"/>
                    <label for="female">Female</label>
                </div>
                <div>
                    <select name="category" id="drop-down" style:"color: black; font-size:1.5em">
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
        </div>
        
        <?php
                    $saiyan = array("Goku","Vegeta","Gohan","Goten","Trunks","Napa","Raditz","Bardock", "Broly","King_Vegeta");
                    $namekian = array("Piccolo", "Dende","Kami","Nail","Guru");
                    $frieza = array("Frieza","Cooler","King_Cold","Zarbon","Dodoria");
                    $human = array("Hercule","Videl","Yamcha", "Krillin", "Roshi","Bulma","ChiChi");
            if(isset($_POST['submit'])){
                if (isset($_GET['name'])) {
                    if($_GET['name'] == null && $_GET['category'] == null){
                        echo "select keyword by typing or using drop down menu";
                    }
                    else 
                    {
                        echo "<div>Hello " .$_GET['name']. " you rock.</div>";
                    }
                }
            }
        
        ?>
        
        
    </body>
</html>