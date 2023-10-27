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
    $connection = new SQLite3('my_db.db');
    if($connection){
        echo "Connected\n";
    }
    $results = $connection->query('SELECT * FROM verzameling');
    while($row=$results->fetchArray(SQLITE3_ASSOC)){
        echo "<div onclick=\"window.open('{$row['url']}' )\">";
        echo $row['foto'] . '<br>'; 
        echo $row['naam'] . '<br>';
        echo $row['prijs'] . '<br>';

    }
?>

      <div id="carDisplayContainer" class="projects-container"></div>

</body>
</html>