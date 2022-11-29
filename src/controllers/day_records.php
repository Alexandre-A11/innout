<?php

session_start();
requireValidSession();

loadModel("WorkingHours");

$timezone = new DateTimeZone('America/Sao_Paulo');
$date = (new DateTime('now', $timezone))->getTimestamp();
$today = date("d \d\\e M \d\\e Y");


loadTemplateView('day_records', [
    "today" => $today,
]);