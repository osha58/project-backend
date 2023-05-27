<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
        <div class="col-md-6 d-none d-md-block">
        <img src="{{asset("assets/images/22.jpeg")}}" class="img-fluid" style="min-height:100%;" />
        </div>
        <div class="col-md-6 bg-white p-5">
        <h3 class="pb-3">Sign In</h3>
        <div class="form-style">

        <form action="{{url("login")}}" method="Post">
         @csrf
        <div class="form-group pb-3">
        <label for="exampleInputEmail1" class="form-label">Email </label>
        <input type="email" placeholder="Email" class="form-control" name="email">
        </div>


         <div class="form-group pb-3">
         <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="password" placeholder="Password" class="form-control" name="password">
         </div>

        <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Remember Me</span></div>
        <div><a href="#">Forget Password?</a></div>
        </div>
        <div class="pb-2">
        <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2">Sign In</button>
        </div>
        </form>
        <div class="sideline">OR</div>
        <div>
        <button type="submit" class="btn btn-primary w-100 font-weight-bold mt-2"><i class="fa fa-facebook" aria-hidden="true"></i> Login With Facebook</button>
        </div>
        <div class="pt-4 text-center">
        Not a member? <a href="#">Sign Up</a>
        </div>
        </div>
        </div>
        </div>
        </div>







<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
</body>
</html>
