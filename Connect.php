<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Connnect DataBase</h1>
    <form  method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" >
    <input type="submit" name="sub" id="he" value="Connect">
    </form>
    <?php
    if(isset($_POST["sub"])){
$servername = "localhost";
$username = "root";
$password = "";

try {
$conn = new PDO("mysql:host=$servername;dbname=connacte_database", $username, $password);
  // set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<h4 class='text'>Connacted successfully</h4>";
} catch(PDOException $e) {
echo "Connacte failed" ;
}





}
?>
</body>
</html>