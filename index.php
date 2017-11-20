<!DOCTYPE html>
<html lang="el">
<head>
  <title>Προβολή</title>
  	<meta charset="utf-8">
	
	<!-- Bootstrap Header file --> 
	<?php include("header.html"); ?>
	
<head>
		<!-- Style css file -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
		<!-- ----Insert data form------ -->
	<div class="inseart_data">
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
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>  
		<!-- -----Insert to Database ----- !>
<?php 	
	if(isset($_POST["submit"]))
	{	
			//Database connection
		include("db/connectdb.php");
			
		$sql = "INSERT INTO eksoda (price, date, selected, comment)
		VALUES ('".$_POST['price']."', '".$_POST['date']."', '".$_POST['selected']."', '".$_POST['comment']."')";
		
		if (mysqli_multi_query($conn, $sql)) 
		{
			echo "<script type= 'text/javascript'>alert('New record created successfully');</script>"; 
					//Redirect after submit
			/*header("Location: index.php") */
		}
		else{
			echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
		}
		mysqli_close($conn);
	} 
?>

		<!-- ---------- Show Data from Database--------- -->
	<div class="show_data">	
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
		<div class="col-md-2"></div></div>
	
<?php    
				//Connection to Database
			include("db/connectdb.php");
			
				// SQL Query
			$sql = "SELECT * FROM eksoda";		
			$result = mysqli_query($conn, $sql);

			   // output data of each row
			while($row = mysqli_fetch_array($result)) 
			{
			//	echo "  " .$row["date"]. "  " .$row["comment"]. " " .$row["selected"]. " " .$row["price"]. "<br>";
			   echo "<tr>
					  <td>".$row["id"]."</td>
					  <td>".$row["date"]."</td>
					  <td>".$row["comment"]."</td>
					  <td>".$row["selected"]."</td>
					  <td>".$row["price"]."</td>
					  <td><a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a> | <a href=\"edit.php?id=$row[id]\">Edit</a></td>
					</tr>" ;
			}
			  mysqli_close($conn);
?>
			</tbody>
		</table>
	</div>

	<?php include("footer.php"); ?>
	
</body>
</html>