<?php
$title = "Style ändern";
require 'header.php';  // Inkludiere den Header
?>
<main>
    <h2>Wähle einen Stil:</h2>
    <form action="change_style.php" method="get">
        <button type="submit" name="style" value="classic">Classic</button>
        <button type="submit" name="style" value="yellow">Yellow</button>
        <button type="submit" name="style" value="default">Zurücksetzen</button> <!-- Reset-Button -->
    </form>
    <?php
    // Überprüfen, ob ein Stil gesetzt wurde und diesen im Cookie speichern
    if (isset($_GET['style'])) {
        if ($_GET['style'] == 'default') {
            // Wenn "default" ausgewählt ist, das Cookie löschen
            setcookie('style', '', time() - 3600, "/"); // Cookie löschen, indem wir ein vergangenes Ablaufdatum setzen
            echo '<p>Stil zurückgesetzt! Aktualisiere die Seite, um den ursprünglichen Stil zu sehen.</p>';
        } else {
            // Andernfalls den neuen Stil setzen
            setcookie('style', $_GET['style'], time() + (86400 * 30), "/"); // Cookie für 30 Tage setzen
            echo '<p>Stil geändert! Aktualisiere die Seite, um den neuen Stil zu sehen.</p>';
        }
    }

    // Überprüfen, ob ein Stil-Cookie gesetzt ist
    $current_style = isset($_COOKIE['style']) ? $_COOKIE['style'] : 'default';
    ?>
    <p>Aktueller Stil: <?php echo ucfirst($current_style); ?></p>
</main>

<?php
include 'footer.php';
?>
