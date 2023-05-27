@extends('Components.main')
@section('content')
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container mb-3">
      <div class="row mb-5">
        <form class="col-md-12" method="post">
          <div class="site-blocks-table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="product-thumbnail">Image</th>
                  <th class="product-name">Product</th>
                  <th class="product-price">Price</th>
                  <th class="product-quantity">Quantity</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Remove</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="product-thumbnail">
                    <img src="{{ asset("$product->image") }}" alt="Image" class="img-fluid h-50">
                  </td>
                  <td class="product-name">
                    <h2 class="h5 text-black">{{$product->name}}</h2>
                  </td>
                  <td>{{ $product->id }}2.00$</td>
                  <td>
                    <div class="input-group mb-3" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button" id="minus">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" id="quantity">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button" id="plus">&plus;</button>
                        </div>
                      </div>
                      {{-- <span class="total-label">Total:</span><span class="total-value">$10</span> --}}


                      {{-- <span id="total">{{ $product->id }}2.00$</span> --}}

                  </td>
                  <td> <span class="total-label"></span><span class="total-value">{{ $product->id }}</span>2.00$</td>
                  {{-- <td> <span id="total">{{ $product->id }}</span>2.00$</td> --}}
                  <td><a  href="{{ url("products/destroy" , $product->id) }}" class="btn btn-primary btn-sm">X</a></td>
                </tr>


              </tbody>
            </table>
          </div>
        </form>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="row mb-5">
            <div class="col-md-6 mb-3 mb-md-0">
              <button class="btn btn-primary btn-sm btn-block">Update Cart</button>
            </div>
            <div class="col-md-6">
              <a class="btn btn-outline-primary btn-sm btn-block" href="{{ url("all") }}">Continue Shopping</a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label class="text-black h4" for="coupon">Coupon</label>
              <p>Enter your coupon code if you have one.</p>
            </div>
            <div class="col-md-8 mb-3 mb-md-0">
              <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
            </div>
            <div class="col-md-4">
              <button class="btn btn-primary btn-sm">Apply Coupon</button>
            </div>
          </div>
        </div>
        <div class="col-md-6 pl-5">
          <div class="row justify-content-end">
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="text-black">Subtotal</span>
                </div>
                <div class="col-md-6 text-right">
                   <td> <span class="subtotal-label"></span><span class="subtotal-value">{{ $product->id }}</span>2.00$</td>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                    <td> <span class="total-label"></span><span class="total-value">{{ $product->id }}</span>2.00$</td>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <a class="btn btn-primary btn-lg py-3 btn-block" href="{{ url("CheckOut" , $product->id) }}">Proceed To Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  const minusBtn = document.getElementById('minus');
const plusBtn = document.getElementById('plus');
const quantityInput = document.getElementById('quantity');
const totalLabelSpans = document.querySelectorAll('.total-label');
const totalValueSpans = document.querySelectorAll('.total-value');
const subtotalLabelSpans = document.querySelectorAll('.subtotal-label');
const subtotalValueSpans = document.querySelectorAll('.subtotal-value');

minusBtn.addEventListener('click', function() {
  let currentValue = parseInt(quantityInput.value);
  if (currentValue > 1) {
    quantityInput.value = currentValue - 1;
    updateTotalAndSubtotal(currentValue - 1);
  }
});

plusBtn.addEventListener('click', function() {
  let currentValue = parseInt(quantityInput.value);
  quantityInput.value = currentValue + 1;
  updateTotalAndSubtotal(currentValue + 1);
});

function updateTotalAndSubtotal(quantity) {
  let unitPrice ={{ $product->id }}; // Replace with your own unit price
  let total = quantity * unitPrice;
  let subtotal = total - {{ $product->id }}; // Replace with your own subtotal calculation
  totalLabelSpans.forEach(function(totalLabelSpan) {
    totalLabelSpan.textContent = '';
  });
  totalValueSpans.forEach(function(totalValueSpan) {
    totalValueSpan.textContent = `${total}`;
  });
  subtotalLabelSpans.forEach(function(subtotalLabelSpan) {
    subtotalLabelSpan.textContent = '';
  });
  subtotalValueSpans.forEach(function(subtotalValueSpan) {
    subtotalValueSpan.textContent = `${subtotal}`;
  });
}
  </script>


@endsection
