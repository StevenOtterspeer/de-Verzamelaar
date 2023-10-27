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
    $item = $_POST['item'];
    $naam = $_POST['naam'];
    $postcode = $_POST['postcode'];
    $addres = $_POST['addres'];
    $sql = "INSERT INTO bestellingen (item, naam, postcode, addres) VALUES ('$item', '$naam', '$postcode', '$addres')";
    $ret = $db->exec($sql);
}

header("Location: ./bestelt.html");
exit;
?>