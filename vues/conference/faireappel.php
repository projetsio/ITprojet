<form action="#" method="POST">
<?php foreach($eleve as $uneleve){
	$leleve=ModeleConf::GetEleveById(intval($uneleve[0]));
	echo "<input type=checkbox name=liste[] value=".$leleve[0]."><label>".$leleve[1]." ".$leleve[2]."</label><br>";
} ?>
<input type="submit" name="submit" value="Valider">
</form>
<?php 
if(isset($_POST["submit"])){
	if(isset($_POST["liste"])){
		foreach($_POST["liste"] as $select){
			ModeleConf::Absence($select,$_GET["id"]);
		}
	}
	header("Location: index.php");
}
