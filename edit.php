<?php
// including the database connection file
include("/db/connectdb.php");
 
if(isset($_POST['update']))
{    
		$id = $_POST['id'];
		$price=$_POST['price'];
		$date=$_POST['date'];
		$selected=$_POST['selected'];
		$comment=$_POST['comment'];   
    
    // checking empty fields
    if(empty($price) || empty($date) || empty($selected)|| empty($comment)) {            
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        //updating the table
        $result = mysqli_query($conn, "UPDATE eksoda SET price='$price',date='$date',selected='$selected', comment='$comment' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: index.php");
    }
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM eksoda WHERE id=$id");
 
while($row = mysqli_fetch_array($result))
{
		$id = $row['id'];
		$price= $row['price'];
		$date= $row['date'];
		$selected= $row['selected'];
		$comment= $row['comment'];   
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>price</td>
                <td><input type="text" name="price" value="<?php echo $price;?>"></td>
            </tr>
            <tr> 
                <td>date</td>
                <td><input type="text" name="date" value="<?php echo $date;?>"></td>
            </tr>
            <tr> 
                <td>selected</td>
                <td><input type="text" name="selected" value="<?php echo $selected;?>"></td>
            </tr>
			<tr> 
                <td>comment</td>
                <td><input type="text" name="comment" value="<?php echo $comment;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>