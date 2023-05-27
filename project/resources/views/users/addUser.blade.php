@extends('Components.main')


@section('content')
<section class="my-5 container">
    <h2 class="text-danger text-center my-4">create new User</h2>
    <form method="POST" action="{{ url("storeUser") }}" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password </label>
        <textarea type="text" name="password" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Email </label>
        <textarea type="text" name="email" class="form-control"></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">User Role</label>
        <select name="role" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
            <option value="vendor">Vendor</option>

          </select>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">upload file</label>
        <input class="form-control" type="file" name="image">
      </div>
      <button type="submit" class="btn btn-danger">Create User</button>
    </form>
 </section>
@endsection
