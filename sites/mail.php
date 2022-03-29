<?php
if(isset($_POST["SubmitBtn"])){  
    $name = $_POST["name"];
    $adress = $_POST["adress"];
    $antal = $_POST["antal"];

    $to = "eco.strap.uf@gmail.com";
    $from = $_POST["email"];
    $subject = "Product Sold to $name";
    $message = $_POST["annat"] + "\nadress: " + $adress + "\nantal: $antal";
    
    mail($to,$subject,$message,$subject); 
}
?>