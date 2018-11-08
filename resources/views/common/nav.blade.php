<nav id="navigation">
  <!-- container -->
  <div class="container">
    <!-- responsive-nav -->
    <div id="responsive-nav">
      <!-- NAV -->
      <ul class="main-nav nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Hot Deals</a></li>
        <li><a href="#">Categories</a></li>
        @foreach ($nav as $category)
         <li><a href="#">{{ $category->name }}</a></li>
        @endforeach
      </ul>
      <!-- /NAV -->
    </div>
    <!-- /responsive-nav -->
  </div>
  <!-- /container -->
</nav>
