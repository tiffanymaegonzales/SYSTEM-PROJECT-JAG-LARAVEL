@extends('layouts.masters')
@section('Title', 'SEARCH')
@section('section')

<body>

<style type="text/css">
		
		h1{
			padding: 25px;
		}

		body{
			background-color: lightblue;
		}
	
		table,tr,th{
			width: 700px;
			padding: 20px;
			height: 50px;
			border-collapse: collapse;
			text-align: center;
		}

		 a{
			padding: 0px;
			border: 1px solid black;
			background-color: white;
			text-decoration: none;
			color: black;
		}
		button{
			width: 10px;
			height: 5px;
		}

		@media print{
    #print-btn{
        display: none
        
    }
}

	div.print{
		margin-left: 720px;
	}

	</style>




<a href="http://localhost:8000/result" class="back">BACK</a>		
	
			<center>
		<h1>Results of Products</h1>

				<table border= "1px">

					<th>Product Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Description</th>
					<th>Location</th>
					<th>Date</th>



<?php
		$servername="localhost";
		$username="root";
		$password="";
		$databasename="dpinventory";


		$connect= mysqli_connect($servername, $username, $password, $databasename);


		if (isset($_POST ['search'])) {
			
			$dat = $_POST['_date'];

			$query = "SELECT * FROM additems WHERE _date= '$dat' ";
			$query_run = mysqli_query($connect, $query);

			
				while($row = mysqli_fetch_array ($query_run))
				{
			
			?>

<tr>	
				<td><?php echo $row ['prod_name'] ?> </td>
				
				<td><?php echo $row['price']?></td>
				
				<td><?php echo $row['quantity']?></td>

				<td><?php echo $row['description']?></td>

				<td><?php echo $row['location']?></td>

				<td><?php echo $row['_date']?></td>

		</tr>
	<?php
}
}
?>
</table>

<br> <br><br><br> 

<div class="print">
<input name="" type="button" value="Print" onclick="javascript:window.print()" id="print-btn" style="cursor:pointer; float:left;" />
</div>


</body>
</html>

@endsection