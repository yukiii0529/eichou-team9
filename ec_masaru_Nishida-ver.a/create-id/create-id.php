<?php
//id生成

//商品登録数/月の整理
//読み込み比較
$date = date('n');
$fp = fopen("text/date_m.txt", "r");
$line = fgets($fp);
fclose($fp);

//月で初めての登録かどうか
if ($date == $line) {
  //商品登録数/月をカウント
  $fp = fopen("text/cnt.txt", "r");
  $cnt = fgets($fp);
  $cnt++;
  fclose($fp);
  $fp_cnt = fopen("text/cnt.txt", "w");
  fwrite($fp_cnt, $cnt);
  fclose($fp_cnt);


}else {
  //商品登録数/月を初期化
  $fp_n = fopen("text/date_m.txt", "w");
  fwrite($fp_n, $date);
  fclose($fp_n);
  $cnt = 1;
  $fp_cnt = fopen("text/cnt.txt", "w");
  fwrite($fp_cnt, $cnt);
  fclose($fp_cnt);
}
//id用の部分データ生成
//月
$num = date('n');
$format = "%X";
$date_m = sprintf($format,$num);
//年
$date_y = date('y');
//商品登録数/月
$format = "%06X"; //六桁で0埋め
$id_eice = sprintf($format,$cnt);
// $id_eice = str_pad($num,6,0,STR_PAD_LEFT); 

echo $date_m."<br>";
echo $date_y."<br>";
echo $id_eice."<br>";
//合成
$id = $date_m.=$date_y.=$id_eice;
echo $id;

?>