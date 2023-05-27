<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
<h1 class="text-center my-5">Fashion</h1>
<div class="container">
<div class="row m-5 no-gutters shadow-lg">
<div class="col-md-6 d-none d-md-block">
<img src="{{asset("assets/images/22.jpeg")}}"  class="img-fluid" style="min-height:100%;" />
</div>
<div class="col-md-6 bg-white p-5">
<h3 class="pb-3">Sign Up</h3>
<div class="form-style">

<form action="{{url("register")}}" method="Post">
    @csrf
<div class="form-group pb-3">
 <label for="exampleInputEmail1" class="form-label">Name</label>
 <input type="text" placeholder="Email" class="form-control" name="name" >
</div>
<div class="form-group pb-3">
<label for="exampleInputEmail1" class="form-label">Email </label>
<input type="email" placeholder="Email" class="form-control" name="email">
</div>
<div class="form-group pb-3">
<label for="exampleInputEmail1" class="form-label">Password</label>
<input type="password" placeholder="Password" class="form-control" name="password">
</div>
<div class="form-group pb-3">
<label for="exampleInputEmail1" class="form-label">Confirm Password</label>
 <input type="password" placeholder="Confirm Password" class="form-control"  >
</div>

<div class="pb-2">
<button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Sign UP</button>
</div>
</form>

<div class="pt-4 text-center">
Already have account <a href="#">Sign in</a>
</div>
</div>
</div>
</div>
</div>


<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
</body>
</html>
