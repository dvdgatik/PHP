<html>
<head>
	<title></title>
</head>
<body>
	<!--me envia los datos a procesar
	La manera de obtener datos mediante el envio de un documento a tro son:
	Post:Te envia los datos internamente
	Get:Te envia datos mediante la url
	!-->

	<form action='procesar.php' method='post' name='frm'>
<input type='text' name='nombre'>
<input type='text'name='apellido'>
<input type='password'name='pw'>
<input type='submit' value=	'Enviar'>
	</form>

</body>
</html>