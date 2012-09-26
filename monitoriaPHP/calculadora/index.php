<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Minha Calculadora</title>
</head>
<body>
	<h1>Calculadora mágica</h1>
	<p>Entre com os valores, escolha a operação matemática e click em enviar.</p>
	<form action="calcular.php">
		
		<input type="text" name="dados[valor1]" id="valor1"><br>
		<input type="text" name="dados[valor2]" id="valor2"><br>
		<select name="dados[tipo]" id="tipo">
			<option value="Escolha">Escolha</option>
			<option value="somar">Somar</option>
			<option value="subtrair">Subtrair</option>
			<option value="multiplicar">Multiplicar</option>
			<option value="dividir">Dividir</option>

		</select>
		<input type="submit" value="Enviar">

	</form>
</body>
</html>