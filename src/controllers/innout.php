<?php
session_start();
requireValidSession();
loadModel("WorkingHours");

$user = $_SESSION["user"];
$records = WorkingHours::loadFromUserAndDate($user->id, date("Y-m-d"));

$currentTime = date("H:i:s");
$records->innout($currentTime);
header("Location: day_records.php");