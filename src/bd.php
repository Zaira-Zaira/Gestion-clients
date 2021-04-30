<?php 

    try{
        $pdo[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=client_ligue','root','root',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo));


        $response = $bdd->query('SELECT * FROM `clients` WHERE 1');
        $userData = $response->fetch();

        while($data = $response->fetch()){
            echo '<tr>
            <td><a href="./src/deleteAndUpdate.php?userId= ' .$data['id_client'] . '">&#128394; Modifier</a> ou <a href="./src/deleteAndUpdate.php?userId= ' .$data['id_client'] . '">&#10799; Supprimer</a></td>
              <td>' . $data['nom'] .'</td>
              <td>' . $data['prenom'] .'</td>
              <td>' . $data['age'] .'</td>
              <td>' . $data['email'] .'</td>
            </tr>';
        }
        $response->closeCursor(); 
    }
    catch(Exception $error){
        die('Erreur : ' . $error->getMessage());
    }
?>