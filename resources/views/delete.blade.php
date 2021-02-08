@extends('layouts.masters')
@section('Title', 'DELETE')
@section('section')

<a href="http://localhost:8000/result">Back</a>

<center>


<?php
$db = mysqli_connect('localhost', 'root', '', 'dpinventory');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['id']))
{

$result = mysqli_query($db,"DELETE FROM additems WHERE id=".$_GET['id']);
if($result==true)
	echo "Sucessfully Deleted!";
header("Location:http://localhost:8000/prod");
}

?>
</center>
@endsection