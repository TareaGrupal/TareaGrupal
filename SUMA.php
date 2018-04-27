

<html>
<head>
<title>ejemplo</title>
</head>

<body>
<form name="form1" method="post" action="ejemplo6.php">
valor1: <input name="sum1" type="text" ><br>
valor2: <input name="sum2" type="text" ><br>
valor3: <input name="sum3" type="text" ><br>
<input type="submit" name="submit" value="sumar" ><br>
</form>
<br><br>
TOTAL :
<?php

$sum1=$_POST['sum1'];
$sum2=$_POST['sum2']; 
$sum3=$_POST['sum3']; 

$suma=$sum1 + $sum2 + $sum3;

echo $suma;

?> 
</body>
</html>