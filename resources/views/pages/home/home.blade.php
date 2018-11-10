@extends('layouts.app')

@section('content')
@include ('common.nav')
      <div class="section">
			<div class="container">
				<div class="row">
                @foreach ($categories as $category)
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ $category->image }}" alt="">
							</div>
							<div class="shop-body">
								<h3>{{ $category->name }}<br>Collection</h3>
								<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
                @endforeach
				</div>		
			</div>			
		</div>
     @include('pages.home.partial.new_product')
     
     <div id="hot-deal" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="hot-deal">
							<ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul>
							<h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		
     @include('pages.home.partial.top_selling')
     @include('pages.home.partial.footer_top_selling')

     <div id="newsletter" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <div class="newsletter">
          <p>Sign Up for the <strong>NEWSLETTER</strong></p>
          @if (\Session::has('success'))
                <div class="alert alert-success">
                   <p>{{ \Session::get('success') }}</p>
                </div><br />
             @endif
             @if (\Session::has('failure'))
                <div class="alert alert-danger">
                   <p>{{ \Session::get('failure') }}</p>
                </div><br />
             @endif
          <form method="POST" action="{{route('subscribe')}}">
            @csrf
            <input class="input" type="email" placeholder="Enter Your Email" name="email">
            <button type="submit"class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
          </form>
          <ul class="newsletter-follow">
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
     
    
@endsection
