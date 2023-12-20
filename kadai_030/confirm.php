<?php
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$depertment = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題 Form 確認ページ</title>
</head>
<body>
    <h1>入力内容をご確認ください。</h1>
    <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>    
    <table border="1" cellpadding="5">
        <form action="complete.php" method="post">
            <tr>
                <th>項目</th>
                <th>入力内容</th>
            </tr>
            <tr>
                <td>社員名</td>
                <td><?= $name; ?></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?= $age; ?></td>
            </tr>        
            <tr>
                <td>所属部署</td>
                <td><?= $depertment; ?></td>
            </tr>
            <tr>
                <td><input type="submit" value="確定"></td>
                <td><input type="reset" value="戻る"></td>
            </tr>
        </form>
    </table>
</body>
</html>

