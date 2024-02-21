<?php 
 function findAllUsers():array{
    return  jsonToArray("users"); 
 }

 function findAllEtudiant():array{
    $users= findAllUsers();
    $etudiants=[];
    foreach ($users as  $user) {
       if ($user['role']=="ROLE_ETUDIANT" ) {
        $etudiants[]=$user;
       }
      }
      return  $etudiants; 
 
   }

   function findEtudiantById(int $etudiantId):array{
    $etudiants= findAllEtudiant();
    foreach ($etudiants as  $etudiant) {
       if ($etudiant['id']==$etudiantId ) {
           return $etudiant;
       }
      }
      return  null; 
 
   }

   function connexion(string $login,string $pwd):array|null{
    $users=findAllUsers();
    foreach ($users as  $user) {
        if ($user['login']==$login && $user['pwd']==$pwd ) {
            return $user;
        }
    }
      return null;
 
   }