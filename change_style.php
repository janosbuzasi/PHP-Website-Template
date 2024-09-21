<?php
$title = "Style ändern";
require 'header.php';  // Inkludiere den Header
?>
<!-- Restlicher Inhalt der Seite -->
<!-- change_style Body-Bereich -->
<main>
    <h2>Wähle einen Stil:</h2>
    <form action="change_style.php" method="get">
        <button type="submit" name="style" value="classic">Classic</button>
        <button type="submit" name="style" value="yellow">Yellow</button>
    </form>
    <?php
    // Überprüfen, ob ein Stil gesetzt wurde und diesen im Cookie speichern
    if (isset($_GET['style'])) {
        setcookie('style', $_GET['style'], time() + (86400 * 30), "/"); // Cookie für 30 Tage setzen
        echo '<p>Stil geändert! Aktualisiere die Seite, um den neuen Stil zu sehen.</p>';
    }

    // Überprüfen, ob ein Stil-Cookie gesetzt ist
    $current_style = isset($_COOKIE['style']) ? $_COOKIE['style'] : 'default';
    ?>
    <p>Aktueller Stil: <?php echo ucfirst($current_style); ?></p>
</main>

<?php
include 'footer.php';
?>
