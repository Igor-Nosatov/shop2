<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top selling</h4>
            <div class="section-nav">
              <div id="slick-nav-3" class="products-slick-nav"></div>
            </div>
          </div>

          <div class="products-widget-slick" data-nav="#slick-nav-3">
            <div>
              @foreach($fp_c1 as $product)
              <div class="product-widget">
                <div class="product-img">
                  <img src="{{ asset ($product->image)}}" alt="">
                </div>
                <div class="product-body">
                  <p class="product-category">{{ $product->category->name }}</p>
                  <h3 class="product-name"><a href="#">{{ $product->name}}</a></h3>
                  <h4 class="product-price">{{$product->price}} <del class="product-old-price">$990.00</del></h4>
                </div>
              </div>
              @endforeach
            </div>
            <div>
             @foreach($fp_c1 as $product)
              <div class="product-widget">
                <div class="product-img">
                  <img src="{{ asset ($product->image)}}" alt="">
                </div>
                <div class="product-body">
                  <p class="product-category">{{ $product->category->name }}</p>
                  <h3 class="product-name"><a href="#">{{ $product->name}}</a></h3>
                  <h4 class="product-price">{{$product->price}} <del class="product-old-price">$990.00</del></h4>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top selling</h4>
            <div class="section-nav">
              <div id="slick-nav-4" class="products-slick-nav"></div>
            </div>
          </div>

          <div class="products-widget-slick" data-nav="#slick-nav-4">
            <div>
              @foreach($fp_c2 as $product)
              <div class="product-widget">
                <div class="product-img">
                  <img src="{{ asset ($product->image)}}" alt="">
                </div>
                <div class="product-body">
                  <p class="product-category">{{ $product->category->name }}</p>
                  <h3 class="product-name"><a href="#">{{ $product->name}}</a></h3>
                  <h4 class="product-price">{{$product->price}} <del class="product-old-price">$990.00</del></h4>
                </div>
              </div>
              @endforeach
            </div>

            <div>
              @foreach($fp_c2 as $product)
              <div class="product-widget">
                <div class="product-img">
                  <img src="{{ asset ($product->image)}}" alt="">
                </div>
                <div class="product-body">
                  <p class="product-category">{{ $product->category->name }}</p>
                  <h3 class="product-name"><a href="#">{{ $product->name}}</a></h3>
                  <h4 class="product-price">{{$product->price}} <del class="product-old-price">$990.00</del></h4>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>

        <div class="clearfix visible-sm visible-xs"></div>

        <div class="col-md-4 col-xs-6">
          <div class="section-title">
            <h4 class="title">Top selling</h4>
            <div class="section-nav">
              <div id="slick-nav-5" class="products-slick-nav"></div>
            </div>
          </div>

          <div class="products-widget-slick" data-nav="#slick-nav-5">
            <div>
              @foreach($fp_c3 as $product)
              <div class="product-widget">
                <div class="product-img">
                  <img src="{{ asset ($product->image)}}" alt="">
                </div>
                <div class="product-body">
                  <p class="product-category">{{ $product->category->name }}</p>
                  <h3 class="product-name"><a href="#">{{ $product->name}}</a></h3>
                  <h4 class="product-price">{{$product->price}} <del class="product-old-price">$990.00</del></h4>
                </div>
              </div>
              @endforeach   
            </div>

            <div>
             @foreach($fp_c3 as $product)
              <div class="product-widget">
                <div class="product-img">
                  <img src="{{ asset ($product->image)}}" alt="">
                </div>
                <div class="product-body">
                  <p class="product-category">{{ $product->category->name }}</p>
                  <h3 class="product-name"><a href="#">{{ $product->name}}</a></h3>
                  <h4 class="product-price">{{$product->price}} <del class="product-old-price">$990.00</del></h4>
                </div>
              </div>
              @endforeach
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
