<?php
$title = "Über uns";
require 'header.php';  // Inkludiere den Header
?>
<!-- Restlicher Inhalt der Seite -->
<!-- about_us Body-Bereich -->
<main>
    <h2><?php $title ?></h2>
    <p>
        <?php echo $_SERVER['HTTP_HOST']; ?> innovativ kreativ.
    </p>
</main>

<?php
include 'footer.php';
?>
