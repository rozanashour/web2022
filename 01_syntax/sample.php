<!-- <?php
//global
// $x = 5;
// $y = 10;
// function mytest(){
//     global $x,$y;
//     $y = $x+$y;
// }
// mytest();
// echo $y;
// ?>
// <?php
// //global2
// $x = 2;
// $y = 10;
// function myfunction(){
//     $GLOBALS['y'] = $GLOBALS['x']+$GLOBALS['y'];
// }
// myfunction();
// echo $y;
//  ?>
//  <?php 
//  //local
//  function myfun(){
//     $x=7;
//     echo "the number is :".$x;
//  }
//  myfun();
 
//  ?> -->

 <?php
//casting 
//  $float_var = 1.5;
//  $int_var= intval($float_var); // التحويل من float الى نوع int
//  echo $int_var;

//  $str_var = strval($float_var); //تحويل من float الى نصوص
//  var_dump($int_var);
//  var_dump($str_var);

//  $str = "hello"; // تحويل النص الى float 
//  $float = floatval($str);
//  var_dump($float);

// دوال النصوص 
 echo strlen ("hello world!");// ايجاد طول السلسلة
 echo str_word_count("rozan ali ashour!"); // ايجاد عدد الكلمات 
 echo strrev("rozan ali ashour!"); //عكس الكلام من اليمين لليسار 
 echo str_replace("world" ,"php"," hello world"); // استبدال كلمة بكلمة اخرى 
 echo strpos("helloworld " , "world"); //قطع جزء من النص 
 echo substr("hello world!,hh",4,7); //عدد الحروف المقطوعة 
 $str = "hello world!,hh";
 echo substr($str,0,strpos("$str",'!')+1);






  ?>




