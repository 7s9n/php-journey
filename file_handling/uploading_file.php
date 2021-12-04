<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file example</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <label for="image-input">
            Upload your image
        </label>
        <input type="file" name="image" id="image-input">
        <br><br>
        <input type="submit" value="upload">
    </form>
</body>
</html>

<?php
    function upload_single_file($name, $allowed_ext = null, $upload_to='files'){
        print_r($_FILES[$name]);
        if (!isset($_FILES[$name])) {
            throw new RuntimeException('The input file name does not exist.');
        }
        if (is_array($_FILES[$name]['error'])) {
            throw new RuntimeException('You must upload a single file.');
        }
        switch ($_FILES[$name]['error']) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException('No file sent.');
                break;
            default:
                throw new RuntimeException('Unknown errors.');
        }
        $tmp = explode('.',$_FILES[$name]['name']);
        $ext = end($tmp);
        unset($tmp);
        if (isset($allowed_ext)) {
            if (!array_search($ext, $allowed_ext)) {
                throw new RuntimeException('This file is not allowed.');
            }
        }

        if (!is_dir($upload_to)) {
            mkdir($upload_to);
        }

        $new_image_name = $upload_to . '/' . sha1_file($_FILES[$name]['tmp_name']) . '.' . $ext;
        if (!move_uploaded_file(
            $_FILES[$name]['tmp_name'],
            $new_image_name
        )) {
            throw new RuntimeException('something went wrong when uploading the file.');
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $allowed_ext = [
            'jpeg',
            'png',
            'jpg'
        ];
        upload_single_file('image', 
        $allowed_ext,
        'images');
    }
?>