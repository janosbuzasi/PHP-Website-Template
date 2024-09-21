<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        $domain = $_SERVER['HTTP_HOST'];
        $pageTitle = isset($title) ? "$domain - $title" : $domain;
        echo $pageTitle;
        ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header-Bereich mit Burger-Menü -->
    <header>
        <h1>
            <?php
            // Wenn $title existiert, diesen verwenden, sonst die Domain anzeigen
            echo isset($title) ? $title : $domain;
            ?>
        </h1>
        <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div>
        <nav id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about_us.php">Über uns</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menu");
            if (menu.classList.contains('active')) {
                menu.classList.remove('active');
            } else {
                menu.classList.add('active');
            }
        }
    </script>
