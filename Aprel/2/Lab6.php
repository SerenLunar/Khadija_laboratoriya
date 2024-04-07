<!DOCTYPE html>
<html>

<body>

<table>
<?php
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>" . $i . "*" . $j . "=" . ($i * $j) . "&emsp;" . "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>