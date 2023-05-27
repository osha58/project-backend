@extends('Components.main')

@section('content')
<div class="row px-xl-5">
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">User</a> <span class="mx-2 mb-0">/</span><a href="cart.html">Profile</a>  <strong class="text-black"></strong></div>
      </div>
    </div>
  </div>

<div class="container border border-black mb-2  rounded-2">
  <h2 class="mb-3">Profile</h2>
  <hr>
  <form class="row g-3   mb-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Name</label>
      <input type="text" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
        <label for="inputAddress2" class="form-label">Phone</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="">
      </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="">
    </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Country</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-6">
      <label for="inputState" class="form-label">State</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-6">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary mb-2">edit</button>
    </div>
  </form>
</div>
<br/>




</div>

@endsection
