<?php

include_once 'dbf.php';

if(isset($_POST['submit'])) {
    
    $nom = mysqli_real_escape_string($connection_f,$_POST["nom"]);
    $prenom = mysqli_real_escape_string($connection_f,$_POST["prenom"]);
    $numero = mysqli_real_escape_string($connection_f,$_POST["numero"]);
    $adresse = mysqli_real_escape_string($connection_f,$_POST["adresse"]);
    $codepostal = mysqli_real_escape_string($connection_f,$_POST["codepostal"]);
    $ville = mysqli_real_escape_string($connection_f,$_POST["ville"]);
    $email = mysqli_real_escape_string($connection_f,$_POST["email"]);


    $query = "INSERT INTO formulaire(nom,prenom,numero,adresse,codepostal,ville,email)";
    $query .= "VALUES ('$nom', '$prenom', '$numero', '$adresse', '$codepostal', '$ville', '$email')";

  $result =   mysqli_query($connection_f, $query);

    if(!$result) {
        die('Query failed');
    } else {
        header("Location: https://assuerplusbyahmed.000webhostapp.com/Constat.php", true, 301);

        exit();
    }



}






?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
    <script src="/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
    <title>Formulaire</title>
</head>
<body>
    <div class="text-center container-fluid">
        <a href="/index.php"><div><h1 class="logo mt-4 fs-1">AssuerPlus</h1></div></a>
        <div class="d-flex justify-content-center align-items-center flex-column">

            <h2 id="titre-formulaire">Formulaire</h2>
            <p id="sous-titre-formulaire">Votre identité</>
            
            <form action="/Formulaire.php" method="POST" id="form-formulaire" class="p-3" >
                    <div class="">
                        <label for="nom">Nom</label>
                        <input class="form-control" type="text" name="nom" id="nom">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="prenom">Prénom</label>
                        <input class="form-control" type="text" name="prenom" id="prenom">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="numero">Numéro de téléphone</label>
                        <input class="form-control" type="tel" name="numero" id="numero">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="adresse">Adresse</label>
                        <input class="form-control" type="text" name="adresse" id="adresse">
                        <div class="error"></div>
                    </div>
                    <div class="align-items-center">
                        <label for="codepostal">Code Postal</label>
                        <input class="form-control mb-3"  type="text" name="codepostal" id="codepostal">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label class="form-label" for="ville">Ville</label>
                        <input class="form-control" type="text" name="ville" id="ville">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email">
                        <div class="error"></div>
                    </div>
                    <div class="group-buttons">
                        <a href="/Constat.php"><button type="submit" name="submit" value="Submit" class="btn btn-outline-success m-5" id="bouton validation">Valider</button></a>
                    </div>
            </form>
            </div>
            
            
        </div>
    </div>
</body>
</html>