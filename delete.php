<?php
//including the database connection file
include("/db/connectdb.php");
 
//getting id of the data from url
if (isset($_GET['id']) && is_numeric($_GET['id']))

{
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM eksoda WHERE $id=id");
echo $id;

//redirecting to the display page (index.php in our case)
header("Location:index.php");
}
?>