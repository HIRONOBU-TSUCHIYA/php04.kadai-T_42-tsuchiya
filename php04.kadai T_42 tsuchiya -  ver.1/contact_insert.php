<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得 = $～ =
$date = $_POST['date'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$kikkake = $_POST['kikkake'];
$douki = $_POST['douki'];
$text = $_POST['text'];


//2. DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=tsuchiya_transport;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO 
              contact_table(id,date,name,email,age,kikkake,douki,text
                  ) VALUES (NULL, :date ,:name, :email, :age, :kikkake, :douki ,:text )");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':kikkake', $kikkake, PDO::PARAM_STR);
$stmt->bindValue(':douki', $douki, PDO::PARAM_STR);
$stmt->bindValue(':text', $text, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．登録が完了した後の処理　index.phpへリダイレクト
header('Location: home.php');

}
?>
