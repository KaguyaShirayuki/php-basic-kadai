<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎 連想配列</title>
</head>
<body>
    <?php
        $vegetable = array('名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道');

        foreach($vegetable as $vegeta => $value) {
            echo $vegeta.'：'.$value.'<br>';
        }
    ?>
</body>
</html>
<?php

