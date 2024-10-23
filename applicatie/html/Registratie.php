<!--
Registratie en login voor medewerker EN klant
KLANT: Kan zijn bestelling status zien (onderweg, in de oven ect.), ADRES REGISTREREN
PERSONEEL: Om bestellingen van klant te beheren, volgende ->detailpagina.
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie of Login.</title>

    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <?php include 'functies/Header.php'; ?>
    <main>
        <form method="post" action="">
        <label for="naam">Naam:</label>
                <input type="text" id="naam" name="naam" required><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="wachtwoord">Wachtwoord:</label>
                <input type="password" id="wachtwoord" name="wachtwoord" required><br><br>
                <button type="submit">Registreer</button>
        </form>
    </main>
    <?php include 'functies/Footer.php'; ?>
</body>
</html>