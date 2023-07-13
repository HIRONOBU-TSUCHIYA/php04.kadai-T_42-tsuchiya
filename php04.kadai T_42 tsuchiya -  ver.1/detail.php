<?php

/**
 * [ここでやりたいこと]
 * 1. クエリパラメータ[URL]の確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */
$id = $_GET['id'];

try {
    $db_name = 'tsuchiya_transport'; //データベース名
    $db_id   = 'root'; //アカウント名
    $db_pw   = ''; //パスワード：MAMPは'root'
    $db_host = 'localhost'; //DBホスト
    $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
} catch (PDOException $e) {
    exit('DB Connection Error:' . $e->getMessage());
}

//３．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意
$status = $stmt->execute(); //実行

$result = '';
if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    $result = $stmt->fetch();
}

// 中身の確認↓index.phpからの引用
// var_dump($result);
?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!-- // 中身の確認↓index.phpからの引用 -->
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
                <li><a href="home.php">HOME</a></li>
                <li><a href="index.php">データ入力</a></li>
                <li><a href="contact.html">募集管理</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
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
            <p>更新画面【修正用】</p>
        </div>
        <div class="setumeikai ">
            完了データの更新・修正<br>
            仕事のデータを修正します。<br>
            事務所に最新データを渡します。
        </div>

    <!-- Main[Start] -->
    <form method="post" action="update.php">
    <div class="form-container">
            <h2>データ更新フォーム</h2>
                <div class="form-group">
                <label for="date">【 日付 】</label>
                <input type="date" name="date" value="<?= $result['date'] ?>">
                </div>
                <div class="form-group">
                <label for="driver">【運転手】</label>
                <input type="text" name="driver_name" value="<?= $result['driver_name'] ?>">
                </div>
                <div class="form-group">
                <label for="company_name">【依頼主】</label>
                <input type="text" name="company_name" value="<?= $result['company_name'] ?>">
                </div>
                <div class="form-group">
                <label for="price">【 金額 】</label>
                <input type="text" name="price" value="<?= $result['price'] ?>">
                </div>
                <div class="form-group">
                <label for="receipt">【受領書有無】</label>
                <input type="text" name="receipt" value="<?= $result['receipt'] ?>">
                </div>
                <div class="form-group">
                <label for="check_btn">【受領書回収】</label>
                <input type="checkbox" name="check_btn" value="<?= '☑' ?>">
                </div>
                <!-- <div class="form-group">
                <label for="datetime">【更新日時】</label>
                <input type="inputtime" name="datetime" value="<?= $result['datetime'] ?>">
                </div> -->
                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                <div class="form-actions">
                    <input id="send" type="submit" value="更新">
                </div>
    </form>
    
    </main>

<footer id="footer ">
    <div class="footer ">
        <p>copyrights since from 1976 Tutty's Academy SAITAMA All RIghts Reserved.</p>
    </div>
</footer>


</body>

</html>
