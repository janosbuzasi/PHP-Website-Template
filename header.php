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
    <?php
    // Standardstil festlegen, falls kein Cookie gesetzt ist
    $current_style = isset($_COOKIE['style']) ? $_COOKIE['style'] : 'default';

    // Dynamisch das Stylesheet basierend auf dem Cookie einbinden
    if ($current_style === 'classic') {
        echo '<link rel="stylesheet" href="classic_style.css">';
    } elseif ($current_style === 'yellow') {
        echo '<link rel="stylesheet" href="yellow_style.css">';
    } else {
        echo '<link rel="stylesheet" href="style.css">';
    }
    ?>
</head>
<body>

    <!-- Header-Bereich mit Burger-Menü -->
<header>
    <h1>
        <?php
        // Wenn $title existiert, diesen verwenden, sonst die Domain anzeigen
        echo isset($title) ? "$domain - $title" : $domain;
        ?>
    </h1>
    <div class="menu-toggle" onclick="toggleMenu()">&#9776;</div> <!-- Burger-Icon -->
    <nav id="menu"> <!-- ID sollte "menu" sein, damit JavaScript es steuert -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">Über uns</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li><a href="change_style.php">Style ändern</a></li>
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
