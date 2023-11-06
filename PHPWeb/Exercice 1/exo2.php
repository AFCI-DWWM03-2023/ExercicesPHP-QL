<?php ob_start(); ?>
<form action="#" method="POST">
    <fieldset>
        <legend><h2>Recherche d'emploi:</h2></legend>
        <h4>Remplir la fiche</h4>
        <hr>
        <div class="multi">
            <div class="elem">
                <label for="prenom">Prénom</label><br />
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div class="elem">
                <label for="nom">Nom</label><br />
                <input type="text" name="nom" id="nom" required>
            </div>
            <div class="elem">
                <label for="naissance">Naissance</label><br />
                <input type="date" name="naissance" id="naissance" required>
            </div>
            <div class="elem">
                <label for="email">Email</label><br />
                <input type="email" name="email" id="email">
            </div>
        </div>
        <hr>
        <div class="multi">
            <div class="elem">
                <label for="langues"><h4>Langues pratiquées</h4></label>
                <textarea rows="5" name="langues" id="langues"></textarea>
            </div>

            <div class="elem">
            <h4>Compétences informatiques</h4>
                <label for="html">HTML 5</label>
                <input type="checkbox" name="html" id="html" class="checkbox">
                <label for="css">CSS 3</label>
                <input type="checkbox" name="css" id="css" class="checkbox">
                <label for="javascript">Javascript</label>
                <input type="checkbox" name="javascript" id="javascript" class="checkbox">
                <label for="jquery">jQuery</label>
                <input type="checkbox" name="jquery" id="jquery" class="checkbox">
                <div>
                    <label for="ajax">AJAX</label>
                    <input type="checkbox" name="ajax" id="ajax" class="checkbox">
                    <label for="php">PHP</label>
                    <input type="checkbox" name="php" id="php" class="checkbox">
                    <label for="mysql">MySQL</label>
                    <input type="checkbox" name="mysql" id="mysql" class="checkbox">
                    <label for="jee">JEE</label>
                    <input type="checkbox" name="jee" id="jee" class="checkbox">
                    <label for="aspnet">ASP.Net</label>
                    <input type="checkbox" name="aspnet" id="aspnet" class="checkbox">
                </div>
            </div>
        </div>

        <div class="multi">
            <input type="reset" value="Effacer" class="btn elem">
            <input type="submit" name="envoyer" value="Envoyer" class="btn elem">
        </div>
    </fieldset>
</form>

<h3>
<?php
    if (isset($_POST["envoyer"])) {
        echo "Vous êtes " . $_POST["prenom"] . " " . $_POST["nom"] . "<br>";
        echo "Vous êtes né(e) le " . $_POST["naissance"] . "<br>";
        if ($_POST["email"]>0) {
            echo "Vous addresse email est " . $_POST["email"] . "<br>";
        } else {
            echo "Vous n'avez pas d'addresse email.<br>";
        }
        if ($_POST["langues"]>0) {
            $languesarr = explode("\n", $_POST["langues"]);
            echo "Vous pratiquez ces langues : ";
            for ($i=0; $i<count($languesarr); $i++) {
                if ($i==count($languesarr)-1) {
                    echo " et ";
                } elseif ($i>0) {
                    echo ", ";
                }
                echo $languesarr[$i];
            }
            echo "<br>";
        } else {
            echo "Vous ne pratiquez aucune langue.<br>";
        }
        $competences = array(
            'HTML 5' => isset($_POST["html"]),
            'CSS 3' => isset($_POST["css"]) ,
            'Javascript' => isset($_POST["javascript"]) ,
            'jQuery' => isset($_POST["jquery"]) ,
            'AJAX' => isset($_POST["ajax"]) ,
            'PHP' => isset($_POST["php"]) ,
            'MySQL' => isset($_POST["mysql"]) ,
            'JEE' => isset($_POST["jee"]) ,
            'ASP.Net' => isset($_POST["aspnet"])
        );
        if (in_array(True, $competences)) {
            $i = 0;
            $comptab = [];
            foreach ($competences as $key => $value) {
                if ($value) {
                    $comptab[$i] = $key;
                    $i++;
                } 
            }
            echo "Vos compétences informatiques sont : ";
            for ($i=0; $i<count($comptab); $i++) {
                if ($i==count($comptab)-1) {
                    echo " et ";
                } elseif ($i>0) {
                    echo ", ";
                }
                echo $comptab[$i];
            }
        } else {
            echo "Vous n'avez aucune compétence informatique.";
        }

    }


?>
</h3>

<?php
$content = ob_get_clean();
$titre = "Formulaire demandeur d'emploi";
require "template.php";
