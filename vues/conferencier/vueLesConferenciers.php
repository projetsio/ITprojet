<table>
<?php
  foreach($Conferencier as $unConferencier)
    {
?>
  <tr>
    <td><?php echo "Nom : ".$unConferencier[1]; ?></td>
    <td><?php echo "Prénom : ".$unConferencier[2]; ?></td>
    <td><?php echo "<img src=./image/".$unConferencier[3].">".; ?></td>
    <td><?php echo "Description : ".$unConferencier[4]; ?></td>
   </tr>
<?php
}
?>
</table>

