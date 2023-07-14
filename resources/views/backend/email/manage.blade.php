@extends('backend.master')
@section('content')
    <section class="p-3">
        <h1 class=" text-center mb-3 ">User Text</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#SI</th>
                   
                    <th scope="col">Decs</th>
                   
                </tr>
            </thead>
            <tbody>
                -=o[lo]
                
			@foreach ($emails as $email)
				
			<div class="col">
					<h5 class="p-5">{{$email->desc}}</h5>
				</div>
			</div>

			@endforeach    
                
            </tbody>
        </table>
    </section>
    
@endsection 