<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">    
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
 
 <?php
   mb_internal_encoding("utf8");
   $pdo=new PDO("mysql:dbname=lesson02; host=localhost;","root","mysql");
   $stmt= $pdo->query("select * from 4each_keijiban");
 

 ?>

    <img src="4eachblog_logo.jpg">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4aechについて</li>
            <li>登録フォームについて</li>
            <li>問い合わせ</li>
        </ul>
    </header>
    
    <main>
    <div class="left">
     <h1>プログラミングに役立つ掲示板</h1>
     <div class="left_up">
      <h2>入力フォーム</h2>
        <form method="post" action="insert.php">
     <div>
      <label>ハンドルネーム</label>
      <br>
      <input type="text" class="text" size="35" name="handlename">
      </div>

       <div>
       <label>タイトル</label>    
       <br>
       <input type="text" class="text" size="35" name="title">
       </div>

       <div>
        <label>コメント</label>
         <br>
       <textarea cols="35" rows="7" name="comments"></textarea>
       </div>
   
     <div>
       <input type="submit" class="submit" value="投稿する">   
       </div>
       </form>   
     </div>

     <?php
     
     while($row=$stmt->fetch()){
     
      echo "<div class='left_down_inbox'>";
      echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
      echo $row['comments'];
      echo"<div class='handlename'>posted by".$row['handlename']."</div>";
     echo "</div>";
     echo "</div>";
     }
      
     ?>
            

       </div>
        
        <div class="right">
        
        <h4>人気の記事</h4>
        <li>PHPオススメ本</li>
        <li>PHP myAdminの使い方</li>
        <li>今人気のエディタ</li>
        <li>HTMLの基礎</li>
        
            
        <h4>オススメリンク</h4>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
        
        <h4>カテゴリ</h4>
        <li>HTMl</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>Javascript</li>
        
        </div>
        </main>

    <footer>
    copyright internous │　4each blog is the one which provides A to Z about programming
    </footer>
</body>
</html>