<?php ob_start(); ?>

<form action="#" method="post">
    <label for="table">Hauteur de la pyramide :</label>
    <input type="number" name="table" id="table">
    <input type="submit" value="Envoyer">
</form>
<div class="multi">
    <?php
    if (isset($_POST["table"]) and is_numeric($_POST["table"])) {
        $val = $_POST["table"];
        if ($val < 1) {
            echo "<h2>Veuillez entrer un nombre supérieur à 0</h2>";
        } else {
            echo "<h2>Pyramide de hauteur " . $val . "</h2>";
            for ($i = 0; $i < $val; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }

            for ($i = $val + 1; $i < $val * 2; $i++) {
                for ($j = 0; $j < $val * 2 - $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    } else {
        echo "<h2>Veuillez entrer un nombre</h2>";
    }
    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Affichage d'une pyramide";
require "template.php";
