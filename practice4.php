<html>
<head>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>
<form method="post">
    <label for="number">Enter a number: </label>
    <input type="number" id="number" name="number" min="1" required>
    <button type="submit">Create table</button>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["number"]);
    echo "<table>";
    echo "<tr><th>X</th>";
    for ($i = 1; $i <= $number; $i++) {
        echo "<th>$i</th>";
    }
    echo"</tr>";
    for ($j = 1; $j <= $number; $j++) {
        echo "<tr><th>$j</th>";
        for ($i = 1; $i <= $number; $i++) {
        echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>"
    }
    echo "</table>"
}
?>
</body>
</html>