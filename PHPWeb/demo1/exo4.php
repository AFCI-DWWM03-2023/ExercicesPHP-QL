<?php ob_start(); ?>

<form action="#" method="post">
    <input type="submit" name="generate" value="Générer un nouveau chiffre">
</form>
<form action="#" method="post">
    <label for="table">Quel est le chiffre :</label><br>
    <input type="number" name="chiffre" id="chiffre">
    <input type="submit" value="Envoyer">
    <input type="number" hidden name="guess" value="<?php echo isset($_POST['guess']) ? $_POST['guess'] : rand(1,9) ?>">
</form>
<div class="multi">
    <?php
        if(isset($_POST["guess"])) {
            $guess = $_POST["guess"];
        }
        if(isset($_POST["generate"])) {
            echo "<h2>Nouveau chiffre généré!</h2>";
        }
        elseif(isset($_POST["chiffre"]) and is_numeric($_POST["chiffre"])) {
            $chiffre = $_POST["chiffre"];
            if ($chiffre > $guess) {
                echo "<h2>Le chiffre est plus petit</h2>";
            } elseif ($chiffre < $guess) {
                echo "<h2>Le chiffre est plus grand</h2>";
            } else {
                echo "<h2>Trouvé! Le chiffre était " . $guess . "</h2>";
            }
        } else {
            echo "<h2>Veuillez entrer un chiffre entre 1 et 9</h2>";
        }
    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Trouver le nombre choisi par l'ordinateur";
require "template.php";