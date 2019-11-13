<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
        <body>
          <table border="1" rules="none">
              <?php
              $operators = ['+','-','*','/'];
              for ($i = 1; $i < 37; $i++){
                  echo '<tr>';
                  for ($j = 0; $j < 13; $j++) {
                      $oper = $operators[rand(0,3)];
                      $num1 = rand(1,20); $num2 = rand(1,20); 
                      if ($oper == '/' and $num1%$num2 != 0
                       or $oper == '-' and $num1 - $num2 <= 0
                       or $oper == '*' and $num1 * $num2 > 100) {
                          --$j;
                          continue;
                      }
                  echo "<td align='right'>$num1$oper$num2=________</td>";
                  }
                  echo '</tr>';
              }
              ?>
          </table>
        </body>
</html>
