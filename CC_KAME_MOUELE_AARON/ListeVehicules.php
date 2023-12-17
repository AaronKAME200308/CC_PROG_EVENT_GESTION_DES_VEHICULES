<?php
include "Vehicule.php";
session_start();

    if (isset($_POST['mat'])){

        $id = $_POST['mat'];

        $Vehicule = new Vehicule;

        $Vehicule->DonneeVehicule($Vehicule);
        $Type->getType();
        $Marque->getMarque();
        $Modele->getModele();
        $Couleur->getCouleur();
        $Immatriculation->getImmatriculation();
        $Assurance->getAssurance();
        $Image->getImage();

        $_SESSION['listeVehicules'][$id] = [$Type,$Marque,$Modele,$Couleur,$Immatriculation,$Assurance,$Image]; 

    }

    if (isset($_SESSION['listeVehicules'])) {

    }else{
            $_SESSION['listeVehicules']=[];
    }
    $Vehicule = new Vehicule;

    $Vehicule->DonneeVehicule($Vehicule);

    array_push($_SESSION['listeVehicules'], $Vehicule);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="StyleListeVehicules.css">
</head>
<body>
     <div>
        <table>
            <thead> 
                <tr>
                    <?php                        
                        foreach($Vehicule as $Vehicule=> $Vehicule ) {
                            echo "<th>$Vehicule</th>";
                        }
                    ?>
                </tr>                          
            </thead>
            <tbody>  
                    <?php
                        foreach($_SESSION['listeVehicules'] as $Vehicule) {
                            echo '<tr>';
                            foreach($Vehicule as $Vehicule2) {
                                echo '<td>'.$Vehicule2.'</td>';
                            }
                            echo '</tr>';
                        }

                    ?> 
            </tbody>
        </table>
    </div>
    <div>
        <a href="http://localhost/CC_KAME_MOUELE_AARON/AjoutVehicule.php"> Ajouter</a>
    </div>
    <form action="AjoutVehicule.php" method="post" id="form">
        <div>
            <label for="">entrez lz matricule</label>
             <input type="text" name="mat" id="">
        </div>
        <div>
            <button type="submit">Modifier</button>
        </div>
    </form>
</body>
</html>