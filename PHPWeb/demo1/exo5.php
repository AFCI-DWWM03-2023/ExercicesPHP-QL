<?php ob_start(); ?>

<form action="#" method="get">
    <label for="nbnotes">Combien de notes : </label>
    <input type="number" name="nbnotes" id="nbnotes" value="<?php echo isset($_GET['nbnotes']) ? $_GET['nbnotes'] : '' ?>">
    <input type="submit" value="valider">
</form>

<?php
    if (isset($_GET["nbnotes"]) and $_GET["nbnotes"] >0) {
        $val = $_GET["nbnotes"];
        echo 'Moyenne : <br><form action="#" method="post">';
            for ($i = 1; $i <= $val; $i++) {
                echo ' <label for="note' . $i . '">Note' . $i . ' : </label>';
                echo '<input type="number" name="note' . $i . '" id="note' . $i . '" required><br>';
            }
            echo '<input type="submit" value="Calculer"></form>';
        if (isset($_POST["note1"])) {
            $sum = 0;
            for ($i = 1; $i <= $val; $i++) {
                $sum += $_POST["note" . $i];
            }
            echo "Moyenne : " . $sum/$val;
        }
    } else {
        echo "<h2>Veuillez entrer un nombre</h2>";
    }
    ?>

<?php
$content = ob_get_clean();
$titre = "Calculer une moyenne";
require "template.php";
