<?php
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>社員情報入力フォームを作成しよう</title>
</head>
<body>
  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <td>社員名</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $age; ?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department ?></td>
    </tr>
  </table>

  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>
</html>