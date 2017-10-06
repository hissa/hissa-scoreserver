<?php
require_once "Database.php";
$score = 0;
$player_name = "test";
$datetime = "2017-10-06 00:00:00";
$pdo = Database::getPdo();
$sql = "insert into scores(score, player_name, dattime) values(?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$score, $player_name, $datetime]);

