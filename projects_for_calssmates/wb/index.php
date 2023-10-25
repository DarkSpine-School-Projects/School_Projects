<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
    <title>Rezultat zapytania</title>
</head>
    
<body>
        <?php
            
			$sql = "SELECT * FROM `klienci`;";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$idklienta = $row["idklienta"];
				$imie = $row["imie"] . " " . $row["nazwisko"];
				$miejscowosc = $row["miejscowosc"];
				$Przekierowanie = $row["Przekierowanie"];
		?>

		
</body>
</html>