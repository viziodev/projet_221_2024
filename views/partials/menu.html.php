<nav>
        <div class="nav">
            <div class="im">
                <img src="<?=WEBROOT;?>/img/avatar.jpg" alt="" class="petit">
                <div class="sp">
                    <span class="nom"><?=$_SESSION['userConnect']['prenom']." ".$_SESSION['userConnect']['nom'] ?></span>
                    <span class="date"><?=$_SESSION['anneeEncours']['libelle']?></span>
                </div>
            </div>
            <div class="etu">
                <img src="<?=WEBROOT;?>/img/logo.png" alt="" class="logo">
                <span class="etudiant"> <?=$_SESSION['userConnect']['role']?></span>
            </div>
        </div>
        <!-- <fieldset> -->
        <?php  if ( $_SESSION['userConnect']['role']=="ROLE_ETUDIANT"):  ?>
            <legend align="center">L2 GLRS-A</legend>
        <?php endif  ?> 
            <div class="demande">
       
            <?php  if ( $_SESSION['userConnect']['role']=="ROLE_AC"):  ?>
               <div class="de">
                    <img src="<?=WEBROOT;?>/img/demande.jpg" alt="" class="logo1">
                    <a href="<?=WEBROOT;?>/?controller=demande&action=show-demande-ac" class="dee">
                        <span >Toutes les Demandes</span>
                    </a>
                </div>
             <?php endif  ?>
             <?php  if ( $_SESSION['userConnect']['role']=="ROLE_ETUDIANT"):  ?>
                <div class="de">
                    <img src="<?=WEBROOT;?>/img/demande.jpg" alt="" class="logo1">
                    <a href="<?=WEBROOT;?>/?controller=demande&action=show-demande" class="dee">
                        <span >Mes Demandes</span>
                    </a>
                </div>
                <div class="de">
                    <img src="<?=WEBROOT;?>/img/a.jpg" alt="" class="logo1">
                    <a href="<?=WEBROOT;?>/?controller=demande&action=new-demande" class="dee">
                        <span >Nouveau</span>
                    </a>
                </div>
                <?php endif  ?>
                <div class="de">
                    <img src="<?=WEBROOT;?>/img/a.jpg" alt="" class="logo1">
                    <a href="<?=WEBROOT;?>/?controller=securite&action=logout" class="dee">
                        <span >Deconnexion</span>
                    </a>
                </div>
            </div>
        <!-- </fieldset> -->
    </nav>