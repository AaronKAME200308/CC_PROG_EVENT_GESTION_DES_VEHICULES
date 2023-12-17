<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleInscription.css">
</head>
<body>
    <div>
        <form action="ListeVehicules.php" method="post" id="form" enctype="multipart/form-data">
            <div class="container">
                <fieldset>      
                        <legend><h1>Formulaire d'Ajout de Véhicules</h1></legend>                    
                            <div >
                                <label for="choiceType">Type :</label>
                                <label for="choiceVoiture">Voiture</label>
                                <input type="radio" id="choiceVoiture" name="choiceType" value="Voiture">
                                <label for="choiceMoto">Moto</label>
                                <input type="radio" id="choiceMoto" name="choiceType" value="Moto">     
                                <label for="choiceCamion">Camion</label>
                                <input type="radio" id="choiceCamion" name="choiceType" value="Camion">
                                <label for="choiceAvion">Avion</label>
                                <input type="radio" id="choiceAvion" name="choiceType" value="Avion">                       
                            </div> 
                            <br>
                            <div class="input-control">
                                <label for="">Marque :</label>
                                <input type="text" name="Marque" id="idMarque" placeholder="Entrez la Marque" required>
                            </div>
                            <div class="input-control">
                                <label for="">Modele :</label>
                                <input type="text" name="Modele" id="idModele" placeholder="Entrez le Modèle" required>
                            </div>
                            <div class="input-control">
                                <label for="">Couleur :</label>
                                <input type="color" name="Couleur" id="idCouleur">
                            </div>
                            <div class="input-control">
                                <label for="">Immatriculation:</label>
                                <?php if(isset($_POST['mat'])) {
                                    $mat = $_POST['mat'];
                                } else {
                                }?>
                                <input type="text" name="Immatriculation" id="idImmatriculation" placeholder="Entrez Votre Immatriculation" required value=<?php if(isset($mat)) {echo $mat;}?>>
                            </div> 
                            <br>
                            <div >
                                <label for="choice">Assurance :</label>
                                <label for="choiceO">Oui</label>
                                <input type="radio" id="choice" name="choice" value="Oui">
                                <label for="choiceN">Non</label>
                                <input type="radio" id="choice" name= "choice"value="Non">
                            </div> 
                            <br>
                            <div>
                                <label for="Image">Image du véhicules :</label>
                                <input type="file" name="Image" id="idImage">
                            </div>
                            <br>            
                            <div class="button">
                                <button id="idvalider"type="submit">Valider</button>
                                <button type="reset">Annuler</button>
                            </div>
                </fieldset>
            </div>
        </form>
    </div>
</body>
</html>