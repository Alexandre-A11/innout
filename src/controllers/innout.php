<?php
session_start();
requireValidSession();

$user = $_SESSION["user"];
$records = WorkingHours::loadFromUserAndDate($user->id, date("Y-m-d"));

try {
    $currentTime = date("H:i:s");
    if($_POST["forcedTime"]) $currentTime = $_POST["forcedTime"];
    
    $records->innout($currentTime);
    addSuccessMessage("Ponto inserido com sucesso!");

} catch (AppException $event) {
    addErrorMessage($event->getMessage());
}

header("Location: day_records.php");