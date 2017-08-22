<!DOCTYPE html>
<html lang="en">
	<title>Προβολή</title>
	<?php include("header.html"); ?>
<head>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php 
	 if(isset($_POST["submit"]))
	{
				/*database connection */
		include("db/connectdb.php");
		
		include("style.css");
			
		$price=$_POST['price'];
		$date=$_POST['date'];
		$selected=$_POST['selected'];
		$comment=$_POST['comment'];

		$sql = "INSERT INTO eksoda (price, date, selected, comment)
		VALUES ('$price', '$date', '$selected', '$comment')";

		if ($conn->query($sql) === TRUE){
			/*echo "<script type= 'text/javascript'>alert('New record created successfully');</script>"; */
			/*Redirect after submit */
			header("Location: index.php");
		}
		else{
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
		}
		$conn->close();
	} 
?>
	<h3 align="center"> Εισαγωγή εξώδων: </h3>
	<div class="row">
     <div class="col-md-2"></div>
     <div class="col-md-4">
	<form method="post" name="eksoda-form">
		<label>Ποσό</label><input type="number" name="price" class="form-control" required="true">
		<label>Ημερομηνία</label><input type="date" name="date" class="form-control"required="true">
		<label class="radio-inline"><input type="radio" name="selected" value="general"required="true">Γενικά</label>
        <label class="radio-inline"><input type="radio" name="selected" value="car">Αυτοκήνιτο</label>
        <label class="radio-inline"><input type="radio" name="selected" value="moto">Μηχανή</label>
		</br>
		<label>Αιτιολογεία</label><textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
		<input type="submit" name="submit"></input>
	</div>
	<div class="col-md-2"></div>
	</div>
	  </form>
	
		<?php    //Connection Database & Table
			include("db/connectdb.php");
			$sql = "SELECT * FROM eksoda";
			
	?>
	
	
		<!-- ----------------------   Show Data ----------------------- -->
		
	<div class="row">
     <div class="col-md-2"></div>
     <div class="col-md-6">
	<h3 align="center"> Τα έξωδά μου: </h3>

	<table class="table table-striped">
		<thead>
			<tr>
			<th>id</th>
			<th>Ημερομηνία</th>
			<th>Σχόλιο</th>
			<th>Κατηγορία</th>
			<th>Τιμή</th>
			<th>Επεξεργασία</th>
			</tr>
		</thead>
		<tbody>
		</div>
		  <div class="col-md-2"></div>
		  </div>
			<?php
		 $result = $conn->query($sql);

			   // output data of each row
	while($row = mysqli_fetch_array($result)) {
				//echo "  " . $row["date"]. "  " . $row["comment"]. " " . $row["selected"]. " " . $row["price"]. "<br>";
			   echo "<tr>
						<td>".$row["id"]."</td>
					  <td>".$row["date"]."</td>
					  <td>".$row["comment"]."</td>
					  <td>".$row["selected"]."</td>
					  <td>".$row["price"]."</td>
					  <td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"edit.php?id=$row[id]\">Edit</a></td>
					</tr>" ;
			}
			  $conn->close();
			?>
		</tbody>
	</table>
	<?php include("footer.php"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>