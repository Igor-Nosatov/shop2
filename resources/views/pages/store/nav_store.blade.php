


<div id="aside" class="col-md-3">
          <div class="aside">
            <h3 class="aside-title">Categories</h3>
            <div class="checkbox-filter">
             @foreach($categories as $category)
              <div class="input-checkbox">
                <a href="{{route('category', $category->id)}}">{{$category->name}}
                <small>({{$category->product->count()}})</small>
                </a>
              </div>
             @endforeach
            </div>
          </div>
          <div class="aside">
            <h3 class="aside-title">Price</h3>
        <form action="{{ route('store.filter')}}" method="POST">
          @csrf
            <div class="price-filter">
              <div id="price-slider"></div>
              <div class="input-number price-min">
                <input id="price-min" type="number" name="min_price">
                <span class="qty-up">+</span>
                <span class="qty-down">-</span>
              </div>
              <span>-</span>
              <div class="input-number price-max">
                <input id="price-max" type="number" name="max_price">
                <span class="qty-up">+</span>
                <span class="qty-down">-</span>
              </div>
            </div>
            <input class="primary-submit" type="submit" value="Filter">
       </form>
          </div>
          <div class="aside">
            <h3 class="aside-title">Brand</h3>
            <div>
             @foreach($brand_categories as $brand)
              <div class="input-checkbox">
                <a href="{{route('brand', $brand->id)}}">
                  {{ $brand->name }} 
                  <small>({{ $brand->product->count()}}) </small></a>
              </div>
             @endforeach
            </div>
          </div>
          <div class="aside">
            <h3 class="aside-title">Top selling</h3>
            @foreach($top_selling as $product)
            <div class="product-widget">
              <div class="product-img">
                <img src="{{ asset($product->image)}}" alt="">
              </div>
              <div class="product-body">
                <p class="product-category">{{ $product->category->name}}</p>
                <h3 class="product-name"><a href="#">{{ $product->name}}/a></h3>
                <h4 class="product-price">{{$product->price}}<del class="product-old-price">$990.00</del></h4>
              </div>
            </div>
        @endforeach
    </div>
</div>