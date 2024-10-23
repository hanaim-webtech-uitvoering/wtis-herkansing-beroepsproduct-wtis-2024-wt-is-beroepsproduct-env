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
    <?php include 'Header.php'; ?>
    <form method="post" action="Registratie_Login.html">
        <label>username</label> 
        <input type="text" id="username" name="username">

        <label>password</label>
        <input type="password" id="'wachtwoord" name="wachtwoord">
        
        <label>first_name</label>
        <label>last_name</label>
        <label>role</label>
        <label>address</label>
    </form>
</body>
</html>