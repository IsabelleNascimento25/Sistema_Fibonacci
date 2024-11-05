

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculo de Salário</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="index.css" media='screen' href='main.css'>
    
</head>
<body> 
<form method="" action="">
    <h1>Sistema de Fibonacci</h1>
    <br>
    <p>Informe o número</p>
        <input name="num" type="number">
    <br>
  </form>
  <br>
<?php
if (isset($_GET['num'])) {
    $n= $_GET['num'];
    $a = 0;
    $b = 1;
    
    echo "Sequência Fibonacci com $n temos: ";

    if ($n >= 1) {
        echo $a;
    }
    
    if ($n >= 2) {
        echo "<br> " . $b;
    }
    
    for ($i = 2; $i < $n; $i++) {
        $c = $a + $b;
        echo "<br> " . $c;
        $a = $b;
        $b = $c;
    }
}
    ?>


</body>
</html>
