
@extends('layouts.master')
@section('Title', 'DASHBOARD')
@section('section')

			<title>DASHBOARD</title>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="sty/style.css">
</head>


<body class="dashboard">
<center>

	<br>
		<div class="navbar">
	<b>
  		<a href="http://localhost:8000/login"><i class="fa fa-fw fa-user"></i> Log out</a>
  		<a href="http://localhost:8000/product"><i class="fa fa-fw fa-glass"></i> Product</a>

  		<a class="active" href="dashboard.php"><i class="fa fa-fw fa-table"></i> Dashboard</a> 
  </b>
		</div>


<form action="/dashboard" method="POST">
	@csrf

<div class="inventcontainer">


	<br>
		<h1>Add Item Here</h1>
	<br>


	<div class="item">
		<label>Product Name: &emsp;&emsp;</label>
		<input type="text" placeholder="" name="prod_name" required> <br><br>

		 <label>Price: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
		 <input type="text" placeholder="" name="price" required><br><br>

		 <label>Quantity &emsp;&emsp;&emsp;&emsp;&emsp;</label>
		 <input type="text" placeholder="" name="quantity" required><br><br>

		 <label > Description &emsp;&emsp;&emsp;&emsp;</label> 

		 <select name="description" required>
		 	<option></option>
		 	<option>Deliver</option>
		 	<option>Pick Up</option>
		 </select>

		 <br><br>


		 <label>Location &emsp;&emsp;&emsp;&emsp;&emsp;</label>
		 <input type="text" placeholder="" name="location" required><br><br>

		 <label>Date: &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</label>
		 <input type="date" name="_date" required>


	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

</div>
	
	<div class="view">
		<button type="submit" class="sub" value="ADD ITEM" name="add" > ADD ITEM</button>
		<a href="http://localhost:8000/result"> VIEW ALL </a>

	</div>
	

</form>

@endsection