
@extends('layouts.masters')
@section('Title', 'RESULT')
@section('section')

<body>


	<a href="http://localhost:8000/dashboard">Back</a>

<center>
		<form action="" method="POST">
		@csrf
				
				<label>
				Search Date 
				</label> &emsp; 
				

				<input type="text" placeholder="Search" name="_date"> 

				<input type="submit" value="Search" name="search"></input> <br><br>
	
	</form>
				<h1>Results of Products</h1>
</center>
	
			<center>
		
				<table border= "1px">
					
					<th>Id</th>
					<th>Product Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Location</th>
					<th>Date</th>
					<th>ACTION</th>
	
	<?php


			$servername="localhost";
			$username="root";
			$password="";
			$databasename="dpinventory";

			$connect= mysqli_connect($servername, $username, $password, $databasename);;


			$dataSelect = "Select * from additems";
			$query= mysqli_query($connect,$dataSelect);
			$num= mysqli_num_rows($query);
				
			while($row = mysqli_fetch_array($query)){
	?>
			
			<tr>
			

				<td><?=$row['id']?></td>

				<td><?=$row['prod_name']?></td>
				
				<td><?=$row['price']?></td>
				
				<td><?=$row['quantity']?></td>

				<td><?=$row['description']?></td>

				<td><?=$row['location']?></td>

				<td><?=$row['_date']?></td>

				<th> 
                      <a href="http://localhost:8000/delete?id=<?php echo $row["id"] ?>">Delete</a></th>
                    
				
			</tr>

			
	<?php
}
?>



</body>
</html>

@endsection