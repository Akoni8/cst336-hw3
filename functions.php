<?php
    function fighterClass() {
        global $saiyan, $namekian, $frieza, $human;
            
        if($_GET['class'] == 'saiyan') {
            return $saiyan;
        }
        else if($_GET['class'] == 'namekian') {
            return $namekian;
        }
        else if($_GET['class'] == 'frieza') {
            return $frieza;
        }
        else {
            return $human;
        }
    }
    
    function fighter() {
        global $saiyan, $namekian, $frieza, $human;
        $gender = "";
              
        if(isset($_GET['no'])){
            echo "<div> Yamcha because you don't like fighting</div>";
            echo "<img src='./images/Yamcha.jpg' alt='Yamcha' title='".ucfirst("Yamcha")."'width='400'/>";
        }
        else
        {
 
            //$class = $_GET['class'];
                
            //$character = array_rand($class);
            //$person = $class[$character];
                
               $character = array_rand(fighterClass());
               $person = fighterClass()[$character];
                
               echo "<div>You got ".$person."</div>";
               echo "<img src='./images/$person.jpg' alt='$person' title='".ucfirst($person)."'width='400'/>";
                
              // echo "<div>Class is: ".$class . "</div>";
        }
    }
    
    
?>