<?php
$data = json_decode(file_get_contents("php://input"), true);
if (isset($data["answer"])) {
    $line = date("Y-m-d H:i:s") . " - Cavab: " . $data["answer"] . "\n";
    file_put_contents("log.txt", $line, FILE_APPEND);
}
?>
