<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎 平均点と合計点</title>
</head>
<body>
    <?php
        $member_scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
        $sum = 0;

        foreach($member_scores as $member_score) {
            $sum += $member_score;
            $avg = $sum / count($member_scores);
        }

        echo '合計点は'.$sum.'点です。<br>';
        echo '平均点は'.$avg.'点です。';
    ?>
</body>
</html>

