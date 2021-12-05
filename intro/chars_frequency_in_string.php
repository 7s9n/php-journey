<?php
    $result = '';
    function get_frequency($str, $c){
        $unique = [];
        $str = str_split($str);
        foreach($str as $ch){
            if (!array_key_exists($ch, $unique)){
                $unique[$ch] = 0;
            }
            $unique[$ch]++;
        }
        return array_key_exists($c, $unique) ? $unique[$c] : 0;
    }
    if (isset($_GET['str_input'])){
        $result = get_frequency($_GET['str_input'], $_GET['chr_input']);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="str">Enter string input</label>
        <input type="text" name="str_input" id="str">
        <br><br>
        <label for="chr">Enter string input</label>
        <input type="text" name="chr_input" id="chr">
        <br><br>
        <input type="submit" value="submit">
    </form>
    <?php if (isset($result)) : ?>
        <p> <?= $result ?> </p>
    <?php endif ?>
</body>
</html>