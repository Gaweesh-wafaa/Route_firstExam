<?php

echo '<h2>Question 3 </h2>';


$array = [2,4,3,1,6,7,5,8,0,9];

for ($i=0; $i < count($array) ; $i++) { // $i = 0 -> 9 times
  for ($j=0; $j < count($array)-1 ; $j++) {  // $j = 0 -> 8
    if ($array[$j] > $array[$j+1]) {      // 1 -> 9
      $asc = $array[$j];
      $array[$j] = $array[$j+1];
      $array[$j+1] = $asc;
    }
  }
}

echo 'ASC aray is :';
print_r($array);
echo '<br>';

for ($i=0; $i < count($array) ; $i++) { 
  for ($j=0; $j < count($array)-1 ; $j++) { 
    if ($array[$j] < $array[$j+1]) {
      $des = $array[$j];
      $array[$j] = $array[$j+1];
      $array[$j+1] = $des;
    }
  }
}
echo 'DESC aray is :';
print_r($array);

echo '<hr>';

// 4
echo '<h2>Question 4 </h2>';

$sum = array_sum($array);

$count = count($array);

echo "average is :" . $sum/$count;

echo '<hr>';

// 5
echo '<h2>Question 5 </h2>';


for ($i=0; $i < 10 ; $i++) { 
  if($array[$i] % 2 == 0){
    unset($array[$i]);
  }
}

print_r($array);

echo '<hr>';

// 6

echo '<h2>Question 6 </h2>';


if (10 > 30 && 10 > 20) {
  echo 'maximum number is 10';
} elseif(20 > 10 && 20 > 30) {
  echo 'maximum number is 20';
}else{
  echo 'maximum number is 30';
}

echo '<hr>';

// 7
echo '<h2>Question 7 </h2>';

$date = date_create('2012-12-21');
$nDate = date_add($date,date_interval_create_from_date_string('1 month'));
print_r($nDate);

echo '<hr>';

// 8
echo '<h2>Question 8 </h2>';
$d = date_create();

echo date_format($d, 'm')-1;

