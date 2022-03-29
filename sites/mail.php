<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending..</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            background-color: #343A40;
        }
        h1 {
            font-size: 3rem;
            font-family: 'Arial';
        }
    </style>
</head>
<body>
    <?php
        $name = $_POST["name"];
        $adress = $_POST["adress"];
        $antal = $_POST["antal"];
        $annat = $_POST["annat"];
        $from = $_POST["email"];

        $to = "eco.strap.uf@gmail.com";
        $subject = "eco-strap.store sold to $name";
        $message = "$name har beställt $antal vara/varor från eco-strap.store. \nProdukten ska levereras till $adress och återkontakt görs till: $from.\nMeddelande: $annat";
        $header = "From: $from" . "\r\n";
        
        mail($to,$subject,$message,$header);
        echo '<script>alert("Tack för beställningen. <br> Vi återkommer med tider då vi kan leverera produkten till dig bästa kund. <br> Hoppas du gillar vår produkt.")</script>'; 
        header('Location: /index.html');
    ?>
</body>
</html>

<?php
