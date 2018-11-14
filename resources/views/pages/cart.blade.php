@extends('layouts.app')

@section('content')
		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
         <div class="col-md-12">
					 <table class="table table-sm">
             <thead>
	             <tr>
		             <th scope="col">Name</th>
		             <th scope="col">Color</th>
		             <th scope="col">Size</th>
		             <th scope="col">Price</th>
		             <th scope="col">QTY</th>
	            </tr>
             </thead>
             <tbody>
 

	              @foreach($products as $product)
	              <tr>
		              <td>{{$product->name}}</td>
		             <td>{{$product->price}}</td>
		             <td>{{$product->price}}</td>
		              <td>{{$product->price}}</td>
		              <td>{{$product->price}}</td>
	                </tr>
	            @endforeach
             </tbody>
             </table>
				 </div>
				</div>
			</div>
		</div>
@endsection
