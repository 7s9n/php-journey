<?php
    $conn = require_once 'config.php';

    $errors = [];
    $title = '';
    $description = '';
    $price = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        if (!$title){
            $errors[] = 'Product\'s title is required';
        }
        if (!$description){
            $errors[] = 'Product\'s description is required';
        }
        if (!$price){
            $errors[] = 'Product\'s price is required';
        }

        if (empty($errors)){
            $sql = 'INSERT INTO products (title, description, price) VALUES (?,?,?)';
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssd", $title, $description, $price);
            $stmt->execute();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mysqli oop example</title>
</head>
<body>
    <?php if (!empty($errors)) : ?>
        <?php foreach ($errors as $error) : ?>
            <div>
                <?=$error ?>
            </div>
        <?php endforeach ?>
    <?php endif ?>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" name="title" placeholder="Product's title" value="<?= $title ?>">
        <br><br>
        <input type="text" name="description" placeholder="Product's description" value="<?= $description ?>">
        <br><br>
        <input type="number" name="price" placeholder="Product's price" min="0" step="0.1" value="<?= $price ?>">
        <br><br>
        <input type="submit" name="submit" value="submit">
        <br><br>
    </form>
</body>
</html>