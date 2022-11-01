<?php

if ($exception) {
    $message = [
        "type" => "error",
        "message" => $exception->getMessage()
    ];
}

?>

<?php if($message): ?>
    <div class="my-3 alert alert-danger" role="alert">
        <?php echo $message["message"] ?>
    </div>
<?php endif ?>