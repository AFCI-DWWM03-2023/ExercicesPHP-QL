<?php ob_start(); ?>

<form action="#" method="post">
    <label for="table">Rayon :</label>
    <input type="number" name="table" id="table"><br>
    <label for="perimetre">Périmètre :</label>
    <input type="checkbox" name="perimetre" id="perimetre"><br>
    <label for="aire">Aire :</label>
    <input type="checkbox" name="aire" id="aire"><br>
    <input type="submit" value="Envoyer">
</form>

<div class="multi">
    <?php
    if (isset($_POST["table"]) and is_numeric($_POST["table"])) {
        $val = $_POST["table"];
        if ($val < 1) {
            echo "<h2>Veuillez entrer un nombre supérieur à 0</h2>";
        } else {
            echo "<h2>Résultats</h2>";
            if (isset($_POST["perimetre"])) {
                echo "Le périmetre d'un cercle de rayon " . $val . " est : " . $val * 2 * pi() . "<br>";
            }
            if (isset($_POST["aire"])) {
                echo "L'aire d'un cercle de rayon " . $val . " est : " . $val * $val * pi();
            }
        }
    } else {
        echo "<h2>Veuillez entrer un nombre</h2>";
    }
    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Cercle - Périmètre et Aire";
require "template.php";