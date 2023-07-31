<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>

<h2>Electricity Bill Calculator</h2>

<form method="post">
    <label for="units">Enter the units consumed - </label>
    <input type="number" name="units" id="units" required>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $units = $_POST["units"];
    $billAmount = 0;

    if ($units <= 50) {
        $billAmount = $units * 3.50;
    } elseif ($units <= 100) {
        $billAmount = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 150) {
        $billAmount = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
        $billAmount = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
    }

    echo "<p>Total electricity bill amount: Rs. " . $billAmount . "</p>";
}
?>

</body>
</html>
