@extends('layouts.app')

@section('content')
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-push-2">
          <div id="product-main-img">
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-2  col-md-pull-5">
          <div id="product-imgs">
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
            <div class="product-preview">
              <img src="{{asset($products->image)}}" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="product-details">
            <h2 class="product-name">{{ $products->name }}</h2>
            <div>
              <div class="product-rating">
                 @for($i = 1; $i <= 5; $i++)
                      @if($i <= $avg_stars)
                      <i class="fa fa-star"></i>
                      @else
                      <i class="fa fa-star-o empty"></i>
                      @endif
                 @endfor
              </div>
              <a class="review-link" href="#add_review">{{$count_star}} Review(s) | Add your review</a>
            </div>
            <div>
              <h3 class="product-price">${{ $products->price }} <del class="product-old-price">$990.00</del></h3>
              <span class="product-available">In Stock</span>
            </div>
            <p>{{ $products->description }}</p>
          <form class="review-form" method="POST" action="{{ route('cart.store') }}">
            @csrf
            <input type="hidden" name="products_id" value="{{$products->id }}">
            <input type="hidden" name="name" value="{{$products->name }}">
            <input type="hidden" name="image" value="{{$products->image}}">
            <input type="hidden" name="price" value="{{$products->price}}">
            <div class="product-options">
              <label>
                Size
                <select name="size" class="input-select">
                  @foreach ($products->size as $size)
                    <option  value="{{ $size->name }}">
                     {{ $size->name }}
                   </option>
                  @endforeach
                </select>
              </label>
              <label>
                Color
                <select name="color" class="input-select">
                   @foreach ($products->color as $color)
                      <option  value="{{ $color->name }}">
                        {{$color->name}}
                      </option>
                   @endforeach
                </select>
              </label>
            </div>
            <input type="number" name="number" min="1" max="10" required>               
            <button  type="submit" class="primary-btn">Submit</button>
          </form>
     </div>
            <ul class="product-links">
              <li>Category:</li>
              <li><a href="#">Headphones</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
            <ul class="product-links">
              <li>Share:</li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>
        @include('pages.rating.rating')
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title text-center">
            <h3 class="title">Related Products</h3>
          </div>
        </div>
          @foreach($similarProduct as $pr) 
        <div class="col-md-3 col-xs-6">
          <div class="product">
            <div class="product-img">
              <img src="{{asset($pr->image) }}" alt="">
              <div class="product-label">
                <span class="sale">-30%</span>
              </div>
            </div>
            <div class="product-body">
              <p class="product-category">{{$pr->category->name }}</p>
              <h3 class="product-name"><a href="#">{{$pr->name }}</a></h3>
              <h4 class="product-price">${{$pr->price }} <del class="product-old-price">$990.00</del></h4>
              <div class="product-rating">
              </div>
              <div class=" product-btns">
                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
              </div>
            </div>
            <div class="add-to-cart">
              <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
          </div>
        </div>

     @endforeach

      </div>
    </div>
  </div>
@endsection
