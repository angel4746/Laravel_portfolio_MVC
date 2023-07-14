@extends('backend.master')

@section('content')
    <section class="p-3">
        <h1 class="text-center mb-3">Add Picture</h1>
        <h3 class="text-center text-primary mb-3">{{Session::get('massage')}}</h3>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
              </div>
              <div class="mb-3">
                <label class="form-label">Desc</label>
                <input type="text" class="form-control" name="desc">
              </div>
            <div class="mb-3">
              <label class="form-label">Image</label>
              <input type="file" class="form-control" name="image" accept="image/*">
            </div>
            
            <button type="submit" class="btn btn-primary">Add Picture</button>
          </form>
    </section>
@endsection