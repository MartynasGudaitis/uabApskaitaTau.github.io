<?php	

	$name = $_POST['name'];	

	$phone = $_POST['phone'];	

	$email = $_POST['email'];		

	$to = "uabapskaitatau@gmail.com";	

	$subject = "Užsakymas";	

	mail($to, $subject, "Įmonės pavadinimas: " . $name . " telefono numeris: " . $phone . " el. paštas: " . $email);

	echo "<script>window.location = 'http://zaibas.netau.net'</script>";
?>