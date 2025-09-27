
<?php

$fetch = curl_init("https://jsonplaceholder.typicode.com/todos/2");
curl_setopt($fetch, CURLOPT_RETURNTRANSFER,true);
$data = curl_exec($fetch);
curl_close($fetch);

echo $data;
?>