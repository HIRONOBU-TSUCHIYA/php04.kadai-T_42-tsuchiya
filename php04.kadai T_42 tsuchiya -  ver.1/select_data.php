<?php

// funcs.phpを読みこむ
require_once('funcs.php');

//1.  DB接続します
try {
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=tsuchiya_transport;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError'.$e->getMessage());
}

//２．データ取得SQL作成 ※select*fromのみ
$stmt = $pdo->prepare("SELECT * FROM  gs_bm_table ");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる ※この部分を変えると変化する
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<tr>";
    $view .='<td>'. h($result['date']) .'</td>'
    .'<td>'. h($result['driver_name']).'</td>' .'<td>'.h($result['company_name']) 
    .'</td>'.'<td>'.h($result['price']).'</td>'.'<td>'.h($result['receipt']).'</td>'
    .'<td>'.h($result['check_btn']).'</td>';
    // クロスサイトスクリプティング対策
    $view .= '<td>'.'<a href="detail.php?id='. $result['id'] .'">';
    $view .= '[更新]';
    $view .= '</a>'.'</td>';
    $view .= '<td>'.'<a href="delete.php?id='. $result['id'] .'">';
    $view .= '[削除]';
    $view .= '</a>'.'</td>';
    $view .= "</tr>";
  }
// sqlはギットハブにエクスポートしてファイルを挿入する
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutty's Accademy</title>
    <link rel="icon" type="img/ping" href="img/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/new.css">
</head>

<body>
    <!-- この中に記述していく -->
    <!-- ここから下にコードを書く -->
    <header>
        <div class="head">
            <h1>
                <a href="index.html"><img class="logo" src="img/header_logo.png" alt="ロゴ写真"></a>
            </h1>
            <nav>
                <ul class="main-nav">
                    <li><a href="index.php">入力画面</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="problem.html">PROBLEM</a></li>
                    <li><a href="news.html">SOLUTION</a></li>
                    <li><a href="access.html">ACCESS</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="mainbg">
        <img src="img/mainbg.jpg" alt="メイン写真">
        <h1>～誰でもわかる運送業界～</h1>
        <p>事務作業を救う「GEEK」になろう!!</p>
    </div>

    <!-- /#header -->

    <!-- コンテンツ部分 -->
    <main>
        <!-- コンタクト部分 -->
        <div class="contact ">
            <p>確認画面【事務処理用】</p>
        </div>
        <div class="setumeikai ">
            集計データ
        </div>
<div>
    <div class="view">
      <table>
        <tbody>
          <?= $view ?>
        </tbody>
      </table>
        </div>
</div>
<!-- Main[End] -->
<footer id="footer ">
    <div class="footer ">
        <p>copyrights since from 1976 Tutty's Academy SAITAMA All RIghts Reserved.</p>
    </div>
</footer>

</body>
</html>
