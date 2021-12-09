<form action="/index.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file-1">
	<input type="submit" value="Отправить">
</form>

<?php
print_r($_FILES['file-1']);
?>
