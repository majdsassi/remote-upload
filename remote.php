<?php
$url = $_POST['URL'];
$fileContents = file_get_contents($url);
if ($fileContents === false) {
    echo "Failed to fetch the file from the URL.";
} else {
    $filename = $_POST['name'];
    $pathInfo = pathinfo($url);
    $extension = '.' . $pathInfo['extension'];
    $filenameWithExtension = $filename . $extension;
    $saved = file_put_contents($filenameWithExtension, $fileContents);
    if ($saved !== false) {
        echo "<h1>File saved successfully.</h1>";
    } else {
        echo "<h1>Failed to save the file.</h1>";
    }
}
?>
