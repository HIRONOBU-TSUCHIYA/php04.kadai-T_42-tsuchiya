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
                <a href="home.php"><img class="logo" src="img/header_logo.png" alt="ロゴ写真"></a>
            </h1>
            <nav>
            <ul class="main-nav">
                <li><a href="home.php">HOME</a></li>
                <li><a href="select.php">運行データ集計表</a></li>
                <li><a href="contact.php">募集管理表</a></li>
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
            <p>入力画面【配車・管理者用】</p>
        </div>
        <div class="setumeikai ">
            完了データの入力<br>
            運行完了した仕事のデータを入力します。<br>
            事務所に必要なデータを渡します。
        </div>

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
    <div class="form-container">
            <h2>データ入力フォーム</h2>
            <div class="form-group">
                <div class="form-group">
                <label for="date">【 日付 】</label>
                <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                <label for="driver">【運転手】</label>
                <select id="driver_name" name="driver_name" required>
                <option value="">― 選択してください ―</option>
                <option value="小河原一洋">小河原一洋</option>
                <option value="榎本直樹">榎本直樹</option>
                <option value="矢島弘樹">矢島弘樹</option>
                <option value="星克雪">星克雪</option>
                <option value="沼生操">沼生操</option>
                <option value="清水茂">清水茂</option>
                <option value="石井裕治">石井裕治</option>
                <option value="今道輝">今道輝</option>
                <option value="吉田勝幸">吉田勝幸</option>
                <option value="飯田滋樹">飯田滋樹</option>
                <option value="白井善隆">白井善隆</option>
                <option value="山賀佑治">山賀佑治</option>
                <option value="七井克美">七井克美</option>
                </select>
                </div>
                <div class="form-group">
                <label for="company_name">【顧客名】</label>
                <select id="company_name" name="company_name" required>
                <option value="">― 選択してください ―</option>
                <option value="アドダイセン">アドダイセン</option>
                <option value="宣工社">宣工社</option>
                <option value="日本物流開発">日本物流開発</option>
                <option value="サカモト">サカモト</option>
                <option value="東ハト">東ハト</option>
                <option value="セザックス">セザックス</option>
                <option value="山一化成">山一化成</option>
                <option value="DNP狭山">DNP狭山</option>
                <option value="DNP久喜">DNP久喜</option>
                <option value="凸版印刷">凸版印刷</option>
                <option value="菁文堂">菁文堂</option>
                <option value="サンエストライ">サンエストライ</option>
                <option value="近代商事">近代商事</option>
                <option value="P＆Dヒロサワ">P&Dヒロサワ</option>
                </select>
                </div>
                <div class="form-group">
                <label for="price">【 金額 】</label>
                <input type="text" id="price" name="price" required>
                </div>
                <div class="form-group">
                <label for="receipt">【受領書】</label>
                <select id="receipt" name="receipt" required>
                <option value="">― 選択してください ―</option>
                <option value="受領書あり">受領書あり</option>
                <option value="受領書なし">受領書なし</option>
                </select>
                </div>
                <div class="form-actions">
                    <input id="send" type="submit" value="保存">
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
