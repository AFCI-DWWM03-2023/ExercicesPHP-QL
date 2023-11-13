<?php
$lang = $_GET['lang'] ?? 'fr';
$langArray = require 'locale/' . $lang . '.php';
ob_start();
?>

<section>

<a href="?lang=en"><img src="img/en.png" alt="" class="imglang"></a>
<a href="?lang=fr"><img src="img/fr.png" alt="" class="imglang"></a>
<a href="?lang=de"><img src="img/de.png" alt="" class="imglang"></a>
<a href="?lang=es"><img src="img/es.png" alt="" class="imglang"></a>

<h2><?php echo $langArray['bienvenue'];?></h2>
<h3><?php echo $langArray['devweb'];?></h3>
<h4><?php echo $langArray['demandestage'];?></h4>
</section>

<?php
$content = ob_get_clean();
$titre = "Exercice Locale";
require "template.php";
