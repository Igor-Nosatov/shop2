<div class="col-md-12">
          <div id="product-tab">
            <!-- product tab nav -->
            <ul class="tab-nav">
              <li class="first active"><a data-toggle="tab" href="#tab1">Description</a></li>
              <li><a data-toggle="tab" href="#tab2">Details</a></li>
              <li class="second"><a data-toggle="tab" id="add_review"  href="#tab3">Reviews ({{$count_star}})</a></li>
            </ul>
            <!-- /product tab nav -->

            <!-- product tab content -->
            <div class="tab-content">
              <!-- tab1  -->
              <div id="tab1" class="tab-pane fade in active">
                <div class="row">
                  <div class="col-md-12">
                    <p>{{ $products->description }}</p>
                  </div>
                </div>
              </div>
              <!-- /tab1  -->

              <!-- tab2  -->
              <div id="tab2" class="tab-pane fade in">
                <div class="row">
                  <div class="col-md-12">
                    <p>{{ $products->description }}</p>
                  </div>
                </div>
              </div>
              <!-- /tab2  -->

              <!-- tab3  -->
              <div  id="tab3" class="tab-pane fade in ">
                <div class="row">
                  <!-- Rating -->
                  <div class="col-md-3">
                    <div id="rating">
                      <div class="rating-avg">
                        <span>{{ number_format($avg_stars, 0) }}</span>
                        
                    <div class="rating-stars">
                         @for($i = 1; $i <= 5; $i++)
                                  @if($i <= $avg_stars)
                                     <i class="fa fa-star"></i>
                                  @else
                                     <i class="fa fa-star-o empty"></i>
                                  @endif
                            @endfor
                    </div>
                      </div>
                      <ul class="rating">
                        <li>
                          <div class="rating-stars">
                            @for($i = 1; $i <= 5; $i++)
                                  @if($i <= 5)
                                     <i class="fa fa-star"></i>
                                  @else
                                     <i class="fa fa-star-o empty"></i>
                                  @endif
                            @endfor
                            
                          </div>

                          <div class="rating-progress">
                            <div style="width: {{($star5)/($count_star)*100 }}%;"></div>
                          </div>
                          <span class="sum">{{$star5}}</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                          @for($i = 1; $i <= 5; $i++)
                                  @if($i <= 4)
                                     <i class="fa fa-star"></i>
                                  @else
                                     <i class="fa fa-star-o empty"></i>
                                  @endif
                            @endfor
                          </div>
                          <div class="rating-progress">
                            <div style="width: {{($star4)/($count_star)*100 }}%;"></div>
                          </div>
                          <span class="sum">{{$star4}}</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                            @for($i = 1; $i <= 5; $i++)
                                  @if($i <= 3)
                                     <i class="fa fa-star"></i>
                                  @else
                                     <i class="fa fa-star-o empty"></i>
                                  @endif
                            @endfor
                          </div>
                          <div class="rating-progress">
                            <div style="width: {{($star3)/($count_star)*100 }}%;"></div>
                          </div>
                          <span class="sum">{{$star3}}</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                            @for($i = 1; $i <= 5; $i++)
                                  @if($i <= 2)
                                     <i class="fa fa-star"></i>
                                  @else
                                     <i class="fa fa-star-o empty"></i>
                                  @endif
                            @endfor
                          </div>
                          <div class="rating-progress">
                            <div style="width: {{($star2)/($count_star)*100 }}%;"></div>
                          </div>
                          <span class="sum">{{$star2}}</span>
                        </li>
                        <li>
                          <div class="rating-stars">
                            @for($i = 1; $i <= 5; $i++)
                                  @if($i <= 1)
                                     <i class="fa fa-star"></i>
                                  @else
                                     <i class="fa fa-star-o empty"></i>
                                  @endif
                            @endfor
                          </div>
                          <div class="rating-progress">
                           <div style="width: {{($star1)/($count_star)*100 }}%;"></div>
                          </div>
                          <span class="sum">{{($star1)}}</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /Rating -->

                  <!-- Reviews -->
                  <div class="col-md-6">
                    <div id="reviews">
                      <ul class="reviews">

                        @foreach($reviews as $review)
                        <li>
                          <div class="review-heading">
                            <h5 class="name">{{ $review->name}}</h5>
                            <p class="date">{{ $review->created_at}}</p>
                            <div class="review-rating">
                          @for($i = 1; $i <= 5; $i++)
                                  @if($i <= $review->rating)
                                     <i class="fa fa-star"></i>
                                  @else
                                     <i class="fa fa-star-o empty"></i>
                                  @endif
                            @endfor
                            </div>
                          </div>
                          <div class="review-body">
                            <p>{{ $review->review}}</p>
                          </div>
                        </li>
                       @endforeach
                      </ul>
                      <ul>
                        {{ $reviews->links() }}
                      </ul>
                    </div>
                  </div>
                  <!-- /Reviews -->


                  <!-- Review Form -->
                  <div class="col-md-3">
                    <div id="review-form">
                        <form class="review-form" method="POST" action="{{ route('review.store') }}">
                          @csrf
                          <input type="hidden" name="products_id" value="{{$products->id }}" required>
                          <input class="input" name="user" type="text" placeholder="Your Name">
                          <input class="input" name="email" type="email" placeholder="Your Email">
                          <textarea class="input" name="review" placeholder="Your Review"></textarea>
                          <div class="input-rating">
                            <span>Your Rating: </span>
                            <div class="stars">
                              <input id="star5" name="rating" value="5" type="radio"><label for="star5"></label>
                              <input id="star4" name="rating" value="4" type="radio"><label for="star4"></label>
                              <input id="star3" name="rating" value="3" type="radio"><label for="star3"></label>
                              <input id="star2" name="rating" value="2" type="radio"><label for="star2"></label>
                              <input id="star1" name="rating" value="1" type="radio"><label for="star1"></label>
                            </div>
                          </div>
                          <button  type="submit" class="primary-btn">Submit</button>
                        </form>
                    </div>
                  </div>
                  <!-- /Review Form -->
                </div>
              </div>
              <!-- /tab3  -->
            </div>
            <!-- /product tab content  -->
          </div>
        </div>