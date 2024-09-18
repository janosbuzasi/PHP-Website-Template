
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Über uns - WEBTRASH.CH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header-Bereich mit Burger-Menü -->
    <header>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
        <h1>WEBTRASH.CH</h1>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">Über uns</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <!-- Body-Bereich -->
    <main>
        <h2>Über uns</h2>
        <p>WEBTRASH.CH ist eine innovative Webdesign-Agentur, die sich auf kreative und maßgeschneiderte Lösungen spezialisiert hat. Wir arbeiten eng mit unseren Kunden zusammen, um ihre digitale Präsenz zu stärken.</p>
    </main>

    <!-- Footer-Bereich -->
    <footer>
        <p>
            <?php
            $domain = $_SERVER['HTTP_HOST'];
            $jahr = date("Y");
            echo "&copy; $jahr $domain. Alle Rechte vorbehalten.";
            ?>
        </p>
    </footer>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
    </script>

</body>
</html>
