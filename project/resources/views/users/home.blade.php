

@extends('Components.main')
@section('content')



<div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="height: 410px;">
            <img class="img-fluid" src="{{asset("assets/images/1.jpeg")}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">SomeThing Is Better</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">fashion Lorrem</h3>
                    {{-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> --}}
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="{{asset("assets/images/2.jpeg")}}"alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">SomeThing Is Better</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">fashion Lorrem</h3>
                    {{-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> --}}
                </div>
            </div>
        </div>
        <div class="carousel-item" style="height: 410px;">
            <img class="img-fluid" src="{{asset("assets/images/3.jpeg")}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 700px;">
                    <h4 class="text-light text-uppercase font-weight-medium mb-3">SomeThing Is Better</h4>
                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">fashion Lorrem</h3>
                    {{-- <a href="" class="btn btn-light py-2 px-3">Shop Now</a> --}}
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-prev-icon mb-n2"></span>
        </div>
    </a>
    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
        <div class="btn btn-dark" style="width: 45px; height: 45px;">
            <span class="carousel-control-next-icon mb-n2"></span>
        </div>
    </a>
</div>
</div>
</div>
</div>
 {{-- <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset("assets/images/1.jpeg")}}" class="d-block ima" alt="...">
        <div class="carousel-caption font">
            <h1 class=""><p class="p11">SOMETHING IS BETTER
            </p> <p class="p22">fashion Lorrem</p></h1>
          </div>
      </div>

      <div class="carousel-item">
        <img src="{{asset("assets/images/3.jpeg")}}"  class="d-block ima" alt="...">
        <div class="carousel-caption font">
            <h1 class=""><p class="p11">SOMETHING IS BETTER
            </p> <p class="p22">fashion Lorrem</p></h1>
          </div>
      </div>
      </div>

      {{-- <div class="carousel-item">
        <img src="{{asset("assets/images/3.jpeg")}}" class="d-block ima" alt="...">
        <div class="carousel-caption font">
            <h1 class=""><p class="p11">SOMETHING IS BETTER
            </p> <p class="p22">fashion Lorrem</p></h1>
          </div>
      </div>
      </div> --}}
      {{-- <div class="carousel-item">
        <img src="{{asset("assets/images/2.jpeg")}}"  class="d-block ima" alt="...">
        <div class="carousel-caption font">
            <h1 class=""><p class="p11">SOMETHING IS BETTER
            </p> <p class="p22">fashion Lorrem</p></h1>
          </div>
      </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> -- --}}







  <section>
    <div class="container my-5">

      <div class="row d-flex justify-content-between">
        <div class="col-md-6 mb-4">
          <div class="card">
            <img src="{{asset("assets/images/4.jpeg")}}" class="card-img-top image2" alt="Image 1">

          </div>
          <div class="my-5">
            <h3  class="hot text-danger">HOT      COLLECTION </h5>
        <h2 class="">New TREND FOR WOMEN</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem reprehenderit ipsum labore dolores, velit quisquam quae
            sit eos at minus soluta alias provident voluptas, eligendi iste, debitis maiores est eveniet.</p>
        <a type="button" class="btn btn-light border"  href="{{ url("all") }}">Shop Now</a>

        </div>

        </div>


        <div class="col-md-4 mb-4">
          <div class="card mb-3">
            <img src="{{asset("assets/images/6.jpeg")}}" class="card-img-top image3 " alt="Image 2">

          </div>
          <div class="card my-5 ">
            <img src="{{asset("assets/images/5.jpeg")}}" class="card-img-top  " alt="Image 3">
          </div>

        </div>




    </div>


    </div>


        </div>
      </div>
    </div>
  </section>



  <hr>
    <h2 class="text-center text-dark opacity-1">Latest Items</h2>
    <hr>
    <!-- Product Section Begin -->
    {{-- <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".new-arrivals">Men</li>
                        <li data-filter=".hot-sales">Women</li>
                        <li class="active" data-filter="*">Kids</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Piqué Biker Jacket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">

                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$67.24</h5>
                            <div class="product__color__select">
                                <label for="pc-4">
                                    <input type="radio" id="pc-4">
                                </label>
                                <label class="active black" for="pc-5">
                                    <input type="radio" id="pc-5">
                                </label>
                                <label class="grey" for="pc-6">
                                    <input type="radio" id="pc-6">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Multi-pocket Chest Bag</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$43.48</h5>
                            <div class="product__color__select">
                                <label for="pc-7">
                                    <input type="radio" id="pc-7">
                                </label>
                                <label class="active black" for="pc-8">
                                    <input type="radio" id="pc-8">
                                </label>
                                <label class="grey" for="pc-9">
                                    <input type="radio" id="pc-9">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Diagonal Textured Cap</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$60.9</h5>
                            <div class="product__color__select">
                                <label for="pc-10">
                                    <input type="radio" id="pc-10">
                                </label>
                                <label class="active black" for="pc-11">
                                    <input type="radio" id="pc-11">
                                </label>
                                <label class="grey" for="pc-12">
                                    <input type="radio" id="pc-12">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-5.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Lether Backpack</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$31.37</h5>
                            <div class="product__color__select">
                                <label for="pc-13">
                                    <input type="radio" id="pc-13">
                                </label>
                                <label class="active black" for="pc-14">
                                    <input type="radio" id="pc-14">
                                </label>
                                <label class="grey" for="pc-15">
                                    <input type="radio" id="pc-15">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item sale">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                            <span class="label">Sale</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Ankle Boots</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$98.49</h5>
                            <div class="product__color__select">
                                <label for="pc-16">
                                    <input type="radio" id="pc-16">
                                </label>
                                <label class="active black" for="pc-17">
                                    <input type="radio" id="pc-17">
                                </label>
                                <label class="grey" for="pc-18">
                                    <input type="radio" id="pc-18">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>T-shirt Contrast Pocket</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$49.66</h5>
                            <div class="product__color__select">
                                <label for="pc-19">
                                    <input type="radio" id="pc-19">
                                </label>
                                <label class="active black" for="pc-20">
                                    <input type="radio" id="pc-20">
                                </label>
                                <label class="grey" for="pc-21">
                                    <input type="radio" id="pc-21">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>Basic Flowing Scarf</h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <div class="rating">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h5>$26.28</h5>
                            <div class="product__color__select">
                                <label for="pc-22">
                                    <input type="radio" id="pc-22">
                                </label>
                                <label class="active black" for="pc-23">
                                    <input type="radio" id="pc-23">
                                </label>
                                <label class="grey" for="pc-24">
                                    <input type="radio" id="pc-24">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </section>  --}}
    <!-- Product Section End -->


     <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active text-dark"  href="">all</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-dark"  href="">Men</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-dark"  href="">Womens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active text-dark"  href="">Kids</a>
        </li>

      </ul>

      <div class="d-flex flex-row ">
        <div class="container-fluid mb-5">
        <section class="col-lg-9 ">
            <div class="text-center ">

                <div class="row ">
                    @foreach ($LatestProducts as $product )



                    <div class="col-sm-3">

                        <div class="product-item">

                          <figure class="product-thumb">
                            <div class="rate position-absolute end-0 top-0">
                                <span class="bg-dark"><h4 class="text-light bg-dark">{{ $product->id }}2.00$ </h4></span>
                            </div>
                            <img  src="{{ asset("$product->image") }}" alt="" class="img-fluid imgproduct">
                            <div class="action-links">
                              <a  href="{{ url("showProduct" , $product->id) }}" class="quick-view icon"><i class="far fa-eye"></i></a>
                              <a href="#" class="wishlist icon"><i class="far fa-heart"></i></a>
                              <a  href="{{ url("MyCart" , $product->id) }}" class="add-cart icon"><i class="fas fa-cart-plus"></i></a>
                            </div>
                          </figure>
                          <div class="product-content">
                            <h3>{{$product->name}}</h5>
                            <div class="ratings">
                              <a href="#"><i class="far fa-star"></i></a>
                              <a href="#"><i class="far fa-star"></i></a>
                              <a href="#"><i class="far fa-star"></i></a>
                              <a href="#"><i class="far fa-star"></i></a>
                              <a href="#"><i class="far fa-star"></i></a>
                            </div>

                          </div>
                        </div>
                      </div>

                    @endforeach
                  {{-- {{$Products->links()}} --}}
                </div>

            </div>
        </section>
    </div>
</div>




      <div class="row">

        <div class="col-lg-6 col-md-6 col-12 gap my-2 ">
            <img src="{{asset("assets/images/19.jpeg")}}" alt="" class="threads w-100">
            {{-- <h1>70% off</h1> --}}
            {{-- <h2>Tao Kinben Na</h2> --}}
        </div>

        <div class="col-lg-6 col-md-6 col-12 gap my-2  ">
            <img src="{{asset("assets/images/20.jpeg")}}" alt="" class="threads w-100 h-100" >
        </div>
      </div>





<hr>
      <h2 class="text-center text-dark opacity-1">Trending Items</h2>
      <hr>

<<div class="d-flex flex-row ">
    <div class="container-fluid mb-5">
        <div class="row ">
            <div class="col-lg-1 d-none d-lg-block">

            </div>

            <section class="col-lg-9">
                <div class="text-center">

                    <div class="row">
                        @foreach ($Products as $product )



                        <div class="col-sm-3">

                            <div class="product-item">

                              <figure class="product-thumb">
                                <div class="rate position-absolute end-0 top-0">
                                    <span class="bg-dark"><h4 class="text-light bg-dark">{{ $product->id }}2.00$ </h4></span>
                                </div>
                                <img  src="{{ asset("$product->image") }}" alt="" class="img-fluid imgproduct">
                                <div class="action-links">
                                  <a  href="{{ url("showProduct" , $product->id) }}" class="quick-view icon"><i class="far fa-eye"></i></a>
                                  <a href="#" class="wishlist icon"><i class="far fa-heart"></i></a>
                                  <a  href="{{ url("MyCart" , $product->id) }}" class="add-cart icon"><i class="fas fa-cart-plus"></i></a>
                                </div>
                              </figure>
                              <div class="product-content">
                                <h3>{{$product->name}}</h5>
                                <div class="ratings">
                                  <a href="#"><i class="far fa-star"></i></a>
                                  <a href="#"><i class="far fa-star"></i></a>
                                  <a href="#"><i class="far fa-star"></i></a>
                                  <a href="#"><i class="far fa-star"></i></a>
                                  <a href="#"><i class="far fa-star"></i></a>
                                </div>

                              </div>
                            </div>
                          </div>

                        @endforeach
                      {{-- {{$Products->links()}} --}}
                    </div>

                </div>
            </section>



        </div>
    </div>
</div>
















     <section class="home" id="home">
<div class="overlay">
    <div class="container">
        <div class="row g-5 align-items-center justify-content-center about">
            <div class="col-md-8">
                <div class="msg text-center py-5 text-white">
                    <h2 class=" fa-4x"><span>,,</span> </h2>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita culpa
                        vitae blanditiis
                        nulla
                        impedit dolorem?</p>
                </div>
            </div>
        </div>
    </div>
</div>

</section>




@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-McSVO7L1F8rG4v1gH8Qf3L+e4pNz9pW4DzB4vT5+PZT8jhdVrZfBUUvXc9yWwVQ4O7R3VrPjDMBHu4MWtjx0Tw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
