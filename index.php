
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBTRASH.CH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header-Bereich mit Burger-Menü -->
    <header>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
        <h1>WEBTRASH.CH</h1>
        <nav id="menu">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Über uns</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <!-- Body-Bereich -->
    <main>
        <?php
        // Dynamische Begrüßung im Body
        echo '<p class="welcome-text">Willkommen auf unserer Seite!</p>';
        echo '<p class="welcome-text">Welcome to our website!</p>';
        ?>
    </main>

    <!-- Footer-Bereich -->
    <footer>
        <p>
            <?php
            // Dynamisches Copyright im Footer
            $domain = $_SERVER['HTTP_HOST'];
            $jahr = date("Y");
            echo "&copy; $jahr $domain. Alle Rechte vorbehalten.";
            ?>
        </p>
    </footer>

    <script>
        // Funktion zum Öffnen/Schließen des Burger-Menüs
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
