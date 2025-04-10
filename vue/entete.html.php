<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Vetoplan.fr - <?php echo $titre ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <style type="text/css">

        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
        <ul class="navbar-nav">
            
                <?php if (isLoggedOn()) { ?>
             <li class="nav-item">
                    <a class="nav-link" href="./?action=lstrdv">Mes rendez-vous</a>
                     </li>
                 <li class="nav-item">
                    <a class="nav-link" href="./?action=deconnexion">Deconnexion</a>
                     </li>
                      <li class="nav-item">
                    <a class="nav-link" href="./?action=updmdp">Modifier mon mot de passe</a>
                </li>
                <?php } else {
                    ?>
                     <li class="nav-item">
                    <a class="nav-link" href="./?action=connexion">Connexion</a>
                     </li>

                <?php } ?>
           
        </ul>
    </nav>



    <div class="container p-3 my-3 border" id="corps">
