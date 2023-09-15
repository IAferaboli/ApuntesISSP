<!-- <?php

$ch = curl_init();

if (isset($_POST['siguiente'])) {
    $api = $_POST['next'];
} elseif (isset($_POST['anterior'])) {
    $api = $_POST['prev'];
} else {
    $api = "https://rickandmortyapi.com/api/character";
}


curl_setopt($ch, CURLOPT_URL, $api);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo curl_error($ch);
} else {
    $info = json_decode($response, true);
}

curl_close($ch);

require_once "index.view.php"; -->
