<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="background-color: <?php if(isset($_COOKIE['background_color'])) echo $_COOKIE['background_color']; ?>">

  <h2>Question 11 </h2>
  <form action="handelform.php" method="post">
    <label for="color">choose background color</label>
    <select name="background_color" id="color">
      <option value="">choose color</option>
      <option value="red">red</option>
      <option value="yellow">yellow</option>
      <option value="blue">blue</option>
      <option value="green">green</option>
    </select><br> <br>
    <button type="submit" name="submit">submit</button>
  </form>
</body>
</html>

