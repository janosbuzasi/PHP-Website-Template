<?php
$title = "Über uns";
require 'header.php';  // Inkludiere den Header
?>
<!-- Restlicher Inhalt der Seite -->
<!-- about_us Body-Bereich -->
<main>
    <h2><?php $title ?></h2>
    <p>
        <?php echo $_SERVER['HTTP_HOST']; ?> ist eine innovative Webdesign-Agentur, die sich auf kreative und maßgeschneiderte Lösungen spezialisiert hat. Wir arbeiten eng mit unseren Kunden zusammen, um ihre digitale Präsenz zu stärken.
    </p>
</main>

<?php
include 'footer.php';
?>
