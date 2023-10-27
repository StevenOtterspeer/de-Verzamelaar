<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/contact.css">
    <title>Contact</title>
</head>
<body>
    <nav>
        <div class="navbar">
          <ul>
          <a class="logo" href="../home/index.html"><img src="../images/HotWheelsLogo.png"/></a>
            <li><a href="../about/index.html">About</a></li>
            <li><a class="active" href="../contact/index.php">Contact</a></li>
            <li><a href="../verzameling/index.php">Verzameling</a></li>
            <li><a href="../home/index.html">Home</a></li>
          </ul>
        </div>
      </nav>
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = $_POST["naam"];
        $email = $_POST["email"];
        $telefoon = $_POST["telefoon"];
        $bedrijf = $_POST["bedrijf"];
        $bericht = $_POST["bericht"];
       
        $to = "sotter06@gmail.com"; 
        $subject = "Nieuw formulier ingediend";
        $body = "Naam: $naam\n";
        $body .= "E-mail: $email\n";
        $body .= "Telefoonnummer: $telefoon\n";
        $body .= "Bedrijfsnaam: $bedrijf\n";
        $body .= "Bericht:\n$bericht";
       
        mail($to, $subject, $body);
             
        echo "<p>Bedankt! Je formulier is succesvol ingediend.</p>";
    }
    ?>

<div class="header-content">

    <div class="container grid-2">
        <div class="column-1">
            <h1 class="header-title">Contact</h1>
            <p class="text">
                hier kunt u mij contacteren.
            </p>
        </div>

        <div class="column-2">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="name">Naam:</label><br>
                <input type="text" name="naam" id="naam" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email" required><br><br>

                <label for="telefoonnummer">Telefoonnummer: (optioneel)</label>
                <input type="number" name="telefoon" id="telefoon" maxlength="10"><br><br>

                <label for="bedrijf">Bedrijfsnaam: (optioneel)</label>
                <input type="text" name="bedrijf" id="bedrijf"><br><br>

                <label for="message">bericht:</label><br>
                <textarea name="bericht" id="bericht" rows="auto" required></textarea><br>

                <input class="submitBtn" type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>      