<?php
echo '<h2>Question 2 </h2>';
//1


echo '<hr>';
//2

for ($i=0; $i <= 5; $i++) { 
  for ($j=0; $j <$i ; $j++) { 
    echo "*";
  }
  echo "<br>";
}
for ($x=5; $x > 0 ; $x--) { 
  for ($y=0; $y < $x ; $y++) { 
    echo "*";
  }
  echo "<br>";
}

echo '<hr>';

//3

for ($i=0; $i < 5 ; $i+=2) { 
  for ($j=0; $j <= $i; $j++) { 
    echo'*';
  }
  echo '<br>';
}
for ($x=3; $x > 0 ; $x-=2) { 
  for ($y=0; $y < $x; $y++) { 
    echo'*';
  }
  echo '<br>';
}