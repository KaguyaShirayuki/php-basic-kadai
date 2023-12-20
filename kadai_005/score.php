<?php

$member_scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
$sum = 0;

foreach($member_scores as $member_score) {
    $sum += $member_score;
    $avg = $sum / count($member_scores);
}

echo '合計点は'.$sum.'点です。<br>';
echo '平均点は'.$avg.'点です。';