<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         function show_user_name() {
             $user_name = '侍太郎';
             echo $user_name . '<br>';
         }
 
         show_user_name();
         $user_name = '侍花子';
         echo $user_name;
         ?>
     </p>
 </body>
 
 </html>