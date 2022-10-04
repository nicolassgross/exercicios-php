<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela LOOPS</title>
</head>
<body>

	<h1>Tabela LOOPS</h1>
<!-- Criação da tabela   tr = linha   td =  coluna -->
	<table border="1"> 
		<tr bgcolor="#ccc">
			<td width="100">#ID</td>
			<td>Nome</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Nicolas</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Adriano</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Bruno</td>
		</tr>
		<tr>
			<td>3</td>
			<td>Vitor</td>
		</tr>
	</table>

<h3>Criar linhas da tabela com While</h3>

<table border="1">
	<?php
		$id = 0;
		while ($id <= 10) {
			echo"<tr>
					<td> $id </td>
				</tr>";
			$id++;
		}

	?>
</table>
	
<h3>Forma com FOR</h3>

<table border="1">
	<?php
		for ($x=0; $x <= 10 ; $x++) { 
		
			echo"<tr>
					<td> $x </td>
				</tr>";
		}

	?>
</table>

<h3>Tabela com nome e id usando loop FOR</h3>

<table border="1">
	<?php
		for ($x=0; $x <= 10 ; $x++) { 
            $x = $x + 1;
		}
        echo "<tr>
                <td> $id </td>
                <td> $pessoas </td>
            </tr>";
	?>
</table>
	

</body>
</html>