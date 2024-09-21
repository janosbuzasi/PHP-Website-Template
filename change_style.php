<?php
// Überprüfen, ob ein Stil gesetzt wurde und diesen im Cookie speichern
if (isset($_GET['style'])) {
    setcookie('style', $_GET['style'], time() + (86400 * 30), "/"); // Cookie für 30 Tage setzen
    header("Location: index.php"); // Zurück zur Startseite leiten, damit der neue Stil angezeigt wird
    exit();
}

// Überprüfen, ob ein Stil-Cookie gesetzt ist
$current_style = isset($_COOKIE['style']) ? $_COOKIE['style'] : 'default';

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Style ändern</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Style ändern</h1>
    </header>
    <main>
        <h2>Wähle einen Stil:</h2>
        <form action="change_style.php" method="get">
            <button type="submit" name="style" value="classic">Classic</button>
            <button type="submit" name="style" value="yellow">Yellow</button>
        </form>
    </main>
    <footer>
        <p>Aktueller Stil: <?php echo ucfirst($current_style); ?></p>
    </footer>
</body>
</html>
