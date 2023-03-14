<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<?php
?>
<html>
        <h1>Étudiant</h1>
        <form action="action.php" method="post">
            <p><input type="text" name="nomEt" placeholder="Nom"/></p>
            <p><input type="text" name="prenomEt" placeholder="Prénom"/></p>
            <p><input type="text" name="adresseEt" placeholder="Adresse"/></p>
            <p><input type="text" name="date_naissEt" placeholder="Date de naissance"/></p>
            <p><input type="text" name="TelephoneEt" placeholder="Numéro de téléphone"/></p>
            <p><input type="text" name="adresse_mailEt" placeholder="Adresse mail" /></p>
            <p><input type="text" name="numéro_sécuEt" placeholder="Numéro de sécurité sociale"/></p>
            <p><input type="text" name="resp_civileEt" placeholder="Société de la police d'assurance de la responsabilité civile" /></p>
            <p><input type="text" name="numero_RCEt" placeholder="Numéro de police d'assurance RC"/></p>
            <p><input type="text" name="assurance_maladieEt" placeholder="Nom de la caisse d'assurance maladie"/></p>
        <h1>Entreprise</h1>
            <p><input type="text" name="raison_socialeEnt" placeholder="Raison Sociale"/></p>
            <p><input type="text" name="adresseEnt" placeholder="Adresse"/></p>
            <p><input type="text" name="telephoneEnt" placeholder="Numéro de téléphone"/></p>
            <p><input type="text" name="courrielEnt" placeholder="Adresse mail"/></p>
        <h1>Tuteur dans l'entreprise</h1>
            <p><input type="text" name="nomTuteur" placeholder="Nom"/></p>
            <p><input type="text" name="prenomTuteur" placeholder="Prénom"/></p>
            <p><input type="text" name="fonctionTuteur" placeholder="Fonction"/></p>
            <p><input type="text" name="telephoneTuteur" placeholder="Numéro de Téléphone"/></p>
            <p><input type="text" name="courrielTuteur" placeholder="Adresse Mail"/></p>
        <h1>Signataire de la convention</h1>
            <p><input type="text" name="nomConv" placeholder="Nom"/></p>
            <p><input type="text" name="prenomConv" placeholder="Prénom"/></p>
            <p><input type="text" name="adresseConv" placeholder="Adresse"/></p>
            <p><input type="text" name="fonctionConv" placeholder="Fonction"/></p>
            <p><input type="text" name="telephoneConv" placeholder="Téléphone"/></p>
            <p><input type="text" name="courrielConv" placeholder="Adresse Mail"/></p>
            <div class="form-group">
                <label for="travailleConf">Travaille confié</label>
                <textarea class="form-control" id="travailleConf" rows="3"></textarea>
            </div>
        <p>cochez les cases ci-dessous:</p>
        <h1>Logiciels</h1>
            <div class="form-check">
                <label class="form-check-label" for="logicielCheck1">
                - concevoir une application à l’aide d’un tableur
                </label>
                <input class="form-check-input" type="checkbox" value="" id="logicielCheck1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="logicielCheck2">
                - concevoir une application à l’aide d’un logiciel intégré
                </label>
                <input class="form-check-input" type="checkbox" value="" id="logicielCheck2">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="logicielCheck3">
                - créer et/ou gérer des fichiers ou des tables à l’aide d’un logiciel de gestion de données
                </label>
                <input class="form-check-input" type="checkbox" value="" id="logicielCheck3">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="logicielCheck4">
                - concevoir une documentation sur un logiciel
                </label>
                <input class="form-check-input" type="checkbox" value="" id="logicielCheck4">
            </div>
            <div class="form-group">
                <label for="comLogiciel">Commentaires :</label>
                <textarea class="form-control" id="comLogiciel" rows="3"></textarea>
            </div>

        <h1>Développement</h1>
            <div class="form-check">
                <label class="form-check-label" for="devCheck1">
                - concevoir ou modifier un site Web
                </label>
                <input class="form-check-input" type="checkbox" value="" id="devCheck1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="devCheck2">
                - écrire et mettre au point des programmes en langage évolué
                </label>
                <input class="form-check-input" type="checkbox" value="" id="devCheck2">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="devCheck3">
                -  écrire des requêtes à l’aide d’un langage de manipulation de données
                </label>
                <input class="form-check-input" type="checkbox" value="" id="devCheck3">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="devCheck4">
                -  mettre en œuvre des commandes opératoires d’un système d’exploitation
                </label>
                <input class="form-check-input" type="checkbox" value="" id="devCheck4">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="devCheck5">
                -  préparer des fichiers de commande enchaînant des travaux
                </label>
                <input class="form-check-input" type="checkbox" value="" id="devCheck5">
            </div>
            <div class="form-group">
                <label for="devComm">Commentaires :</label>
                <textarea class="form-control" id="devComm" rows="3"></textarea>
            </div>

        <h1>Analyse</h1>
            <div class="form-check">
                <label class="form-check-label" for="analyseCheck1">
                -  mettre en œuvre une codification
                </label>
                <input class="form-check-input" type="checkbox" value="" id="analyseCheck1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="analyseCheck2">
                - réaliser des dessins d’écrans ou de modèles d’état
                </label>
                <input class="form-check-input" type="checkbox" value="" id="analyseCheck2">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="analyseCheck3">
                -  participer à l’étude d’un système d’informations
                </label>
                <input class="form-check-input" type="checkbox" value="" id="analyseCheck3">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="analyseCheck4">
                -  participer à la modélisation des données
                </label>
                <input class="form-check-input" type="checkbox" value="" id="analyseCheck4">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="analyseCheck5">
                - participer à la modélisation des traitements
                </label>
                <input class="form-check-input" type="checkbox" value="" id="analyseCheck5">
            </div>
            <div class="form-group">
                <label for="analyseComm">Commentaires :</label>
                <textarea class="form-control" id="analyseComm" rows="3"></textarea>
            </div>

        <h1>Architecture</h1>
            <div class="form-check">
                <label class="form-check-label" for="archiCheck1">
                - installer, configurer et entretenir un équipement informatique
                </label>
                <input class="form-check-input" type="checkbox" value="" id="archiCheck1">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="archiCheck2">
                -  évaluer et comparer différentes configurations de réseaux
                </label>
                <input class="form-check-input" type="checkbox" value="" id="archiCheck2">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="archiCheck3">
                -  installer et configurer un réseau local
                </label>
                <input class="form-check-input" type="checkbox" value="" id="archiCheck3">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="archiCheck4">
                - administrer un réseau local
                </label>
                <input class="form-check-input" type="checkbox" value="" id="archiCheck4">
            </div>
            <div class="form-group">
                <label for="archiComm">Commentaires :</label>
                <textarea class="form-control" id="archiComm" rows="3"></textarea>
            </div>    

        </form>


        
    
</html>
<?php
?>