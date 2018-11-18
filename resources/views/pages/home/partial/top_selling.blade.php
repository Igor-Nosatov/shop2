<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
          <h3 class="title">Top selling</h3>
          <div class="section-nav">
            <ul class="section-tab-nav tab-nav">
              <li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
              <li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
              <li><a data-toggle="tab" href="#tab2">Cameras</a></li>
              <li><a data-toggle="tab" href="#tab2">Accessories</a></li>  
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="row">
          <div class="products-tabs">
            <div id="tab1" class="tab-pane fade in active">
              <div class="products-slick" data-nav="#slick-nav-2">

                @for ($i = 0; $i < 7; $i++)

                <div class="product">
                  <div class="product-img">
                    <img src="./img/product07.png" alt="">
                    <div class="product-label">
                      <span class="new">NEW</span>
                    </div>
                  </div>
                  <div class="product-body">
                    <p class="product-category">Category</p>
                    <h3 class="product-name"><a href="#">product name goes here</a></h3>
                    <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                    <div class="product-rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                    </div>
                    <div class="product-btns">
                     
                    </div>
                  </div>
                  <div class="add-to-cart">
                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                  </div>
                </div>
               @endfor
  
              </div>
              <div id="slick-nav-2" class="products-slick-nav"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
