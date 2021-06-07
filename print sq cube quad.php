<!DOCTYPE html>
<html>
<head>
	<title>square, cube, Quad</title>
	<style>
		td,th{
			border: solid 1px;
			border-radius: 2px;
		}
		body{
			background-color: aqua;
		}
		table{
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<center>
		<h1>Tables of Square,Cube and Quad</h1>
		<?php
		  print"<table border=3>";

		  print"<tr>";
		  print"<th>Numbers</th>";
		  print"<th>Square</th>";
		  print"<th>Cubes</th>";
		  print"<th>Quad</th>";
		  print"</tr>";

		  for($i=1;$i<=10;$i++)
		  {
		  	print"<tr>";
		    print"<td>$i</td>";
		    print"<td>";
		    print($i*$i);
		    print"</td>";
		    print"<td>";
		    print($i*$i*$i);
		    print"</td>";
		    print"<td>";
		    print($i*$i*$i*$i);
		    print"</td>";
		    print"</tr>";
		  }


		  print"</table>";


	    ?>
	</center>
	

</body>
</html>