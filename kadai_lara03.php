<?php //課題1
$name="yuki";
if($name=yuki){
  echo "私は" . $name . "です";}
  else {
  echo  "あなたの名前ではありません";
  }
?>

<?php  //課題2
  for(
   $i=0;$i<=1000;$i++)
   {$total+=$i;}
   echo $total;
?>

<?php //課題3
  $fruit = array("banana","apple","orange","kiwi","melon" );
  foreach ($fruit as $fruit) {
    echo $fruit;
    echo "\n";
  }
 ?>

 <?php //課題4
 /* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i < $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
  ?>
