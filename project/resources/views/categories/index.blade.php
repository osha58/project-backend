@extends('Components.main')
@section('content')
  <section class="container my-5">
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">products</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>

        @foreach ($all_categories as  $category)
        <tr>
          <th scope="row">{{ $category->id }}</th>
          <td>{{ $category->name }}</td>
          <td>
            @foreach (  $category->products as $product)
            {{ $product->name }} <br>
            @endforeach
        </td>
          <td>
              <a class="btn btn-primary" href="{{ url("categories" , $category->id) }}">show</a>
              <a class="btn btn-info" href="{{ url("categories/edit" , $category->id) }}">edit</a>
              <a class="btn btn-danger" href="{{ url("categories/destroy" , $category->id) }}">delete</a>
          </td>

        </tr>
        @endforeach

        </tbody>
      </table>

  </section>



@endsection
