<?php
if (isset($_REQUEST["action"])) {
    if ($_REQUEST["action"]!="form-login" && !isset($_SESSION['userConnect'])){
       header("location:".WEBROOT); 
      exit;
   } 


    if($_REQUEST["action"]=="show-demande"){
        $demandesEtu=findDemandeByEtudiantAndAnnee( $_SESSION['userConnect']['id'],$_SESSION['anneeEncours']['id']);
        loadView("demandes/demande.etu.html.php",["demandesEtu"=>$demandesEtu]);
    }elseif ($_REQUEST["action"]=="new-demande") {
        loadView("demandes/form.html.php");
    }
    elseif ($_REQUEST["action"]=="show-demande-ac") {
      $demandesAc=findAllDemande();
      loadView("demande.ac.html.php",["demandesAc"=>$demandesAc]);
     
    } elseif ($_REQUEST["action"]=="form-add-dem"){
               //Traitement Ajout de la Demande
               $newDemande=[
                "id"=>uniqid(),
                "type"=>$_REQUEST['type'],
                "date"=>date("d/m/Y"),
                "etat"=>"Encours",
                "annee_id"=>$anneeEncours['id'],
                "etudiant_id"=>$etudiantConnect['id'],
                "motif"=>$_POST['motif']
               ];
               addDemande($newDemande);
               header("location:".WEBROOT."/?action=show-demande");
          }
          
        }    
 
 