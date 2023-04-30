<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> mfdobrinja </title>
</head>
<body>

    <div class="sidebar">
        <a class="active" href="pocetna.php"> Pocetna </a>
        <a href="oname.php"> O nama </a>
        <a href="forma.php"> Kontakt i dodatna pitanja </a>
    </div>
    
    <div class="content">
        <h2> Forma za dodatna pitanja </h2>

        <form action='connect.php' method="POST">
            
            <label for="ip"> Ime i Prezime: </label><br>
            <input type="text" name="ip" id="ip" required><br><br>

            <label for="email"> Email: </label><br>
            <input type="text" name="poruka" id="poruka" required><br><br>

            <label for="poruka"> Poruka: </label><br>
            <input type="text" name="poruka" id="poruka" required><br><br>

            <input type="submit" name="submit" id="submit" />

        </form>
    </div>

</body>

</html>