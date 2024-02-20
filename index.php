
<?php

// $number = 15;

// for($i = 1 ; $i<=$number ; $i++ ){

//   if ($i % 2 === 0){

// continue;
//   }else {

//     echo $i."<br>" ;
//   }


// }


// $number = 1;

// while( $number<= 20){
 
//   if ($number % 2 === 0){

//     continue;
//       }else {
    
//         echo $number++."<br>" ;
//       }
// }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .chessboard {
      display: grid;
      grid-template-columns: repeat(8, 50px);
      grid-template-rows: repeat(8, 50px);
    }

    .chessboard div {
      width: 50px;
      height: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      font-weight: bold;
    }

    .even {
      background-color: #eee;
    }

    .odd {
      background-color: #333;
    }
  </style>
</head>
<body>
  <div class="chessboard">
    <?php
      // for ($i = 0; $i < 8; $i++) {
      //   for ($j = 0; $j < 8; $j++) {
      //     $class = ($i + $j) % 2 === 0 ? 'even' : 'odd';
      //     echo "<div class='$class'></div>";
      //   }
      // }
    ?>
  </div>
</body>
</html> -->
<?php

// echo 'hello worldd';

// function sayhello ($name){

//   echo ' heloo' ."<br>". $name;

// }

// sayhello('shehab');
// $epoch = time();

// function welcomeback ($name , $currenttime){

//   echo ' welcome back ' . $name  .$currenttime ;


// }

// welcomeback('shehab' ,gmdate('r', $epoch) );

// function prettierarray( array $input){
// echo "<pre>";
// print_r ($input);
// echo "</pre>";
// }

// prettierarray(['shehab' , 'shaher' , 'shady']);

// function factorial($number){

//   if ($number == 0){
//     return;

//   }
// else{

//   $output = $number*factorial($number-1) ;
//   return $output;
// }


// }

// echo $output=factorial(5);


// header('content-type: text/html ; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo 'my first php' ?></title>
  </head>
  <body>
    <!-- <div> <?php  echo 'we love' ?></div> -->
    <div></div>
  </body>
</html>

<?php

  // var_dump(100); 
  // echo 'hello "elzero" \\\\  we love "$$php"';

  // Needed Output
  // Hello "Elzero" \\ """ We Love "$$PHP"

// echo 'we' ."<br>". 'love'. "<br>". 'elzero'; 
// echo "<pre>";
// echo <<< 'now'
// Hello "'Elzero'"
// We Love $Programming$
// Languages Specially "PHP"
// now;
// echo "</pre>";

// $something = "Programming";

// echo <<<here
// Hello \PHP\
// We Love $something
// here;

// echo (bool)"Hello PHP";
// echo '<br>';
// echo gettype((int) "Hello PHP") ;
// echo "<pre>";
// print_r([
//   'frontend' => [

//     'html' , 'css' , 'js' => [

//    'vuejs' => [

//      'v2' , 'v3'
//    ] ,
//    [

//     'reactjs' , 'svelte'
//    ]
//     ]
//   ]
//   ]);
//   echo "</pre>";


// $username = 'shehab';

// echo $username;
 

// echo include("shehab.php");

// $a = 'shehab';
// $$a = 'ali';

// echo $$a ; 
// echo '<br>';
// echo $a ; 
// echo '<br>';

// echo $shehab; 
// echo '<br>';

// echo "heelo {$$a}";
// echo '<br>';

#assign by value 

// $a = 'ali';
// $b = &$a;
// $b = 'elzero';
// echo $b ;
// echo '<br>';
// echo $a ;
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";
// define('c','shehab');
// echo c;

// $a = 200;
// $b = &$a;
// $a = 100;

// echo $b; // 

// echo "<pre>";

// echo$_SERVER ["CONTEXT_DOCUMENT_ROOT"] ;


// echo "</pre>";
// echo "<pre>";

// echo $_SERVER ["SERVER_NAME"] ;


// echo "</pre>";
// echo "<pre>";

// echo $_SERVER ["SYSTEM_ROOT"] ;


// echo "</pre>";


/*
abstract
and
array
as
break
callable
case
catch
class
clone
*/

// echo  __LINE__ ;

// echo "<br>";
// echo  __FILE__ ;

// echo "<br>";

// echo gettype(-'-100') ;

// var_dump( 100 === '100');
// var_dump( 100>50 xor 10>20);

// $x = 'shehab' . " ";
// $x .= 'othman' . " ";
// $x .= 'hassan';


// echo $x ;

// $x1 = [1 => 'a' , 2 => 'b'];
// $x2 = [3 => 'c' , 4 => 'd'];

// $x3 = $x1 + $x2;

// echo "<pre>";
// print_r($x1 + $x2) ;
// echo "</pre>";

// echo "<pre>";
// var_dump($x1 == $x2) ;
// echo "</pre>";

// $x = 4;

// $y = @$x or die ('the var not exist');
// echo "<br>";
// echo $y ;

$x= file('shehab.index') or die('a7a y3m');

echo $x;

include ('shehab.php');