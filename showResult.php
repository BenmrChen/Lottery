<?php 
 if (empty($_GET['min']) || empty($_GET['max'])) {
  $rand = rand(1,100);
 } else {
  $min = $_GET['min'];
  $max = $_GET['max'];
  $rand = rand("$min","$max");
 }
?>
<h1>抽獎結果</h1>
<hr> 
<p>恭喜您，抽到的幸運得獎者為<?=$rand?>號</p>