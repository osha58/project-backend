@extends('Components.main')

@section('content')

<h2 class="text-center">Men</h2>


<div class="d-flex flex-row ">
    <div class="container-fluid mb-5">
        <div class="row ">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="text-center">Categories</h6>
                    {{-- <i class="fa fa-angle-down text-dark"></i> --}}
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 350px">

                        <a href="{{ url("all") }}"class="nav-item nav-link">All</a>
                        <a href="{{ url("men") }}" class="nav-item nav-link ">Men</a>
                        <a href="{{ url("women") }}" class="nav-item nav-link ">Women</a>
                        <a href="{{ url("kids") }}" class="nav-item nav-link ">Kids</a>
                        <a href="" class="nav-item nav-link ">explicapo Quia</a>
                        <a href="" class="nav-item nav-link ">hic Ipsum</a>
                        <a href="" class="nav-item nav-link ">maxime inventore</a>

                    </div>
                </nav>
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

            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
                <ul class="pagination">
                    <li class="page-item {{ $Products->previousPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $Products->previousPageUrl() }}">Previous</a>
                    </li>
                    @for ($i = 1; $i <= $Products->lastPage(); $i++)
                        <li class="page-item {{ $Products->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $Products->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="page-item {{ $Products->nextPageUrl()? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $Products->nextPageUrl() }}">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</div>



     @endsection
