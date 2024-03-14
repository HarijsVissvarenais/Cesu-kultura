<?php
require "Components/header.php";

$headtitle = "Posts";
require "components/head.php" ?>
<?php require "components/navbar.php" ?>

<ol>
<?php foreach($Pasakumi as $pasakumi) { ?>
<li> <?= $pasakumi["Datums un laiks"]  ?></li>
<?php } ?>



</ol>

<?php
require "Components/footer.php"; ?>

