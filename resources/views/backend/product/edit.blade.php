@extends('backend.master')

@section('content')
    <section class="p-3">
        <h1 class="text-center mb-3">Edit title and Picture</h1>
        <h3 class="text-center text-primary mb-3"></h3>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{$product->title}}">
              </div>
              <div class="mb-3">
                <label class="form-label">Desc</label>
                <input type="text" class="form-control" name="desc" value="{{$product->desc}}">
              </div>
              <div class="mb-3">
                <img src="{{asset('/')}}{{$product->image}}" alt="product-image" height="50px" width="50px">
              </div>
            <div class="mb-3">
              <label class="form-label">Upload Image</label>
              <input type="file" class="form-control" name="image" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary">Update Title And PIcture</button>
          </form>
    </section>
@endsection