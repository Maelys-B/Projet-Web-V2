<?php

include('models/dbConnect.php');

$sqlSelect = "SELECT * FROM lamps WHERE id = " . $_GET['id'];
$query = $db->query($sqlSelect);
$lumiere = $query->fetch();
?>