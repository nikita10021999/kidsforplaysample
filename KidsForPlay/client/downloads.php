<?php

if (isset($_GET['path'])) {
    $path = $_GET['path'];

    // fetch file to download from database
    $sql = "SELECT * FROM product_master";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = $path ;

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        readfile($path );

        // Now update downloads count
        
        exit;
    }

}

?>