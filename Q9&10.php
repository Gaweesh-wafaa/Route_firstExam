<?php

// 9

echo '<h2>Question 9 </h2>';

$string = 'wafaa gaber mohamed';

// if (var_dump(strpos($string, 'c')) === (false) ) {
//   return 'yes';
// }else{
//   return 'no';
// }

var_dump(strpos($string, 'mohamed'));
echo '<br>';
var_dump(strpos($string, 'c'));


echo '<hr>';

// 10

echo '<h2>Question 10 </h2>';

function primeNumbers($number){
  if($number <= 1){
    return 'no';
  }elseif ($number == 2) {
    return 'yes';
  }elseif ($number%2 == 0) {
    return 'no';
  }

  for ($i= 3; $i <= sqrt($number) ; $i++) { 
    if ($number % $i == 0) {
      return 'no';
    }
  }

  return 'yes';
}

echo primeNumbers(8);

