<header>
  <div id="top-header">
    <div class="container">
      <ul class="header-links pull-left">
        <li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
        <li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
        <li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
      </ul>
    </div>
  </div>

  <div id="header">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="header-logo">
            <a href="{{route('home')}}" class="logo">
              <img src="{{asset('/img/logo.png')}}" alt="">
            </a>
          </div>
        </div>

        <div class="col-md-6">
          <div class="header-search">
            <form method="GET" action="{{ route('store.search') }}" role="search">      
              @csrf   
              <input class="input" type="text" name="search"  placeholder="Search" >  
              <input class="search-btn" type="submit" value="Search">
            </form>
          </div>
        </div>

        <div class="col-md-3 clearfix">
          <div class="header-ctn">
            <div>
              <a href="#">
                <i class="fas fa-grin-beam"></i>
                <span>Your Wishlist</span>
                <!--<div class="qty"></div>-->
              </a>
            </div>

            <!-- Cart -->
            <div class="dropdown">
              <a  class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <i class="fa fa-shopping-cart"></i>
                <span>Your Cart</span>
                <!--<div class="qty"></div>-->
              </a>
              <div class="cart-dropdown">
                <div class="cart-list">
                  <div class="product-widget">
                    <div class="product-img">
                      <img src="./img/product01.png" alt="">
                    </div>
                    <div class="product-body">
                      <h3 class="product-name"><a href="#">product name goes here</a></h3>
                      <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                    </div>
                    <button class="delete"><i class="fa fa-close"></i></button>
                  </div>

                  <div class="product-widget">
                    <div class="product-img">
                      <img src="./img/product02.png" alt="">
                    </div>
                    <div class="product-body">
                      <h3 class="product-name"><a href="#">product name goes here</a></h3>
                      <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                    </div>
                    <button class="delete"><i class="fa fa-close"></i></button>
                  </div>
                </div>
                <div class="cart-summary">
                  <small>3 Item(s) selected</small>
                  <h5>SUBTOTAL: $2940.00</h5>
                </div>
                <div class="cart-btns">
                  <a href="{{route('cart')}}">View Cart</a>
                  <a href="{{route('checkout')}}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>
            <div class="menu-toggle">
              <a href="#">
                <i class="fa fa-bars"></i>
                <span>Menu</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
