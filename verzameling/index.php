<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/nav.css">
    <link rel="stylesheet" href="/CSS/verzameling.css">
    <title>Verzameling</title>
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

      <h2>Hotwheel Collection</h2>

      <?php
    $connection = new SQLite3('db.db');
    if($connection){
        echo "Connected\n";
    }
    $results = $connection->query('SELECT * FROM verzameling');
    while($row=$results->fetchArray(SQLITE3_ASSOC)){
        echo "<div onclick=\"window.open('{$row['url']}' )\">";
        $foto_id = $rows['id'];
        $foto = $rows['foto']; 
        $naam = $rows['naam'];
        $prijs = $rows['prijs'];

    }
?>
      <div class="img-block">
      <a href="cards.php?myid=<?php echo $foto_id; ?>" target="new window">
	<img src="<?php echo $foto; ?>" alt="" title="<?php echo $naam; ?>" class="img-responsive" />
	</a>
				
				
				<p><strong><?php echo $naam; ?></strong></p>
        <p><strong><?php echo $prijs; ?></strong></p>
				</div>

        
      

<div id="carDisplayContainer" class="projects-container"></div>

</body>
</html>