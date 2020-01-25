<?php
  //ログイン中なのでPOSTは維持されている
  session_start();
  //input-data 対照表



  // input_data_check
if (isset($_POST['product'])) {
  if (
    $_POST['name'] != '' && $_POST['detail'] != '' && $_POST['category'] != '' && $_POST['status'] != '' && $_POST['burden'] != '' && $_POST['method'] != '' && $_POST['waitting'] != '' && $_POST['price'] != ''
    ){
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['detail'] = $_POST['detail'];
    $_SESSION['category'] = $_POST['category'];
    $_SESSION['bland'] = $_POST['bland'];
    $_SESSION['status'] = $_POST['status'];
    $_SESSION['burden'] = $_POST['burden'];
    $_SESSION['method'] = $_POST['method'];
    $_SESSION['waitting'] = $_POST['waitting'];
    $_SESSION['from'] = $_POST['from'];
    $_SESSION['price'] = $_POST['price'];
    if ($_POST['nego-flg'] == '1'){
      $_SESSION['nego_flg'] = 1;
      $_SESSION['min_price'] = $_POST['min-price'];
    }else {
      $_SESSION['nego_flg'] = 0;
      $_SESSION['min_price'] = "--";
    }
    header("Location: http://localhost/ec_masaru/php/index02.php");
    exit();
  }
}
  //訂正時のデータ保持
  if ($_SESSION['process-status'] = 'back') {
    $display = [

    ];
  }else {
    $display = [

    ];
  }

?>