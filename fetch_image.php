<?php
function fetchAndDisplayImage()
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.pexels.com/v1/photos/2014422',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: 7N0RbBgaPkJ7l7Sg3x8tdJM2EtVnV34UvEj9dzRnbT3FSbTjnzogoxiZ',
        ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($response, true);
    if (isset($data['src'])) {
        return "<img class='imageClass' src='" . $data['src']['original'] . "' alt='Pexels Image'>";
    } else {
        return "Error fetching image.";
    }
}
if (isset($_POST['fetchImage'])) {
    fetchAndDisplayImage();
}
