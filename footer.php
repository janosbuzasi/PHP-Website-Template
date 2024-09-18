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
