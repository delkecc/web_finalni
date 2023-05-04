<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect("localhost", "root", "baza_podataka1") or die ("Connection failed: " . mysqli_connect());
    }
    if (isset($_POST['ime_prezime']) && isset($_POST['email']) && isset($_POST['poruka']))
    {
        $ime_prezime = $_POST['ime_prezime'];
        $email = $_POST['email'];
        $poruka = $_POST['poruka'];
        
        $sql = "INSERT INTO unosi (ime_prezime, email, poruka) VALUES ('$ime_prezime', '$email', '$poruka')";

        $query = mysqli_query($conn, $sql);
        if($query) echo 'Unos uspjesan!';
        else echo 'Greska!';
    }
?>