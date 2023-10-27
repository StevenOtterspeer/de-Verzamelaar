<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/nav.css">
    <link rel="stylesheet" href="/CSS/verzameling.css">
    <title>cards</title>
</head>
<body>
    <nav>   
        <div class="navbar">
          <ul>
            <a href="../images/hotwheelsLogo.png" class="logo">Logo</a>
            <li><a href="">Admin</a></li>
            <li><a href="">Betsellen</a></li>
            <li><a href="">Verzameling</a></li>
            <li><a class="active" href="">Home</a></li>
          </ul>
        </div>
      </nav>

      <?php
    $connection = new SQLite3('db.db');

    if($connection){
        echo "Connected\n";
    }

    $id = $_GET["myid"];

    $results = $connection->query('SELECT * FROM verzameling');

    $image_query = mysqli_query($result,"select img_id,img_name,img_path from image_table where $id = img_id");
	  while($rows = mysqli_fetch_array($image_query))
	  {
		$naam = $rows['naam'];
		$foto = $rows['foto'];
    $info = $rows['beschrijving'];
    $prijs = $rows['prijs'];
    }
?>

<div class="container main">
	<div class="img-box">
	
	  <div class="img-block">

	  <img src="<?php echo $foto; ?>" alt="" title="<?php echo $naam; ?>"/>

	  </div>
  </div>
  <div class="info">
    <?php echo $info; ?>
  </div>
  <div class="prijs">
    <?php echo $prijs; ?>
  </div>
</div>

</body>
</html>