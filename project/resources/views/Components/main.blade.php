<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>@yield('page_title')</title>
    <link rel="stylesheet"  href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet"  href="{{asset("assets/css/style3.css")}}">
    <link rel="stylesheet"  href="{{asset("assets/css/style2.css")}}">
    {{-- <link rel="stylesheet"  href="{{asset("assets/css/style.min.css")}}"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://fonts.googleapis.com/css?family=Birthstone Bounce' rel='stylesheet'>



</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light" >
        <div class="container">
          <a class="navbar-brand text-dark" id="font2" href="{{ url("/") }}">Free Shipping on All orders Over $75</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              @if(!Auth::user())
              <li class="nav-item text-light">
                <a class="nav-link active text-dark"  href="{{ url("login") }}">login</a>
              </li>
              <li class="nav-item text-light">
                <a class="nav-link active text-dark"  href="{{ url("register") }}">Register</a>
              </li>
               @else
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Auth::user()->name}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ url("Profile") }}">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Wishlist</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ url("orders") }}">My Orders</a></li>
                  <li><a class="dropdown-item" href="#">Change Password</a></li>
                </ul>
              </li>


              <li class="nav-item text-dark">
                <a class="nav-link active"  href="{{ url("MyCart") }}"><i class="fa fa-shopping-cart mr-1 "></i> My Cart</a>


              </li>

              <li class="nav-item text-dark">
                <a class="nav-link active"  href="{{ url("logout") }}">Logout</a>
              </li>
              @endif
            </ul>
     </nav>
         </div>
        </div>


        <div class="col-lg-6 col-6 text-left my-2 offset-md-3">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control rounded-pill" placeholder="Search for products">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary rounded-pill input-group-append" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>

        {{-- <div class="container my-2" >
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <form class="form-inline">
                  <div class="input-group rounded-pill">
                    <input type="text" class="form-control rounded-pill " placeholder="Search Here What You Need..." >

                      <button class="btn btn-outline-secondary rounded-pill input-group-append" type="button"><i class="fa fa-search"></i></button>

                  </div>
                </form>
              </div>
            </div>
          </div> --}}
















    <nav class="navbar navbar-expand-lg bg-dark p-4 " id="navbar">
        <div class="container">
          <a class="navbar-brand text-light" id="font" href="{{ url("/") }}">fashion</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("/") }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("men") }}">Men</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("women") }}">Womens</a>
              </li>

              @if(Auth::user() && Auth::user()->role == "admin")
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("categories") }}">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("products") }}">Product</a>
              </li>
              @endif
              @if(Auth::user() && Auth::user()->role == "vendor")
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("categories/create") }}">Create Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("addUser") }}">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-light"  href="{{ url("products/create") }}">Create Product</a>
              </li>
              @endif
              <li class="nav-item text-light">
                <a class="nav-link active text-light"  href="{{ url("kids") }}">Kids</a>
              </li>

              <li class="nav-item text-light">
                <a class="nav-link active text-light"  href="{{ url("") }}">Explicapo Quia</a>
              </li>
              <li class="nav-item text-light">
                <a class="nav-link active text-light"  href="{{ url("") }}">Hic Ipsum</a>
              </li>



            </ul>

     </nav>
         </div>
        </div>

    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, ipsum obcaecati dolorem repellendus facere quae impedit eos ea fuga dicta nobis, laudantium, et nulla repudiandae omnis perspiciatis corrupti architecto odit!</p> --}}
    {{-- Content --}}
    @yield('content')


    <footer class="footer bg-dark  py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h4 class="text-light">Categories</h4>
              <ul class="list-unstyled my-2 text-light">
                <li>Men</li>
                <li>Women</li>
                <li>Kids</li>
                <li>Explicapo Quia</li>
                <li>Hic Ipsum</li>

              </ul>
            </div>
            <div class="col-md-4">
              <h4  class="text-light">Customer Service</h4>
              <ul class="list-unstyled my-2 text-light">
                <li>My Orders</li>
                <li>Card</li>
                <li>Wishlist</li>
                <li>Login</li>
                <li>Register</li>
              </ul>
            </div>
            <div class="col-md-4">
              <h4  class="text-light">Find Us!</h4>
              <h4 class="text-light">Connect With Us</h4>
              <ul class="list-unstyled my-2">
                <div class="col-md-4">

                    <div class="row">
                      <div class="col-4">
                        <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                      </div>
                      <div class="col-4">
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                      </div>
                      <div class="col-4">
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                      </div>
                    </div>
                  </div>
              </ul>
            </div>
          </div>
          <hr>
          <div class="row text-light">
            <div class="col-md-12">
              <p>&copy; 2023 Your Company. All rights reserved. Ecommerce</p>
            </div>
          </div>
        </div>
      </footer>




<script src="{{asset("assets/js/jquery-3.6.3.js")}}"></script>
 <script src="{{asset("assets/js/script.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
<script src="https://use.fontawesome.com/releases/v6.4.0/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
