<!DOCTYPE html>
<html lang="ja">
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutty's Accademy</title>
    <link rel="icon" type="img/ping" href="img/favicon.png">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- 最初の設定は終わっています　必要な方は触ってください -->

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
                <!-- <li><a href="home.php">HOME</a></li> -->
                    <!-- <li><a href="login.php">LOGIN</a></li> -->
                    <form name="form1" action="login_act.php" method="post">
                    <li>ID:<input type="text" name="lid" />
                        PW:<input type="password" name="lpw" />
                        <input type="submit" value="LOGIN" /></li>
                    </form>
                    <!-- <li><a href="index.php">データ入力画面</a></li>
                    <li><a href="select.php">管理者専用画面</a></li>
                    <li><a href="contact.php">CONTACT</a></li> -->
                </ul>
            </nav>
        </div>
    </header>

    <div class="mainbg">
        <img src="img/mainbg.jpg" alt="メイン写真">
        <h1>～誰でもわかる運送業界～</h1>
        <p>運送を救う「GEEK」になろう!!</p>
    </div>

    <!-- /#header -->

    <!-- コンテンツ部分 -->
    <main>
        <div class="english-title">
            <p>ABOUT</p>
        </div>
        <div class="japanese-title">
            <p>ツッチーズアカデミーについて</p>
        </div>
        <div class="school">
            <h3>ツッチーズアカデミーはTuttyの経営している運送会社です。</h3>
            <p>現在、運送業界の抱えている問題点や課題を、できるだけ多くの人に知っていただきたい。</p>
            <p>普段の生活には物がある、影ながら物を運ぶことでみんなの当たり前の生活を守っています。</p>
        </div>
        <div class="p1">
            <p>そんな思いから、運送会社「土屋運輸株式会社」は、昭和41年に動きだしました。</p>
        </div>
        <div class="p2">
            <p>お荷物の集荷・配送・仕分けはもちろんのこと、</p>
            <p>遠距離荷物の手配・保管管理もサポートします。</p>
        </div>

        <div class="history">
            <img src="img/history-218.jpg" >
        </div>

        <div class="english-title2">
            <p>PROBLEM</p>
        </div>
        <div class="p3">
            <p>日々の生活を滞りなく回している血流「物流」の水面下にある問題点や</p>
            <p>まだ具現化していない、今後間違いなく出てくるであろう問題点を列挙しました。</p>
        </div>

        <div class="course">
            <div class="kensyu"><img src="img/course_01.jpg" alt="研修" width="600" height="400"></div>
            <div class="naiyou">
                <h3>原油高による燃料費の高騰</h3>
                <p>ロシア・ウクライナ問題や昨今の円安の影響を受けて</p>
                <p>驚く勢いで年々、燃料費・派生品費が高騰し続けています。</p>
                <p>日常的に大量の軽油を使用する為、業界全体に大きな影響が</p>
                <p>出ています。お客様とのこまめな価格交渉ができない場合</p>
                <p>ほとんどの利益が燃料費によって削られてしまいます。</p>
            </div>
        </div>

        <div class="course2">
            <div class="naiyou2">
                <h3>慢性的な人材不足問題</h3>
                <p>常に業界が抱えている問題点とも言えます。</p>
                <p>運行状況や付帯作業、また渋滞等で拘束時間が長くなって</p>
                <p>しまい運転手離れの傾向が強くなってきています。</p>
                <p>今後は「働き方改革」も大きな影響があると思われます。</p>
                <p>DXを取り入れ、仕事の効率化を図ることが解決への一歩です。</p>
            </div>
            <div class="kensyu2"><img src="img/course_02.jpg" alt="研修2" width="600" height="400"></div>
        </div>

        <div class="course3">
            <div class="kensyu3"><img src="img/course_03.jpg" alt="研修3" width="600" height="400"></div>
            <div class="naiyou3">
                <h3>都市の宅地化による駐車場不足</h3>
                <p>現在、都市部では広い土地が出てくると宅地化（マンション）</p>
                <p>が進んでいます。東京を中心に埼玉・千葉・神奈川では</p>
                <p>顕著に大型車両の置ける駐車場が不足してきています。</p>
                <p>同県内でも、駐車場単価の地域差が大きくなってきています。</p>
                <p>県南では大型車を置けるスペース自体なくなっている現状です。</p>
            </div>
        </div>

        <!-- NEWS部分 -->

        <div class="english-title3">
            <p>SOLUTION</p>
        </div>
        <div class="japanese-title3">
            <p>改善案</p>
        </div>

        <div class="allnews">
            <div class="news1">
                <div class="box">
                    <img src="img/news_img.jpg" alt="dora">
                    <img src="img/kaiketsu-3.jpg" alt="eco">
                </div>
                <h3>エコ運転の推奨と実施</h3>
                <p>日々の運転時のアクセル／ブレーキを意識する</p>
                <p>ことで燃費を向上させることができます。</p>
                <h2>「車にも地球にも優しい運転を」</h2>
            </div>
            <div class="news2">
                <div class="box">
                    <img src="img/news_img.jpg" alt="dora">
                    <img src="img/truck_one-root.jpg" alt="roumu">
                </div>
                <h3>働き手目線での効率化</h3>
                <p>会社目線ではなく働き手目線での働き方の</p>
                <p>選択をすることで仕事の効率化をはかろう！！</p>
                <h2>「自分サイズのＤＸを！！」</h2>
            </div>
            <div class=" news3 ">
                <div class="box">
                    <img src="img/news_img.jpg" alt="dora">
                    <img src="img/kaiketsu_2.jpg" alt="share">
                </div>
                <h3>所有からシェアへ</h3>
                <p>中長期目線で業界問題を解決するには協力して</p>
                <p>助け合うことが重要になってきます。</p>
                <h2>「皆で管理・共有のスクラムを」</h2>
            </div>
        </div>

        <!-- MORE部分-->
        <div class="more ">
            <p>MORE</p>
        </div>

        <!-- Access部分  -->
        <div class="access1 ">
            <h1>ACCESS</h1>
            <p>会社情報</p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3234.7501037495913!2d139.65261431876803!3d35.83060648816376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018eaf84cebd7f3%3A0xe6f1ee9701f43843!2z44CSMzM1LTAwMzgg5Z-8546J55yM5oi455Sw5biC576O5aWz5pyo5YyX77yS5LiB55uu77yR77yQ4oiS77yU!5e0!3m2!1sja!2sjp!4v1682656036637!5m2!1sja!2sjp "
            width="1200 " height="300 " style="border:0; " allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>

        <div class="access2 ">
            <h1>会社名　　　　　　土屋運輸株式会社</h1>
            <p> 事務所所在地　　　〒335-0038　埼玉県戸田市美女木北2-10-4
                <br> TEL　　　　　　　　048-421-7313
                <br> FAX　　　　　　　　048-421-7314
                <br> MAIL　　　　　　　h.tsuhiya@tsuchiya-transport.co.jp
            </p>
        </div>

        <!-- コンタクト部分 -->
        <div class="contact ">
            <p>CONTACT</p>
        </div>
        <div class="setumeikai ">
            <h3>人材募集に関するお問い合わせ</h3>
            <h4>ぜひ1度、大型車に乗ってみませんか？有望な管理職も随時募集中。
                <br> 未経験の方のお問い合わせもお気軽にどうぞ。お待ちしております。
                <br></h4>
        </div>

        <!-- フォーム部分 -->
        <form method="post" action="contact_insert.php">
        <div class="form-container">
            <h2>データ入力フォーム</h2>
            <div class="form-group">
                <div class="form-group">
                <label for="date">【 日付 】</label>
                <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                <label for="name">【 名前 】</label>
                <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                <label for="email">【メール】</label>
                <input type="text" id="email" name="email" required>
                </div>
                <div class="form-group">
                <label for="age">【 年齢 】</label>
                <input type="text" id="age" name="age" required>
                </div>
                <div class="form-group">
                <label for="kikkake">【募集媒体】</label>
                <select id="kikkake" name="kikkake" required>
                <option value="">― 選択してください ―</option>
                <option value="看板">看板</option>
                <option value="ＨＰ">ＨＰ</option>
                <option value="運転手の紹介">運転手の紹介</option>
                <option value="ＳＮＳ">ＳＮＳ</option>
                <option value="その他">その他</option>
                </select>
                </div>
                <div class="form-group">
                <label for="douki">【志望動機】</label>
                <select id="douki" name="douki" required>
                <option value="">― 選択してください ―</option>
                <option value="現在もトラックに乗っている">現在もトラックに乗っている</option>
                <option value="トラックに乗ってみたい">トラックに乗ってみたい</option>
                <option value="物流に関連する仕事をしたい">物流に関連する仕事をしたい</option>
                <option value="将来的には管理職になりたい">将来的には管理職になりたい</option>
                </select>
                </div>
                <div class="form-group">
                <label for="text">【 備考 】</label>
                <input type="textarea" id="text" name="text" required>
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

    <!-- ここから上にコードを書く -->
    <!-- この中に記述していく -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js "></script>
    <script src="js/main.js "></script>
</body>

</html>