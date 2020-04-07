<?php
require_once "../collections/DataBase.php";

header('Content-Type: application/json');

$db = new DataBase();
$db->connection();
print_r($db->getAllPlayers("SELECT * FROM players"));

