<?php

require_once(dirname(__FILE__, 2) . "/src/config/config.php");
require_once(dirname(__FILE__, 2) . "/src/models/User.php");

$user = new User(["name" => "Alexandre", "email" => "ale.cod3r.com"]);

print_r(User::get(["id" => 1], "id, name, email"));
echo "<br>";
print_r(User::get(["name" => "Chaves"], "id, name, email"));
echo "<br>";

foreach (User::get([], "name") as $user){
    echo $user->name;
    echo "<br>";
}