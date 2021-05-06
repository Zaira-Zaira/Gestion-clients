<?php 
  if(isset($_POST['create'])){
      if($_POST['lastname'] == "" || $_POST['firstname'] == "" || $_POST['age'] == "" || $_POST['mail'] == ""){
          echo "<p class='warning'>Tous les champs sont obligatoires!!!</p>";
      }else {
        try{
          $bdd = new PDO('mysql:host=localhost;dbname=client_ligue;charset=utf8','root','root');
 
          $req = $bdd->prepare('INSERT INTO clients(nom, prenom, age, email)VALUES(?,?,?,?)');
             $req->execute(array(htmlentities($_POST['lastname']), $_POST['firstname'], $_POST['age'], $_POST['mail']));
      }
      catch(Exception $e)
      {
          die('Erreur : '.$e->getMessage());
      }
      header('Location:  ../index.php');
      }
  }

?>