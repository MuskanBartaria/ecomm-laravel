@extends('master')

@section('content')
<style type="text/css">
body{
  background-color: #DFDFE1;
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

.form input[type="text"], .form input[type="password"], .form input[type="email"]{
width:100%;
border:none;
outline:none;
border-bottom:1px solid grey;
background:transparent;
color: black;
}

label{
	font-size: 20px;
}
/*Login */

.login-box {
 	background:white;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  color:black;
  border: 2px solid #DD9922;
  margin-top: 50px;
   padding:40px 50px;
}	

.login-box h2 {
  text-align: center;
}

.login-box button {
  background-color: #DD9922;
  color: white;
}
.icon1{
  background-color:#DD9922;
  color:white;
  font-size:50px;
  padding:20px 25px ;
  text-align:center;
   border-radius:50%; 
}
</style>
<div class="container ">
	<div class="row">
		<div class="col-12 col-md-4 mx-auto login-box">
			<h2><i class="btn fa fa-user icon1 "></i>
			<h1 class="text-center">Login</h1>
			 <form method="post" class="form" enctype="multipart/form-data" action="loginController">
			 	@csrf
				<label>Email</label>
				  <input type="email"  name="email" required>
				  <br>
				  <br>
				  <label>Password</label>
				  <input type="password"  name="password" required>
				<br>
				<br>
				<button class="btn btn-lg w-100" name="admin">Submit</button><br>
			  </form>
		</div>
	</div>
</div>
@endsection