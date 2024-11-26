<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2> Adatok űrlap</h2>
    <form method="POST"  action = "">
        Név:    <input type="text" name="name" required><br><br>
        Jelszó: <input type="password" name="password" required><br><br>
        <input type="submit" value="Küldés">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $_POST["name"];
        $password = $_POST["password"];

    if ($name == "admin" and $password == "1234")
    {
        echo "Sikeres";
    }
        else echo "Sikertelen";
    }
?>

</body>
</html>