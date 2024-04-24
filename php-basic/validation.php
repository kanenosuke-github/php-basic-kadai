<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    $name = '侍太郎';
    $password =12345678 ;
    $email ='samuraitarou@example.com' ;
    $gender = '男性' ;

    if(empty($name)){
      exit('氏名を入力してください。');
    }

    if (mb_strlen($password) < 8) {
      exit('パスワードは8文字以上にしてください。');
  }
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      exit('メールアドレスの入力形式が正しくありません。');
    }
    if(!in_array($gender,['男性','女性','その他'])){
      exit('正しい性別を指定してください。');
    }
    echo 'バリデーションの結果、問題ありませんでした。';
    ?>
  </p>
</body>
</html>