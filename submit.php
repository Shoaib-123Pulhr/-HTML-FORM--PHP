<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admission form </title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Form Submission  has been Received</h1>";
    echo "<ul>";
    foreach ($_POST as $key => $value) {
        echo "<li><strong>" . htmlspecialchars($key) . ":</strong> " . htmlspecialchars($value) . "</li>";
    }
    echo "</ul>";
} else {
    echo "<h3>No data  is submitted.</h3>";
}
?>

    
</body>
</html>