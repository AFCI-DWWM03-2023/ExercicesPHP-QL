<?php
ob_start();
session_start();
?>

<div>
    <?php
    $nav = "";
    if (isset($_SESSION["table"])) {
        $table = $_SESSION["table"];
    }
    function readTable($array)
    {
        $i = 0;
        foreach ($array as $key => $value) {
            echo "à la ligne n°" . $i . " correspond la clé \"" . $key . "\" et contient \"" . $value . "\"<br>";
            $i++;
        }
    }

    if (!isset($_SESSION["table"]) && !isset($_GET["add"])) {
        echo '<a href="?add">Ajouter des données</a>';
    }


    if (isset($table)) {
        $nav = '
        <li><a href="?debugging">Débogage</a></li>
        <li><a href="?concatenation">Concaténation</a></li>
        <li><a href="?loop">Boucle</a></li>
        <li><a href="?function">Fonction</a></li>
        <li><a href="?del">Supprimer</a></li>';

        if (isset($_GET["debugging"])) {
            echo "<pre>";
            print_r($table);
            echo "</pre>";
        }

        if (isset($_GET["concatenation"])) {
            if ($table["sexe"] == "femme") {
                echo "Mme ";
            } else {
                echo "Mr ";
            }
            echo ucfirst($table["prenom"]) . " " . strtoupper($table["nom"]) . "<br>";
            echo "J'ai " . $table["age"] . " ans et je mesure " . number_format($table["taille"], 2, ",") . "m.";
        }

        if (isset($_GET["loop"])) {
            $i = 0;
            foreach ($table as $key => $value) {
                echo "à la ligne n°" . $i . " correspond la clé \"" . $key . "\" et contient \"" . $value . "\"<br>";
                $i++;
            }
        }

        if (isset($_GET["function"])) {
            readTable($table);
        }

        if (isset($_GET["del"])) {
            session_destroy();
            echo "Données supprimées.";
        }
    }

    if (isset($_GET["add"]) && !isset($_POST["prenom"])) {
        echo '<form action="" method="post">
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" required><br/>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" required><br/>
        <label for="age">Age (18 à 70 ans): </label>
        <input type="number" name="age" id="age" min="18" max="70" required><br/>
        <label for="taille">Taille (1,26m à 3m): </label>
        <input type="number" name="taille" id="taille" min="1.26" max="3" step="0.01" required><br/>
        <label for="femme">Femme </label>
        <input type="radio" name="sexe" value="femme" id="femme" required>
        <label for="homme">Homme </label>
        <input type="radio" name="sexe" value="homme" if="homme" required><br/>
        <input type="submit" value="Enregistrer les données">
        </form>';
    }
    if (isset($_POST["prenom"])) {
        $_SESSION["table"] = $_POST;
        echo "Données sauvegardées";
    }
    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Session";
require "template.php";
