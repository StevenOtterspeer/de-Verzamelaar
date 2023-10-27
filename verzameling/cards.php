<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/cards.css">
    <title>cards</title>
</head>
<body>
    <nav>   
        <div class="navbar">
          <ul>
          <a class="logo" href="../home/index.html"><img src="../images/HotWheelsLogo.png"/></a>
            <li><a href="../about/index.html">About</a></li>
            <li><a href="../contact/index.html">Contact</a></li>
            <li><a class="active" href="../verzamelling/index.php">Verzameling</a></li>
            <li><a href="../home/index.html">Home</a></li>
          </ul>
        </div>
      </nav>

      <?php
    $connection = new SQLite3('../db/db.db');

    $id = $_GET["myid"];

    $results = $connection->query("SELECT * FROM verzameling WHERE id = $id");

    if ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        $naam = $row['naam'];
        $foto = $row['foto'];
        $info = $row['beschrijving'];
        $prijs = $row['prijs'];
    }
?>

<div class="container main">
	<div class="img-box">
	
	  <div class="img-block">

	    <img src="<?php echo $foto; ?>" alt="" title="<?php echo $naam; ?>"/>

	  </div>
  </div>

  <div class="info">
    <h2><?php echo $naam; ?></h2>
    <p><?php echo $info; ?></p>
  </div>

  <div class="prijs">
    <h2>Prijs:</h2>
  <p>$<?php echo $prijs; ?></p>

    <form action="./bestel.php" method="post">
      <input type="hidden" id="item" name="item" value=""/>
      <input type="text" name="naam" id="naam" placeholder="Uw naam..."> <br>
      <input type="text" name="addres" id="addres" placeholder="Uw addres..."> <br>
      <input type="text" name="postcode" id="postcode" placeholder="Uw postcode...">
      <input type="button" value="bestel" class="bestell" onclick="submitForm()">
    </form>

    <script>
  function submitForm() {
    document.querySelector("form").submit();
  }
</script>

  </div>

</div>

</body>
</html>