<!--kumariviashnavi5@gmail.com -->

<?php
$result = [];

try {
    $name = $_GET['name'] ?? "Student";

    $url = "http://localhost/mini-api/api/greet.php?name=" . urlencode($name);

    $json = file_get_contents($url);

    if ($json === false) {
        throw new Exception("API not found");
    }

    $result = json_decode($json, true);

    if (!$result) {
        throw new Exception("Invalid JSON");
    }

} catch (Exception $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Mini API Project</h1>

<form method="GET">
    <input type="text" name="name" placeholder="Enter Name">
    <button type="submit">Call API</button>
</form>

<?php
if(isset($error)){
    echo "<p class='error'>$error</p>";
}

if(!empty($result)){
    echo "<h2>Response</h2>";
    echo "<p><b>".$result['message']."</b></p>";
}
?>

<hr>

<a href="api/list.php" target="_blank">View List API</a>

</body>
</html>