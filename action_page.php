<?php


function show($tab)
{
	echo "<table><tr><th>Nom</th><th>Valeur</th></tr>";
	foreach( $tab as $cle => $val)
	{
		echo "<tr><th>$cle</th><td>";
		if (is_array($val))
			show($val);
		else 
			echo "$val"; 
		echo "</td></tr>";
	}
	echo "</table>";
}


echo "<p>Donn&eacute;es envoy&eacute;es par GET: </p>";
show($_GET);


?>

