<!--PAGINA MET GEKOZEN ARTIKELEN OM DE BESTELLING TE BEVESTIGEN EN BETALEN-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzeria Sole Machina</title>

    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <?php include 'functies/Header.php'; ?>

    <main>
        <div class="container">
            <h2>Winkelmandje </h2>
            <table>
                <tr>
                    <th>[$naam]</th>
                    <th>[$Prijs]</th>
                    <th>[$Aantal]</th>
                    <th>[$Totaal]</th>
                </tr>
            </table>
            <form>
                <label for="address">Afleveradres:</label>
                <input type="text" id="address" name="address" required><br><br>
                <!-- Optie voor ophalen ??-->
                <button type="submit">Bestelling Plaatsen</button>
            </form>
            <!--<h6>Winkelmand: </h6>
            <h6>Anuleer artikel: </h6>
            <h6>Anuleer bestelling: </h6>
            <h6> Bestelling ophalen/wordt bezorgt naar adres..</h6>
            <h6>Bevestig bestelling: Betalen</h6>-->
        </div>
    </main>

    <?php include 'functies/Footer.php'; ?>
</body>
</html>