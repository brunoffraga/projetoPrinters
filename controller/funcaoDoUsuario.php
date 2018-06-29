<?php
function imprimir_usuarios($usuarios){
	echo "<table>";
		echo "<tr><td><b>nome</b></td></tr>";
	foreach ($usuarios as $one){
		echo "<tr>"; echo "<td>".$one['nome']."</td>"; echo "</tr>";
	}
	echo "</table>";
}
?>