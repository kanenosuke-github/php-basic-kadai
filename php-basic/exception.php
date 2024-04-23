<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    try{
      $now = new DateTime();
      $my_date = new DateTime('dummy-date');

      if($now < $my_date){
        throw new Exception('未来の日付は表示できません。');
      }
      echo $my_date->format('Y-m-d') . '<br>';
    }catch(Exception $e){
      echo '例外発生:' . $e->getMessage() . '<br>';
    }finally{
      echo '日付の表示処理が終了しました。';
    }
    ?>
  </p>
</body>
</html>