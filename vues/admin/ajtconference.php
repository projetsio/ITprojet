<form action="#" method="POST">
	Titre : <input type="text" name="titre"><br><br>
	<select name="idsalle">
		<?php 
		$sql="SELECT * FROM salle";
		$result= dbPdo::$pdo->query($sql);
		$liste = $result->fetchAll();
		foreach($liste as $salle){
			echo "<option value=".$salle[0].">".$salle[1]." places : ".$salle[2]."</option>";
		}
		?>
	</select><br><br>
	Theme : <input type="text" name="theme"><br><br>
	<select name="idconfe">
		<?php 
		$sql="SELECT * FROM conferencier";
		$result= dbPdo::$pdo->query($sql);
		$liste = $result->fetchAll();
		foreach($liste as $confe){
			echo "<option value=".$confe[0].">".$confe[1]." ".$confe[2]."</option>";
		}
		?>
	</select><br><br>
	Date : <input type="text" name="date"><br><br>
	<input type="submit">
</form>

<?php
if(isset($_POST["titre"])){
	ModelAdmin::ajtconf($_POST["titre"],$_POST["idsalle"],$_POST["theme"],$_POST["idconfe"],$_POST["date"]);
	header("Location: index.php");
}

