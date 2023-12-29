<?php
/** RÉCUPÉRATION ET AFFICHAGE DE LA LISTE DE RÉSULTATS */
$search = $_POST['search'];

$results = array();

$file = fopen("fichier.txt", "r");
while (!feof($file)) {
	$line = fgets($file);
	if (strpos($line, $search) !== false) {
		$results[] = $line;
	}
}
fclose($file);

		if (count($results) > 0) {
		
			echo "<tbody><tr>";
			foreach ($results as $result) {
			echo "<td>" . $result . "</td>";
			}
			echo "</tr></tbody>";
		} else {
			echo "Aucun résultat trouvé.";
		}
?>