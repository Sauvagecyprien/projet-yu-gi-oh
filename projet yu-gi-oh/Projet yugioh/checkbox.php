<?php
try
{
   
$bdd = new PDO('mysql:host=localhost;dbname=yugioh;charset=utf8', 'cyprien', 'Brother97.4');	
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['submit'])){
        if(!empty($_POST['check_list'])) {
        // Counting number of checked checkboxes.
        $checked_count = count($_POST['check_list']);
        echo "You have selected following ".$checked_count." option(s): <br/>";
        // Loop to store and display values of individual checked checkbox.
        foreach($_POST['check_list'] as $selected) {
        echo "<p>".$selected ."</p>";
        }
        echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
        }
        else{
        echo "<b>Please Select Atleast One Option.</b>";
        }
}
echo $donnees['image_miniature'] ;
?>