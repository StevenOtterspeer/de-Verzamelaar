<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/nav.css">
    <link rel="stylesheet" href="../CSS/verzameling.css">
    <title>Verzameling</title>
</head>
<body>
    <nav>   
        <div class="navbar">
          <ul>
            <a src="../images/HotWheelsLogo.png" href="../home/index.html" class="logo">Logo</a>
            <li><a href="../about/index.html">About</a></li>
            <li><a href="../contact/index.php">Contact</a></li>
            <li><a class="active" href="../verzamelling/index.php">Verzameling</a></li>
            <li><a href="../home/index.html">Home</a></li>
          </ul>
        </div>
      </nav>

      <h2>Hotwheel Collection</h2>

      <?php
    $connection = new SQLite3('../db/db.db');
    if($connection){
        echo "Connected\n";
    }
    $results = $connection->query('SELECT * FROM verzameling');
    while($row=$results->fetchArray(SQLITE3_ASSOC)){
        $foto_id = $rows['id'];
        $foto = $rows['foto']; 
        $naam = $rows['naam'];
        $prijs = $rows['prijs'];

        echo '<div class="img-block">';
        echo '<a href="cards.php?myid=' . $foto_id . '" target="new window">';
        echo '<img src="' . $foto . '" alt="" title="' . $naam . '" class="img-responsive" />';
        echo '</a>';
        echo '<p><strong>' . $naam . '</strong></p>';
        echo '<p><strong>' . $prijs . '</strong></p>';
        echo '</div>';

    }
?>

</body>
</html>