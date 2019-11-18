<table>
<?php
foreach($listeConference as $uneConference){ ?>
  <tr>
    <?php $Conferencier = ModeleConf::GetConferencierByConference($uneConference[4]); 
    $Salle = ModeleConf::GetSalleByConference($uneConference[2]);
    $place = ModeleConf::PlacesRestantes($uneConference[0]);
     ?>
    <td><?php echo "Titre de la conference : ".$uneConference[1] ?></td>
    <td><?php echo "Theme : ".$uneConference[3]; ?></td>
    <?php foreach($Salle as $uneSalle){ 
    $reste = intval($uneSalle[2]) - intval($place[0]); ?>
    <td><?php echo "Salle : ".$uneSalle[1]; ?></td>
    <td><?php echo "Places restantes : ".$reste; ?></td>
    <?php
    }foreach($Conferencier as $unConferencier){ ?>
        <td><?php echo "Conferencier : ".$unConferencier[1]."  ".$unConferencier[2]; ?></td>
        <td><?php echo "<img src=vues/conferencier/image/".$unConferencier[3].">" ?></td>
        <td><?php echo "Description : ".$unConferencier[4]; ?></td>
        <td><?php echo "Date : ".$uneConference[5]; ?></td>
        <?php if(!isset($_SESSION["conferencier"])&isset($_SESSION["log"])){ 
            $test=ModeleConf::testinscription($_SESSION['id']);
            if ($test=="vide"){ 
                echo "<td><a href=index.php?clt=conf&action=inscription&conf=".$uneConference[0]."&date=".$uneConference[5]."&id=".$_SESSION['id'].">S'inscrire</a></td>"; 
            }else{
                echo "<td>Déjà inscrit</td>";
            } 
        } ?>
    </tr>
   <?php
    } ?>
<?php
} ?>
</table>
