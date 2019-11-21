<?php $conf = ModeleConf::SelectAppel($_SESSION["id"]); ?>
<table>
	<?php foreach($conf as $confe){ ?>
		<tr>
			<td><?php echo "Titre : ".$confe[1]; ?></td>
			<td><?php echo "Theme : ".$confe[3]; ?></td>
			<td><?php echo "Date : ".$confe[5]; ?></td>
			<td><?php echo "<a href=index.php?ctl=conf&action=fappel&id=".$confe[0].">Valider</a>"; ?></td>
		</tr>
	<?php } ?>
</table>