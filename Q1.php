<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Question 1 </h2>
  <table border="1">
    <?php
    for ($i=0; $i < 10 ; $i++) {
      echo '<tr>';
      for ($j=0; $j < 10 ; $j++) { 
        if ((($i+$j) % 2) == 0) {
          echo '<td style="background-color: black; width: 30px; height: 30px;"></td>';
        }else{
          echo '<td style="background-color: white; width: 30px; height: 30px;"></td>';
        }
      }
      echo '</tr>';
    }
    ?>
  </table>
</body>
</html>