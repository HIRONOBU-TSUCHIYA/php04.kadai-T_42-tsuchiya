<?php

//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//2. $id = $_POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更
$date = $_POST['date'];
$driver_name = $_POST['driver_name'];
$company_name = $_POST['company_name'];
$price = $_POST['price'];
$receipt = $_POST['receipt'];
$check_btn = $_POST['check_btn'];
// $datetime = $_POST['datetime'];
$id = $_POST['id'];

try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=tsuchiya_transport;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }

//３．データ登録SQL作成

// UPDATE テーブル名 SET カラム1 = 1に保存したいもの、カラム2 = 2に保存したいもの,,,, WHERE 条件 id = 送られてきたid
$stmt = $pdo->prepare('UPDATE gs_bm_table
                        SET date = :date,
                            driver_name = :driver_name,
                            company_name = :company_name,
                            price = :price,
                            receipt = :receipt,
                            check_btn =:check_btn
                        WHERE id = :id;');
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':driver_name', $driver_name, PDO::PARAM_STR);
$stmt->bindValue(':company_name', $company_name, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_INT);
$stmt->bindValue(':receipt', $receipt, PDO::PARAM_STR);
$stmt->bindValue(':check_btn', $check_btn, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute(); //実行

if ($status === false) {
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    header('Location: select.php');
    exit();
}