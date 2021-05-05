<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un client</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/addClient.css">
</head>
<body>
    <header>
          <h1>Mettre à jour ou supprimer</h1>
    </header>

    <main>
        <section>
        <?php require('./UpdateUser.php') ?>
        <h2><a href="../index.php">Voir la liste des utilisateurs</a></h2>
            <form action="#" method="post" class="form">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname" id="lastname" aria-required="true" value="<?php echo $userUpdateData['nom'] ?>">

                <label for="firstname">Prenom :</label>
                <input type="text" name="firstname" id="firstname" aria-required="true" value="<?php echo $userUpdateData['prenom'] ?>">

                <label for="age">Age :</label>
                <input type="text" name="age" id="age" aria-required="true" value="<?php echo $userUpdateData['age'] ?>">

                <label for="mail">Adresse mail :</label>
                <input type="email" name="mail" id="mail" aria-required="true" value="<?php echo $userUpdateData['email'] ?>">

                <label for="update"></label>
                <input type="submit" name="update" id="update" value="Mettre à jour &#128394;">

                <label for="delete"></label>
                <input type="submit" name="delete" id="delete" value="Supprimer &#10799;">
            </form>
        </section>

    </main>
</body>
</html>