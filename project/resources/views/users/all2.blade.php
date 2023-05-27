<section class="col-lg-9">
    <div class="text-center">

        <div class="row">
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
