@extends('layouts.app')

@section('content')
		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="{{route('home')}}">Home</a></li>
							<li class="active">Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-11">
							<table class="table">
                              <thead class="thead-dark">
                               <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Size</th>
                                <th scope="col">Color</th>
                                <th scope="col">Number</th>
                                <th scope="col">Option</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                             @foreach($cart_product as $product)
                                <td>{{$product->name}}</td>
                                <td><img width="100px;"src="{{asset($product->image)}}" alt="{{$product->name}}"></td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->size}}</td>
                                <td>{{$product->color}}</td>
                                <td>{{$product->number}}</td>
                                <td>
                                	<button>add</button>
                                	<button>minus</button>
                                	<button>delete</button>
                                </td>
                             @endforeach
                             </tr>
                          </tbody>
                      </table>
				</div>
			</div>		
		</div>
@endsection
