<nav id="navigation">
  <div class="container">
    <div id="responsive-nav">
      <ul class="main-nav nav navbar-nav">
        <li class="active"><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('store') }}">Categories</a></li>
        @foreach ($nav as $category)
         <li><a href="{{route('category', $category->id)}}">{{ $category->name }}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
</nav>
