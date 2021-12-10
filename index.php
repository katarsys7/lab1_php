/*<?php
if (@$_REQUEST['doGo']) {
  foreach (@$_REQUEST['known'] as $k=>$v) {
    if($v) echo "Вы знаете язык программирования $k!<br>";
    else echo "Вы не знаете языка программирования $k. <br>";
  }
}
?>
*/
<!--
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
Какие языки программирования вы знаете?<br>
<input type=hidden name="known[PHP]" value="0">
  <input type=checkbox name="known[PHP]" value="1"> PHP<br>
<input type=hidden name="known[Perl]" value="0">
  <input type=checkbox name="known[Perl]" value="1"> Perl<br>
<input type=submit name="doGo" value="Go!">
</form>
--></form>
<?php
echo '<pre>';
print_r($_POST);
?>
<form action= "<?=$_SERVER['SCRIPT_NAME']?>"  method="post"> 	
	<p>
		<select name="hero"> 						 			
			<option >Выберите героя</option>
			<option value="Чебурашка">Чебурашка</option>
			<option value="Крокодил Гена">Крокодил Гена</option>
			<option value="Шапокляк">Шапокляк</option>			
		</select>
	</p> 
	<p>
		<input type="submit" value="Отправить">
	</p> 

