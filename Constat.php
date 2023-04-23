<?php



include_once 'dbc.php';


if(isset($_POST['submit'])) {
    $adresse = mysqli_real_escape_string($connection_c,$_POST["adresse"]);
    $codepostal = mysqli_real_escape_string($connection_c,$_POST["codepostal"]);
    $ville = mysqli_real_escape_string($connection_c,$_POST["ville"]);
    $date = mysqli_real_escape_string($connection_c,$_POST["date"]);
    $immatri = mysqli_real_escape_string($connection_c,$_POST["immatri"]);
    $descri = mysqli_real_escape_string($connection_c,$_POST["descri"]);



    $query = "INSERT INTO constat(adresse,codepostal,ville,date,immatri,descri)";
    $query .= "VALUES ('$adresse', '$codepostal', '$ville', '$date', '$immatri', '$descri')";

  $result =   mysqli_query($connection_c, $query);

    if(!$result) {
        die('Query failed');
    } else {
        header("Location: https://assuerplusbyahmed.000webhostapp.com/Confirmation.php", true, 301);

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
    <title>Constat</title>
</head>
<body>
    <div class="text-center container-fluid">
        <a href="/index.php"><div><h1 class="logo mt-4 fs-1">AssuerPlus</h1></div></a>
        <div class="d-flex justify-content-center align-items-center flex-column">
            <h2 id="titre-constat">Constat</h2>
            <p id="sous-titre-constat">Votre identité</>

                <form action="/Constat.php" method="POST" id="form-constat" class="p-3">
                    
                    <div class="">
                        <label for="adresse">Adresse</label>
                        <input class="form-control mb-3"  type="text" name="adresse" id="adresse">
                        <div class="error" ></div>
                    </div>
                    <div class="">
                        <label for="codepostal">Code Postal</label>
                        <input class="form-control mb-3"  type="text" name="codepostal" id="codepostal">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="ville">Ville</label>
                        <input class="form-control mb-3"  type="text" name="ville" id="ville">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="date">Date</label>
                        <input class="form-control mb-3"  type="date" name="date" id="date">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="immatri">Immatriculation</label>
                        <input class="form-control mb-3"  type="text" name="immatri" id="immatri" minlength="9" maxlength="9" placeholder="Exemple : AB-123-CD">
                        <div class="error"></div>
                    </div>
                    <div class="">
                        <label for="immatri">Description de l'accident</label>
                        <textarea class="form-control mb-3"  name="descri" id="text-area" cols="50" rows="5" placeholder="Ecrire ici..." minlength="12"></textarea>
                        <div class="error"></div>
                    </div>
                                      
                    <div class="group-buttons">
                        <a href="/Confirmation.php"><button type="submit" class="btn btn-outline-success m-2" name="submit" value="Submit"  id="bouton validation">Valider</button></a>
                    </div>
                </form>

            
            
        </div>
    </div>
</body>
</html>