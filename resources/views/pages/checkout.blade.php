@extends('layouts.app')
@section('content')
		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="{{route('home')}}">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<form action="{{ route('checkout.store') }}" method = "post">
						@csrf
					<div class="col-md-7">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first_name" placeholder="First Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last_name" placeholder="Last Name" required>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email"
								placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Address" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="City" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Country" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip_code" placeholder="ZIP Code" required>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="telephone" placeholder="Telephone" required>
							</div>	

						</div>
					</div>

					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							<div class="order-products">
								@foreach($products as $product)

								<div class="order-col">
									<div>{{ $product->name }}</div>
									<div>${{ $product->price }}</div>
								</div>
								@endforeach
							</div>
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">${{$total_price}}</strong></div>
							</div>
						</div>				
		                <input type="hidden" name="total_price"  value="{{$total_price }}" required>
						<button type="submit" class="primary-btn order-submit">Place order</button>
					</div>
					</form>
				</div>
			</div>
		</div>
@endsection
