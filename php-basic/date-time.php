<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>DPHP基礎編</title>
</head>
<body>
  <p>
    <?php
    date_default_timezone_set('Asia/Tokyo');

    echo date('Y年n月j日H時i分s秒').'<br>';
    ?>
  </p>
</body>
</html>