<?php 
   function findAllAnnee():array{
     $annees=jsonToArray("annees");
      return  $annees; 

   }

   function findAllClasse():array{
    $classes=[
       [
           "id"=>1,
           "libelle"=>"L1 Dev Web Mobile",
       ],
       [
           "id"=>2,
           "libelle"=>"L2 Dev Web Mobile",
       ],
       [
        "id"=>3,
        "libelle"=>"L1 GL",
      ]
     ];
     return  $classes; 

  }
  

 

  
  function findAllDemande():array{
    $demandes=jsonToArray("demandes");
    $demandeEtu=[];
    foreach ($demandes as  $demande) {
      $etudiantId=$demande['etudiant_id'];
      $etudiant=findEtudiantById( $etudiantId);
      $demandeEtu[]=array_merge($etudiant, $demande);
    }
     return   $demandeEtu; 

  }

 

  function findAnneeEncours():array{
    $annees=findAllAnnee();
    foreach ($annees as  $annee) {
        if ($annee['etat']==1 ) {
            return $annee;
        }
    }
      return null;
   }

   function findDemandeByEtudiantAndAnnee(int $etudiantId,int $anneeId):array|null{
    $demandes=findAllDemande();
    $demandesEtu=[];
    foreach ($demandes as  $demande) {
        if ($demande['etudiant_id']==$etudiantId && $demande['annee_id']==$anneeId ) {
          $demandesEtu[]= $demande;
        }
    }
      return $demandesEtu;
 
   }

   function addDemande(array $newDemande):void{
       arrayToJson($newDemande,"demandes");
   }

?>