<?php
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../db/db.db');
    }
}
 
$db = new MyDB();
 
if (!$db) {
    die("Database connection failed: " . $db->lastErrorMsg());
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST['naam'];
    $foto = $_POST['foto'];
    $beschrijving = $_POST['beschrijving'];
    $prijs = $_POST['prijs'];
    $id = rand(23, 7563478834);
    $sql = "INSERT INTO verzameling (naam, foto, beschrijving, prijs, , id) VALUES ('$naam', '$foto', '$beschrijving', '$prijs', '$id')";
    $ret = $db->exec($sql);
}
header("Location: ./index.php");
exit;
?>