@extends('pages.store.store')

@section('price_filter')
<div id="store" class="col-md-9">
          <!-- store top filter -->
          <div class="store-filter clearfix">
            <div class="store-sort">
              <label>
                Sort By:
                <select class="input-select">
                  <option value="0">Popular</option>
                  <option value="1">Position</option>
                </select>
              </label>

              <label>
                Show:
                <select class="input-select">
                  <option value="0">20</option>
                  <option value="1">50</option>
                </select>
              </label>
            </div>
            <ul class="store-grid">
              <li class="active"><i class="fa fa-th"></i></li>
              <li><a href="#"><i class="fa fa-th-list"></i></a></li>
            </ul>
          </div>
          <!-- /store top filter -->

          <!-- store products -->
          <div class="row">
          
            

          </div>
          <!-- /store products -->

          <!-- store bottom filter -->
          <div class="store-filter clearfix">    
             {{ $products->links() }}
            </div>   
          <!-- /store bottom filter -->
        </div>

        @endsection