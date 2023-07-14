@extends('backend.master')
@section('content')
    <section class="p-3">
        <h1 class=" text-center mb-3 ">Manage Catagory</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#SI</th>
                    <th scope="col">Title</th>
                    <th scope="col">Decs</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                    @foreach ($products as $product)
                     <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->desc}}</td>
                            <td> <img src="{{asset('/')}}{{$product->image}}" alt="image" height="50px" width="50px"> </td>
                            <td>
                                <a href="{{route('edit',$product->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('destroy',$product->id)}} " class="btn btn-danger" onclick="return confrim('are you sure u want to delete it?')">Delete</a>
                            </td>
                      </tr>
                    @endforeach
                    
                
            </tbody>
        </table>
    </section>
    
@endsection 