<?php
$data = file_get_contents('php://input');
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents('https://garden-ten-smoky.vercel.app/json.php', false, $context);
if ($result === FALSE) { /* Handle error */ }
header('Content-Type: application/json'); 
echo $result;
?>
