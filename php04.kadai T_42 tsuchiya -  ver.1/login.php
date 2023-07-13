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
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="select.php">管理者専用画面</a></li>
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
            <p>管理画面ログイン</p>
        </div>
        <div class="setumeikai ">
        <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" />
        PW:<input type="password" name="lpw" />
        <input type="submit" value="LOGIN" />
    </form>
        </div>
    <!-- Main[End] -->
        <footer id="footer ">
        <div class="footer ">
        <p>copyrights since from 1976 Tutty's Academy SAITAMA All RIghts Reserved.</p>
        </div>
        </footer>
    
</body>

</html>
