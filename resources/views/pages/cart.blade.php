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
		             <th scope="col">Image</th>
		             <th scope="col">Price</th>
		             <th scope="col">QTY</th>
	            </tr>
             </thead>
             <tbody>
	              @foreach($products as product)
	              <tr>
		              <td>{{$product->name}}</td>
		              <td>{{asset($product->image)}}</td>
		              <td>{{$product->price}}</td>
		              <td>
			              <form class="form-horizontal" method="POST" action="{{ route('cart.delete')}}">
						            @csrf
						              <input type="hidden" name="products_id" value="{{$product->id }}" required>
						              <input name="_method" type="hidden" value="DELETE">
					             	 <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
			             </form>
			              <form class="form-horizontal" method="post" action="{{ route('cart.update')}}">
					             	@csrf
						             <input type="hidden" name="products_id" value="{{$product->id }}" required>
					             	 <input name="type" type="hidden" value="minus">
						             <button type="submit" class="btn btn-warning btn-sm"><i class="fas fa-minus"></i></button>
		             	</form>
			             <form class="form-horizontal" method="post" action="{{ route('cart.update')}}">
						              @csrf
						            <input type="hidden" name="products_id" value="{{$product->id }}" required>
					            	<input name="type" type="hidden" value="plus">
					            	<button type="submit" class="btn btn-success btn-sm"><i class="fas fa-plus"></i></button>
			            </form>
		              </td>
	                </tr>
	            @endforeach
             </tbody>
             </table>
				 </div>
				</div>
			</div>
		</div>
@endsection
