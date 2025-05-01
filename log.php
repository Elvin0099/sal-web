<?php
$data = json_decode(file_get_contents("php://input"), true);
if (isset($data["answer"]) && isset($data["name"])) {
    $line = date("Y-m-d H:i:s") . " - " . $data["name"] . ": " . $data["answer"] . "\n";
    file_put_contents("log.txt", $line, FILE_APPEND);
}
?>
