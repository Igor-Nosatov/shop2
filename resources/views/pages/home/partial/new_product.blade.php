

<div class="section">
			<div class="container">
				<div class="row">
             <div class="col-md-12">
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">New Products </h3>
              <div class="section-nav">
                @include('pages.home.partial.pr_new.nav_new')
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
               
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick" data-nav="#slick-nav-1">
                   
                   
                    @foreach($product_category1 as $product)
                    <div class="product">
                      <div class="product-img">
                        <img src="{{asset($product->image)}}" alt="">
                        <div class="product-label">
                          <span class="sale">-30%</span>
                        </div>
                      </div>
                      <div class="product-body">
                        <p class="product-category">
                                {{ $product->category->name }}
                        </p>
                        <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                        <h4 class="product-price">{{ $product->price }}<del class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                        </div>
                      </div>
                      <div class="add-to-cart">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                      </div>
                    </div>
                    @endforeach
                    
                  </div>
                  <div id="slick-nav-1" class="products-slick-nav"></div>
                </div>
    
              </div>
            </div>
          </div>
				</div>
			</div>
</div>
