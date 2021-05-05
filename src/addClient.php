<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un client</title>
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/addClient.css">
</head>
<body>
    <header>
          <h1>Ajouter un client</h1>
    </header>

    <main>
        <section>
            <?php require('./insert_bdd.php'); ?>
            <h2><a href="../index.php">Voir la liste des utilisateurs</a></h2>
            <form action="#" method="post" class="form">
                <label for="lastname">Nom :</label>
                <input type="text" name="lastname" id="lastname" aria-required="true">

                <label for="firstname">Prenom :</label>
                <input type="text" name="firstname" id="firstname" aria-required="true">

                <label for="age">Age :</label>
                <input type="text" name="age" id="age" aria-required="true">

                <label for="mail">Adresse mail :</label>
                <input type="email" name="mail" id="mail" aria-required="true">

                <label for="submit"></label>
                <input type="submit" name="create" id="submit" value="Créer">
            </form>
        </section>
    </main>
</body>
</html>