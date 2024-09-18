<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBTRASH.CH</title>
    <script>
        // AJAX zum dynamischen Laden der CSS-Datei
        function loadCSS(filename) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', filename, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var style = document.createElement('style');
                    style.textContent = xhr.responseText;
                    document.head.appendChild(style);
                }
            };
            xhr.send();
        }

        // Beim Laden der Seite das CSS laden
        window.onload = function() {
            loadCSS('style.css'); // Hier wird die style.css geladen
        };
    </script>
</head>
<body>

        <h1>WEBTRASH.CH</h1>

    <?php
    // Deutschsprachige Begrüßung
    echo '<p class="welcome-text">Willkommen auf unserer Seite!</p>';

    // Englische Begrüßung
    echo '<p class="welcome-text">Welcome to our website!</p>';
    ?>

    <!-- Footer mit dynamischem Copyright -->
    <footer>
        <p>
            <?php
            // Dynamisch das aktuelle Jahr und die Domain ausgeben
            $domain = $_SERVER['HTTP_HOST']; // Ermittelt die Domain
            $jahr = date("Y"); // Holt das aktuelle Jahr
            echo "&copy; $jahr $domain. Alle Rechte vorbehalten.";
            ?>
        </p>
    </footer>

</body>
</html>
