<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>

<h2>Day of the Week</h2>

<form method="post">
    <label for="day_number">Enter the day number (1 to 7):</label>
    <input type="number" name="day_number" id="day_number" min="1" max="7" required>
    <input type="submit" value="Show Day">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $dayNumber = $_POST["day_number"];

    switch ($dayNumber) {
        case 1:
            $day = "Monday";
            break;
        case 2:
            $day = "Tuesday";
            break;
        case 3:
            $day = "Wednesday";
            break;
        case 4:
            $day = "Thursday";
            break;
        case 5:
            $day = "Friday";
            break;
        case 6:
            $day = "Saturday";
            break;
        case 7:
            $day = "Sunday";
            break;
        default:
            $day = "Invalid number";
            break;
    }

    echo "<p>The day of the week is: " . $day . "</p>";
}
?>

</body>
</html>
