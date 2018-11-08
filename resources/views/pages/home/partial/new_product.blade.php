
</ul>
<div class="tab-content" id="pills-tabContent">
  
  <div class="tab-pane  active" id="pills1" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills2" role="tabpanel" aria-labelledby="pills-contact-tab">.zsdf</div>
    <div class="tab-pane fade" id="pills3" role="tabpanel" aria-labelledby="pills-contact-tab">.zsdf</div>
</div>


<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
             <div class="col-md-12">
					<!-- section title -->
          <div class="col-md-12">
            <div class="section-title">
              <h3 class="title">New Products </h3>
              <div class="section-nav">
                @include('pages.home.partial.pr_new.nav_new')
              </div>
            </div>
          </div>
					<!-- /section title -->

					<!-- Products tab & slick -->
          <div class="col-md-12">
            <div class="row">
              <div class="products-tabs">
                <!-- tab -->
                <div id="tab1" class="tab-pane active">
                  <div class="products-slick" data-nav="#slick-nav-1">
                   
                    <!-- product -->
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
                          @foreach ($product_category1 as $product)
                              @if ($product->count('id')== 1)
                                 @continue
                              @endif
                                {{ $product->category->name }}
                              @if ($product->count('id')> 2)
                              @break
                              @endif
                          @endforeach
                        </p>
                        <h3 class="product-name"><a href="#">{{ $product->name }}</a></h3>
                        <h4 class="product-price">{{ $product->price }}<del class="product-old-price">$990.00</del></h4>
                        <div class="product-rating">
                        </div>
                        <div class="product-btns">
                          <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                          <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                          <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
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
                <!-- /tab -->
              </div>
            </div>
          </div>
					<!-- Products tab & slick -->

				</div>
				<!-- /row -->
			</div>



			<!-- /container -->
</div>
