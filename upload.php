<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $webpData = $_POST['webpData'];
//     $webpData = str_replace('data:image/webp;base64,', '', $webpData);
//     $webpData = base64_decode($webpData);
//     $filename =  uniqid() . '.webp';
//     file_put_contents('./uploads/' .$filename, $webpData);

//     echo $filename;
// } else {
//     http_response_code(405);
//     echo 'Method Not Allowed';
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $webpData = $_POST['webpData'];
    $title = $_POST['title'];
    $subtitle = $_POST['subTitle'];
    $category = $_POST['category'];

    $webpData = str_replace('data:image/webp;base64,', '', $webpData);
    $webpData = base64_decode($webpData);
    $filename =  uniqid() . '.webp';
    $uploadsFolder = './img/'.$category.'/';
    if (!file_exists($uploadsFolder)) {
        mkdir($uploadsFolder, 0777, true);
    }
    file_put_contents($uploadsFolder.$filename, $webpData);

    appendToJson($title, $subtitle, $uploadsFolder.$filename, $category);


    echo $filename;

    



} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}

function appendToJson($title, $subtitle, $imageUrl, $type) {

    $jsonFilePath = 'data.json';
    $jsonData = file_get_contents($jsonFilePath);
    $data = json_decode($jsonData, true);
    $newData = [
        'title' => $title,
        'subtitle' => $subtitle,
        'image_url' => $imageUrl,
        'type' => $type
    ];

    $data[] = $newData;
    $updatedJsonData = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    file_put_contents($jsonFilePath, $updatedJsonData);
}
function printJsonData() {
    $jsonFilePath = 'data.json';
    $jsonData = file_get_contents($jsonFilePath);
    $data = json_decode($jsonData, true);

    foreach ($data as $entry) {
        if($entry['type'] == "captian"){
        echo "Title: " . $entry['title'] . PHP_EOL ."\n";
        echo "Subtitle: " . $entry['subtitle'] . PHP_EOL."\n";
        echo "Image URL: " . $entry['image_url'] . PHP_EOL."\n";
        echo "Type: " . $entry['type'] . PHP_EOL."\n";
        echo "\n\n"; 
        }
    }
}
?>
