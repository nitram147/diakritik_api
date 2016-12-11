<?php
/* +----------------------------------+ */
/* |          Diakritik_api           | */
/* |            index.php             | */
/* |   (c)copyright 2016 nitram147    | */
/* +----------------------------------+ */
if(empty($_POST) && empty($_GET)){
	echo '
			<html>
			<title>Nitram147 - Pridaj diakritiku</title>
			<style>
			textarea{
				width:80%;
				height: 50%;
				border-radius: 8px;
				position: relative;
				text-align: center;
				padding-top: 20px;
				padding-left: 15px;
				padding-right: 15px;
				padding-bottom: 20px;
			}
			input{
				margin-top: 20px;
				width: 80%;
				height: 30px;
				border-radius: 8px;
			}
			</style>
			<center>
			<form action="#" method="post">
				<textarea name="text" placeholder="Nejaky text ..."></textarea><br>
				<input type="submit" name="posli" value="posli">				
			</form>
			</center>
			</html>

	';

}else{
	header("Access-Control-Allow-Origin: *");
	$textik = "";
	if(isset($_POST['posli'])){$textik = $_POST['text'];}else{$textik = $_GET['text'];}

	$textik = urlencode($textik);

	$obsah = file_get_contents("http://diakritik.korpus.sk/?method=4gram&text=".$textik);
	
	function najdi_medzi($kde, $zaciatok, $koniec){
	    $kde = ' ' . $kde;
	    $pozicia = strpos($kde, $zaciatok);
	    if ($pozicia == 0){return '';}
	    $pozicia += strlen($zaciatok);
	    $dlzka = strpos($kde, $koniec, $pozicia) - $pozicia;
	    return substr($kde, $pozicia, $dlzka);
	}

	$sdiakritikou = najdi_medzi($obsah, '<div class="recinside">', '</div>');


	if($_GET['plugin'] != "ano"){echo '<meta charset="UTF-8">';}
	echo $sdiakritikou;
	

}
//http://diakritik.korpus.sk/
?>
