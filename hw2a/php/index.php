<?php
$servername = "172.19.0.1";
$username = 'root'; 
$password = 'secret';
$dbname = 'recipes_database';
$port=3306;
$conn = mysqli_connect($servername, $username, $password, $dbname,$port);
$sql = "SELECT recipe_id,recipe_name FROM recipes_database.recipes;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["recipe_id"]. " - Name: " . $row["recipe_name"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

//<?php
//phpinfo();
//?>

