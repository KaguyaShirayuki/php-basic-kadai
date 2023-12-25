<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎 並び替え</title>
</head>
<body>
    <?php
        $order = true;
        $nums = [5,10,15,24,8];
       
        function sort_2way($nums, $order) {
            if($order) {
                echo '昇順で並び替えます<br />';
                sort($nums);
            }else {
                echo '降順で並び替えます<br />';
                rsort($nums);
            }
            
            foreach($nums as $num) {
                echo $num.'<br />';
            }
            echo '<br />';
        }

        sort_2way($nums, $order);
        
        $order = false;
        sort_2way($nums, $order);
    ?>
</body>
</html>