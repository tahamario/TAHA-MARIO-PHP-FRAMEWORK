<?php

/* Curl */


$url = 'https://jsonplaceholder.typicode.com/users';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($curl);


if ($res === false) {
    echo 'cURL Error: ' . curl_error($curl);
} else {
    $data = json_decode($res);
    echo ('<pre>'.curl_getinfo($curl, CURLINFO_HTTP_CODE).'</pre>');

    // Access object properties using object notation
    foreach ($data as $user) {
        echo 'Name: ' . $user->name . '<br>';
        echo 'Email: ' . $user->email . '<br>';
        // Add other properties as needed
        echo '<hr>';
    }
}

curl_close($curl);