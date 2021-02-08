@extends('layouts.master')
@section('Title', 'REGISTER')
@section('section')


<html> 
<title>REGISTER</title> 
<head> 
<link rel="stylesheet" type="text/css" href="sty/style.css">
</head> 
<body class="body"> 
<center>
     
<div id="" class="regisbody"> 
   
    
                <form method="POST">
                    @csrf

                        <h1> REGISTER</h1>
                                <div>

                                    <input placeholder="First Name" type="text"  name="firstname" required /> <br>
                                    <input placeholder="Last Name" type="text"  name="lastname" required /><br>
                                    <input placeholder="Username" type="text"  name="username" required /><br>
                                    <input placeholder="Your Email" type="text"  name="email" required />   <br>
                                    <input placeholder="Mobile number" type="number"  name="mobile" required /><br>
                                    <input placeholder="Password" type="password"  name="password"  required /><br>
                                     
                            <br>
                                    
                                    <input type="submit" class="button2" value="Register"  name="sub" /> <br>
                            <br><br>

                                     <a href="http://localhost:8000/login" class="iam">I am already member</a>

                           </div>
                    </form> 

           </div>      

    

</center>
</body> 
</html>

@endsection
                        