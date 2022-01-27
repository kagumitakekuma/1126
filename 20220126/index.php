<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

  <?php

    $x = 5;
    $y = 2;
    $a = 8;
    $b = 4;
    
  ?>

  <!-- この下で$xの計算をしていきましょう -->
  <?php
    $x = $x+10;
    echo $x;
    
  ?>

  <br>

  <!-- この下で$yの計算をしていきましょう -->
  <?php
    $y = $y*5;
    echo $y;
    
  ?>

  <br>

  <!-- この下で$aの計算をしていきましょう -->
  <?php
    $a = $a+1;
    echo $a;
    
  ?>

  <br>
  
  <!-- この下で$bの計算をしていきましょう -->
  <?php
    $b = $b-1;
    echo $b;
    
  ?>

  <?php
    $name = 'にんじゃわんこ';
    // 'こんにちは！'という文字列と$nameを連結してechoしてください
    echo "こんにちは！{$name}";
    
  ?>

<?php

    $x = 99 * 99;
    $y = 77 * 77;

    // ここにif文を書いていきましょう
    
    if($x>9800){
      echo "変数xは9800より大きいです。";
    }
    if($y >6000){
      echo "変数yは6000より大きいです。";
    }
    
    
  ?>



  <?php
    // $ageという変数に自分の年齢を代入してください
    $age =33;
    if($age>=30){
      echo "あなたは30歳以上です。";
    }elseif($age<30){
      echo "あなたは30歳未満です。";
    }
    
    
  ?>


  <?php
  
    $x = 1071;
    
    // 以下にif-elseif-else文を書いてください
    if($x%3==0 && $x%7==0){
      echo "xは3の倍数かつ7の倍数です。";
    }elseif($x%3==0){
      echo "xは3の倍数ですが7の倍数ではありません。";
    }elseif($x%7==0){
      echo "xは7の倍数ですが3の倍数ではありません。";
    }else{
      echo "xは7の倍数でも3の倍数でもありません。";
    }
  ?>
 <?php

    // 変数$numを定義し、好きな数字を代入してください
    $num = 50;
    // 変数$remainderを定義し、変数$numを3で割った時の余りを代入してください
    $remainder = $num % 3;
    
    // switch文を用いてください
  
    switch ($remainder) {
      case 0:
        echo '大吉です。';
        break;
        
      case 1:
        echo '中吉です。';
        break;
      
      case 2:
        echo '小吉です。';
        break;
        
      default:
        echo '凶です。';
        break;
    }
  ?>

  <?php

    // この下に配列を作ってください
    $colors =array("赤","青","黄");
    echo $colors[0];
    
    $colors[]="白";
    echo $colors[3];
    
  ?>

 <?php

    // この下に連想配列を作ってください
    $scores =array(
      "数学" => "70",
      "英語" => "90",
      "国語" => "80");
      
    $scores["国語"] += 5;
    
    echo $scores["国語"];
    
      ?>

 <?php

    // この下にfor文を書いてください
    for ($i = 51; $i <= 100; $i++) {
      echo $i;
      echo '<br>';
    }

  ?>

<?php
    $i=2;//初期化
  
    while($i<=100){
      if($i%2==0){//偶数だけ
      echo $i;
      echo "<br>";
      }
      $i++;
    }
    
  ?>
<?php


    for($i=1; $i<=1000; $i++){
    if($i>500){
      break;
    }
    echo $i;
    echo "<br>";
    }
  ?>
 <?php

    for($i=1; $i<=1000; $i++){
      if($i%3==0){
        continue;
      }
    echo $i;
    echo "<br>";
      
      
    }
    
    
    
  ?>

    <?php

    $scores = array('数学' => 70, '英語' => 90, '国語' => 80);

    foreach($scores as $key => $value){
      echo $key ."は".$value."点です。";
    }
    
  ?>
  <?php

    $str = 'progate';

    echo strlen($str);
    
    echo '<br>';
    
    $array = array('HTML', 'CSS', 'PHP');

    echo  count ($array);
    
    echo '<br>';
    

    echo rand(10,15);
    
  ?>

  <?php


    function hello(){
      echo "Hello, world!";
    }
    
  
    hello();
    
    echo '<br>';
 
    function printRectangleArea($height,$width){
      echo $height*$width;
    }
    
  
    printRectangleArea(5,10);
    
  ?>

  <?php


    function getCircleArea($radius){
      return $radius*$radius*3; 
    }
    

    
    $circleArea=getCircleArea(5);

    echo $circleArea;
    
  ?>



</body>
</html>
