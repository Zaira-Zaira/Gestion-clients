<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPE Maison des ligues</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1> &#9881;Maison des ligues : interface admin</h1>
    </header>

    <main>
    <section>
      <form action="#"method="get">
    <table>
      <thead>
        <tr>
          <th>Identifiant</th>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Age</th>
          <th>Adresse Mail</th>
        </tr>
      </thead>

      <tbody>
  
      <?php
       require('./src/bd.php');
      ?>
      </tbody>

      <tfoot>
          <tr>
              <td colspan=5><input type="submit" value="+ Ajouter un client" name="submit"></td>
          </tr>
     </tfoot>
    </table>
    </form>

    <?php
    if(isset($_GET['submit'])){
      header('Location: ./src/addClient.php');
    }
    ?>
    </section>
    </main>
</body>
</html>