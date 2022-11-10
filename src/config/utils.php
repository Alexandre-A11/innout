<?php

function addSuccessMessage($msg) {
    $_SESSION["message"] = [
        "type" => "success",
        "message" => $msg
    ];
}

function addErrorMessage($msg) {
    $_SESSION["message"] = [
        "type" => "error",
        "message" => $msg
    ];
}