<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending..</title>
    <link rel="stylesheet" href="/style/main.css">
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
    ?>

<main id="payment">
        <a href="/sites/shop.html"> <img id="back" src="/resources/back.svg"> </a>
        <div>
            <img src="/resources/qr.png">
        </div>
        <article>
            <div>
                <div>
                    <p>
                        Vi erbjuder endast betalning via Swish.
                        <br>
                        Fyll i information om för- och efternamn vid betalning med hjälp av Swish meddelande funktion. <br> Vi kan då verifera betalningen.
                        <br>
                        <br>
                        Du kan även välja att betala vid leverans, men då krävs en leveranstid då du är hemma.
                    </p>
                </div>
            </div>
            <aside>
                <div>
                    <a href="/sites/shop.html">
                        <button> 
                            Slutför
                        </button>
                    </a>
                </div>
            </aside>
        </article>
    </main>

    <script src="/scripts/main.js"></script>
</body>
</html>

<?php
