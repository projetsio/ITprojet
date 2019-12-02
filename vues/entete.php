<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">IT Projet</a>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil <span class="sr-only">Accueil</span></a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Conférence</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="index.php?clt=personne&action=conferencier">Conférenciers</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="index.php?clt=conf&action=listerconf">Toutes les conférences</a>
      </div>
    </li>
<?php
  if (isset($_SESSION["conferencier"])) {
?>
    <li class="nav-item">
      <a class="nav-link" href="index.php?ctl=conf&action=appel">Faire l'appel</a>
    </li>
<?php 
  }
  if(isset($_SESSION["stat"]) && $_SESSION["stat"]==1){
?>
    <li class="nav-item">
      <a class="nav-link" href="index.php?ctl=admin&action=accueil">Administration</a>
    </li>
<?php
  }
?>
</ul>



<?php

if (!isset($_SESSION["log"]))
 {
?>
  <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Se connecter <span class="caret"></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-1">
                      <li class="p-3">
                            <form action="index.php?clt=personne&action=connection" method="POST">
                                <div class="form-group">
                                    <input name="login" placeholder="Identifiant" type="text">
                                </div>
                                <div class="form-group">
                                    <input name="mdp" placeholder="Mot de passe" type="password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                        </li>
                    </ul>
<?php
}
else
{
?>
  <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">

                      <span class="caret">Bonjour <?php echo $_SESSION["log"] ?></span></button>
                    <ul class="dropdown-menu dropdown-menu-right mt-1">
                      <li class="p-3">
                          <span class="nav-text">Statut: 
                            <?php 
                            if (isset($_SESSION["conferencier"]))
                                    {
                                      echo "Conférencier";
                                    }
                                    else
                                    {
                                      echo "Eleve";
                                    }
                            ?>
                              </span>
                      </li>
                      <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./deco.php">Se déconnecter</a>
                      </div>
                    </ul>


<?php
}
?>
</nav>
