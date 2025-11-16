<?php
function buatTabelPerkalian() {
    $output = "<table>";

    // Header
    $output .= "<tr><th class='header'>Bilangan</th>";
    for ($i = 1; $i <= 10; $i++) {
        $output .= "<th class='header'>$i</th>";
    }
    $output .= "</tr>";

    // Isi
    for ($i = 1; $i <= 10; $i++) {
        $output .= "<tr>";
        $output .= "<th class='left'>$i</th>"; 

        for ($j = 1; $j <= 10; $j++) {
            $hasil = $i * $j;

            if ($i == $j) {
                $output .= "<td class='yellow'>$hasil</td>";
            } else {
                $output .= "<td class='blue'>$hasil</td>";
            }
        }

        $output .= "</tr>";
    }

    $output .= "</table>";
    return $output;
}
?>