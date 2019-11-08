<div class="container">
<?php

if(isset($_GET['clt']))
{
  $control = $_GET['clt'];
  switch($control)
  {
    case 'personne':
    include "controleur/cltPersonne.php";
    break;

    case 'conf':
    include "controleur/cltConf.php";
    break;
  }
}
?>
</div>