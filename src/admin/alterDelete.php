<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin delete</title>
    <link rel="stylesheet" type="text/css" href="adminmain.css">
</head>
<body>
<?php
$query = $_POST['query'];
$cond = $_POST['cond'];
$table = $_POST['table'];
include "../display.php";
include "../connect.php";

$sql = $query.$cond;

echo $sql."<br>";
$conn = OpenCon();
if(!mysqli_query($conn, $sql)){
    echo "Failed to delete - table data will be displayed below <br>";
    echo mysqli_error($conn);
} else {
    echo "Successfully delete - table data will be displayed below <br>";
}

displayQueryResults($conn, "SELECT * FROM ".$table);
CloseCon($conn);
?>
<input type="submit" value="Main Menu" onclick="window.location.href='main.html'"/>
</body>
</html>
