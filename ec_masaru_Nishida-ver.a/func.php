<?php

function not_select($cn_ary,$sql){
  $cn = mysqli_connect($cn_ary[0],$cn_ary[1],$cn_ary[2],$cn_ary[3]);
  mysqli_set_charset($cn,'utf8');
  mysqli_query($cn,$sql);
  mysqli_close($cn); 
}

?>