<?php
  if($_POST['submit']) {

    $first = (int) $_POST['first_number'];
    $second = (int) $_POST['second_number'];
    $operation = $_POST['operation'];
    $result;

    if($operation == '+')
      $result = $first + $second;
    else if($operation == '-')
      $result = $first - $second;
    else if($operation == '*')
      $result = $first * $second;
    else if($operation == '/') {
      if($second == 0)
        echo 'На ноль делить нельзя';
      else $result = $first / $second;
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
  <div class="main">
    <form action="" method="post">
      <input type="number" name="first_number" required>
      <input type="number" name="second_number" required>

      <select name="operation" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>

      <input type="submit" name="submit">      
      <span>Результат:</span>

      <?php 
        if($result)
          echo $result;
      ?>
    </form>
  </div>  
</body>
</html>

