<html>
<head>
	<title>Calculadora</title>
</head>
<body>
	<label>Coloque los valores</label><br>
<form action='calc.php' name='calc.php' method='post'>
	<input type='text'name='c1'><br><br>
	<input type='text'name='c2'><br><br>
	<input type='text'name='c3'><br><br>

    <br>
<label>Selecciona la operacion:
<select name='lista'>
	<option value='suma'>Sumar</option>
	<option value='resta'>Restar</option>
	<option value ='multi'>Multiplicar</option>
	<option value='div'>Dividir</option>

</select>
</label>
<br>
	<input type='submit' value='Ver Resultado'>
</form>
</body>
</html>