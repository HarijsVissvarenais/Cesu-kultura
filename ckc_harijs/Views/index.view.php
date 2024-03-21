<?php
require "Views/Components/header.php";

$headtitle = "Posts";
?>

<h1>Pasākumi Cēsīs</h1>
<ul>
<?php foreach($Pasakumi as $pasakumi) { ?>
<li> <?= $pasakumi["Datums un laiks"] ." / " .$pasakumi["Nosaukums"] ." / " .$pasakumi["Norises vieta"]; ?></li>
<?php } ?>



</ul>

<?php
require "Components/footer.php"; ?>

