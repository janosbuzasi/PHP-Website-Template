<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'WEBTRASH.CH'; ?></title>
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
