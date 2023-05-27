@extends('Components.main')

@section('content')
   <section class="container my-5">
    <div class="text-center">
        <h2>{{ $category->name }}</h2>
        <p>{{ $category->created_at }}</p>
        <p>{{ $category->id }}</p>
    </div>
   </section>
@endsection
