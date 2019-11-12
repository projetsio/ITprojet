<table>
<?php
foreach($listeConference as $uneConference){
?>
  <tr>
    <td><?php echo "Titre de la conference : ".$uneConference[1] ?></td>
    <td><?php echo "Salle : ".$uneConference[2]; ?></td>
    <td><?php echo "Theme : ".$uneConference[4]; ?></td>
    <?php $Conferencier = ModeleConf::GetConferencierByConference($uneConference[5]); 
    	foreach($Conferencier as $unConferencier)
    	{
    ?>
    <td><?php echo "Conferencier : ".$unConferencier[1]."  ".$unConferencier[2]; ?></td>
    <td><?php echo "<img src=vues/conferencier/image/".$unConferencier[3].">" ?></td>
    <td><?php echo "Description : ".$unConferencier[4]; ?></td>
   </tr>
   <?php
}
?>
<?php
}
?>
</table>

