<?php

session_start();
requireValidSession();

loadModel("WorkingHours");

$timezone = new DateTimeZone('America/Sao_Paulo');
$date = (new DateTime('now', $timezone))->getTimestamp();
$today = date("d \d\\e M \d\\e Y");

$user = $_SESSION["user"];
$records = WorkingHours::loadFromUserAndDate($user->id, date("Y-m-d"));

loadTemplateView('day_records', [
    "today" => $today,
    "records" => $records,
]);