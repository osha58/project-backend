@extends('Components.main')


@section('content')
   <section class="my-5 container">
      <h2 class="text-danger text-center my-4">create new Category</h2>
      <form action="{{ url("categories/store") }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Category Name</label>
          <input type="text" name="name" value="{{old("name")}}"  class="form-control">
          @error('name')
          <div class="alert alert-danger ">
            <p>{{$message}}</p>
          </div>
          @enderror

        </div>
        <button type="submit" class="btn btn-danger">Create Category</button>
      </form>
   </section>
@endsection
