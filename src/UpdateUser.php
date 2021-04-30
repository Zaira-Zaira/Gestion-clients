<?php 



try{
    $pdo[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=client_ligue','root','root',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo));
    $response = $bdd->query('SELECT * FROM `clients` WHERE id_client=' . $_GET['userId']. '');
    $userUpdateData = $response->fetch();
}
catch(Exception $error){
    die('Erreur : ' . $error->getMessage());
}

if(isset($_POST['update'])) {
    $req = $bdd->prepare('UPDATE clients SET nom = ?, prenom = ?, age = ?, email = ? WHERE id_client='.$_GET['userId'] .'');
    $req->execute(array(htmlentities($_POST['lastname']), $_POST['firstname'], $_POST['age'], $_POST['mail']));

    echo "<p class='success'>Les données sont mises à jour</p>";
}


if(isset($_POST['delete'])) {
    $req = $bdd->prepare('DELETE FROM clients WHERE id_client='.$_GET['userId'] .'');
    $req->execute(array(htmlentities($_POST['lastname']), $_POST['firstname'], $_POST['age'], $_POST['mail']));

    header('Location:  ../index.php');
}
?>