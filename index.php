<form action="/index.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file-1">
	<input type="submit" value="Отправить">
</form>

<?php
  foreach ( $GLOBALS as $key=>$value )
    echo "\$GLOBALS[\"$key\"] == $value<br>";
?>
