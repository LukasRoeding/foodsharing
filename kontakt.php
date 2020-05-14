<html>
    <head>

        <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="../style.css">
        <meta name="viewport" content="width=device-width">
        <title>Foodsharing Dortmund</title>
        <link rel="shortcut icon" href="Bilder/favicon.png.ico" type="Bilder/ico" />
    </head>
</html>
<body>
    <header>
        <img src="Bilder/foodsharing.png" class="logo">
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="mitmachen.php">Mitmachen</a></li>
                        <li><a href="fairteiler.php">Fairteiler</a></li>
                        <li><a href="aktionen.php">Aktionen</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                        <li><a href="formulare.php">Formulare</a></li>
                        <li><a href="datenschutz.php">Datenschutz</a></li>
                        <li><a href="impressum.php">Impressum</a></li>
                        <li><a href="spende.php">Spende</a></li>
                    </ul>
                </nav>
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
    </header>
<main>
    <div class="grid-container">
        <div class="grid-text"><h1 class = "section-header">Kontakt</h1>
        Hier findet ihr alle Möglichkeiten mit dem Verein und seinen Mitglieder*innen Kontakt aufzunehmen.
        <h1 class = "section-header">Vorstand</h1>
        Der Vorstand wurde am 07.03.2020 auf der Gründungsversammlung gewählt. Hier die Übersicht über den Vorstand von foodsharing Dortmund e.V.:<br>
Vorsitzender: Dennis Görlich <br>
Stv. Vorsitzende: Brigitte Renner-Niemietz<br>
Schatzmeister: Lukas Röding<br>
Botschafter*innen: Julia Kraus, Lisa Schleinkofer, Marleen Krabbenhöft, Gerrit
Schröter<br>
    Bei Belangen, welche den ganzen Vorstand betreffen, schreib bitte eine mail an: <br>
        <a class ="green" >vorstand@foodsharing-dortmund.de</a><br>
    Die Vorsitzenden kannst du unter dieser mail erreichen:<br>
    <a class ="green" >vorsitz@foodsharing-dortmund.de</a><br>
    Bei rein finanziellen Belangen, wende dich bitte an:<br>
    <a class ="green" >finanzen@foodsharing-dortmund.de</a>

    <h1 class = "section-header">Schiedsstelle</h1>
    Falls du Probleme mit Foodsaver*innen, Botschafter*innen oder Betriebsverantwortlichen hast, dann wende dich bitte an die Schiedsstelle.
    Die Schiedsstelle besteht aus mehreren Foodsaver*innen, welche du bei Problemen kontaktieren kannst. Sie probiert im Normalfall erst einmal streitschlichtend zu agieren. 
    Sie kann aber auch Sanktionen aussprechen und Entscheidungen des Vorstands bis zur nächsten Mitgliederversammlung außer Kraft setzten. 
    Ihre Emailadresse lautet: <a class ="green" >schiedsstelle@foodsharing-dortmund.de</a>
    <h1 class = "section-header">Kontaktform</h1>
    <form action="kontaktform.php" method="post">
        <input class="contact-form" type="text" name="name" placeholder="dein Name">
        <input class="contact-form" type="text" name="email" placeholder="deine Emailadresse">
        <input class="contact-form" type="text" name="thema" placeholder="Thema">
        <textarea class="contact-form-nachricht" name="nachricht" placeholder="Nachricht"></textarea>
        <button class="contact-form" type="submit" name="submit">Senden</button>
    </form>
        </div>
       <?php include('sidebar.html'); ?>

    </div>
</main>

</body>