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
                                <th scope="col">Add</th>
                                <th scope="col">Subtract</th>
                                <th scope="col">Delete</th>
                              </tr>
                              </thead>
                              <tbody>
                             
                             @foreach($cart_product as $product)
                              <tr>
                                <td>{{$product->name}}</td>
                                <td><img width="100px;"src="{{asset($product->image)}}" alt="{{$product->name}}"></td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->size}}</td>
                                <td>{{$product->color}}</td>
                                <td>{{$product->number}}</td>
                                <td>
                                  <form action= "{{ route('cart.add', $product->id) }}" method= "post">
                                       @csrf
                                       {{ method_field('PUT')}}
                                        <button type= "submit" class="btn btn-sm btn-info">  
                                           <i class="fas fa-plus"></i>
                                        </button>
                                  </form>
                                </td>
                                <td>
                                <form action= "{{ route('cart.minus', $product->id) }}" method= "post">
                                       @csrf
                                       {{ method_field('PUT')}}
                                      <button type= "submit" class="btn btn-sm btn-warning">  
                                        <i class="fas fa-minus"></i>
                                      </button>
                                  </form>
                                </td>
                                <td>
                                  <form action= "{{ route('cart.destroy', $product->id) }}" method= "post">
                                       @csrf
                                       {{ method_field('DELETE') }}
                                      <button type= "submit" class="btn btn-sm btn-danger">  
                                        <i class="fas fa-trash-alt"></i> 
                                      </button>
                                  </form>
                                </td>
                                	
                                
                                </tr>
                             @endforeach
                          </tbody>
                      </table>
				</div>
			</div>		
		</div>

@endsection
