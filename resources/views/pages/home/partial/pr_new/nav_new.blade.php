<ul class="section-tab-nav tab-nav">
 <li class="nav-item">
  @foreach ($product_category1 as $product)
            @if ($product->count('id')== 1)
                @continue
            @endif
         <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" 
    href="#pills{{ $product->id }}" role="tab" aria-controls="pills-profile" aria-selected="false">
       {{ $product->category->name }}
        </a>
    @if ($product->count('id')> 2)
   @break
   @endif
 @endforeach
 </li>

 <li class="nav-item">
 @foreach ($product_category2 as $product)
   @if ($product->count('id')== 1)
      @continue
      @endif
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills
    {{ $product->id }}" role="tab" aria-controls="pills-contact" aria-selected="false">
      {{ $product->category->name }}
    </a>
    @if ($product->count('id')> 2)
   @break
   @endif
 @endforeach
  </li>

  <li class="nav-item">
 @foreach ($product_category3 as $product)
   @if ($product->count('id')== 1)
      @continue
        @endif
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills
    {{ $product->id }}" role="tab" aria-controls="pills-contact" aria-selected="false">
        {{ $product->category->name }}  
    </a>
     @if ($product->count('id')> 2)
    @break
    @endif
   @endforeach
  </li>
  
</ul>