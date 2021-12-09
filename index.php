<?php
	//Если город пустой - покажем форму
	if (isset($_REQUEST['city'])) {
?>
		<form action="" method="GET">
			<input type="text" name="name">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city'])) {
		$city = strip_tags($_REQUEST['age']);
		echo 'Ваш город: '.$age;
	}
?>
