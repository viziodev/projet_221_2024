 <?php 
 if (isset($_REQUEST["action"])) {
       if ($_REQUEST["action"]=="logout") {
            unset( $_SESSION['userConnect']);
            unset($_SESSION['anneeEncours']);
            session_destroy();
            header("location:".WEBROOT);
          } elseif($_REQUEST["action"]=="form-login"){
                   $login=$_REQUEST['login'];
                    $pwd=$_REQUEST['pwd'];
                    $userConnect=connexion($login,$pwd);
                    if( $userConnect!=null){
                        $_SESSION['anneeEncours']=findAnneeEncours();
                        $_SESSION['userConnect']=$userConnect;
                         if ( $userConnect['role']=="ROLE_ETUDIANT") {
                          header("location:".WEBROOT."/?controller=demande&action=show-demande");
                         }else if ( $userConnect['role']=="ROLE_AC") {
                          header("location:".WEBROOT."/?controller=demande&action=show-demande-ac");
                         } 
                    }else{
                      header("location:".WEBROOT);
                    }
                }
              }else{
                   //Page par defaut
                   loadView("securite/login.html.php",[],"connexion");
              }    
       
       


       
     
     ?>