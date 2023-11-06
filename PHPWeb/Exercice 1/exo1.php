<?php ob_start(); ?>

<form action="#" method="POST">
    <label for="euro">Montant (€) : </label>
    <input type="number" name="euro" id="euro" value="<?php echo isset($_POST['euro']) ? $_POST['euro'] : '' ?>"><br/>
    <label for="devselect">Convertir en : </label>
    <select name="devselect" id="devselect">
        <option value="dollar" <?php if (isset($_POST['devselect']) and $_POST['devselect'] == "dollar") echo 'selected="selected" '; ?>>Dollars US</option>
        <option value="livre" <?php if (isset($_POST['devselect']) and $_POST['devselect'] == "livre") echo 'selected="selected" '; ?>>Livres Sterling</option>
        <option value="yuan" <?php if (isset($_POST['devselect']) and $_POST['devselect'] == "yuan") echo 'selected="selected" '; ?>>Yuans</option>
    </select><br/>
    <label for="resultat">Resultat : </label>
    <input type="number" name="resultat" id="resultat" readonly value="<?php
    $taux = array('dollar' =>1.08, 'livre' =>0.87 ,'yuan' =>7.8367);
    if(isset($_POST["euro"]) and $_POST["euro"]>0) {
        $resultat = $_POST["euro"] * $taux[$_POST["devselect"]];
        echo $resultat;
    } else {echo '';}
    ?>"><br/>
    <input type="submit" value="Convertir">
</form>


<?php
$content = ob_get_clean();
$titre = "Convertisseur de monnaie";
require "template.php";