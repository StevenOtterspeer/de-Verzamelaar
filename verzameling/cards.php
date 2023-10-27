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
          <a class="logo" href="../home/index.html">Logo> <img src="../images/HotWheelsLogo.png"/></a>
            <li><a href="../about/index.html">About</a></li>
            <li><a href="../contact/index.html">Contact</a></li>
            <li><a class="active" href="../verzamelling/index.php">Verzameling</a></li>
            <li><a href="../home/index.html">Home</a></li>
          </ul>
        </div>
      </nav>

      <?php
    $connection = new SQLite3('../db/db.db');

    if($connection){
        echo "Connected\n";
    }

    $id = $_GET["myid"];

    $results = $connection->query('SELECT * FROM verzameling');

    $image_query = mysqli_query($result,"select img_id,img_name,img_path from image_table where $id = img_id");
	  while($rows = mysqli_fetch_array($image_query))
	  {
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
  <p><?php echo $prijs; ?></p>

    <form action="verzameling/bestel.php" method="post" onsubmit="">
      <input type="hidden" id="item" name="item" value=""/>
      <input type="text" name="naam" id="naam">
      <input type="text" name="addres" id="addres">
      <input type="text" name="postcode" id="postcode">
      <input type="button" value="bestel" class="bestell">
    </form>

  </div>

</div>

</body>
</html>