<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <title>admin</title>
</head>
<body>
<nav>   
        <div class="navbar">
          <ul>
            <a class="logo" href="../home/index.html"><img src="../images/HotWheelsLogo.png"/></a>
            <li><a href="../about/index.html">About</a></li>
            <li><a href="../contact/index.php">Contact</a></li>
            <li><a class="active" href="../verzamelling/index.php">Verzameling</a></li>
            <li><a href="../home/index.html">Home</a></li>
          </ul>
        </div>
      </nav>

<form action="verzameling/add_product.php" method="post" id="admin-form">
      <input type="text" name="naam" placeholder="Naam" />
      <input type="text" name="foto" placeholder="foto URL" />
      <input type="text" name="beschrijving" placeholder="beschrijving" />
      <input type="text" name="prijs" placeholder="Prijs" />
      <input type="submit" value="Voeg toe">
    </form>
</body>
</html>