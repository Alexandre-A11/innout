<?php

$errors = [];

if (isset($_SESSION["message"])){
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}

if ($exception) {
    $message = [
        "type" => "error",
        "message" => $exception->getMessage()
    ];

    if (get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}
?>

<?php if($message): ?>
    <div class="my-3 alert alert-<?php echo $message['type'] === 'error' ? 'danger' : 'success' ?>" role="alert">
        <?php echo $message["message"] ?>
    </div>
<?php endif ?>