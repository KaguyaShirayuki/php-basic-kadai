<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP課題 Form 入力ページ</title>
</head>
<body>
    <h1>社員情報入力フォーム</h1>    
    <table cellpadding ="5">
        <form action="confirm.php" method = 'post'>
            <tr>
                <td><label for="name">社員名</label></td>
                <td><input type="text" size='8' name='employee_name' id='name' maxlength='8'></td>
            </tr>
            <tr>
                <td><label for="age">年齢</label></td>
                <td><input type="text" size='8' name='employee_age' id='age' maxlength='2'></td>
            </tr>
            <tr>
                <td><label for="department">所属部署</label></td>
                <td>
                    <select name="department" id='department'>
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>            
            </tr>
            <tr>
                <td><input type="submit" value="送信"></td>                
            </tr>
        </form>
    </table>    
</body>
</html>