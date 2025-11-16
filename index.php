<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h3>Tabel Perkalian 1 - 10</h3>

<?php
include "tabel.php";
echo buatTabelPerkalian();
?>

<br><br>

<h3>Bilangan Genap 1 - 10</h3>

<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

</body>
</html>