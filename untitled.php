<div class="plus-minus-cart-btn">  
                    <form class="form-horizontal" method="POST" action="{{ route('cart.destroy', $product->id) }}">
                    $csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="add-to-cart btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                    </form>                      
                    <form class="form-horizontal" method="GET" action="{{ route('cart.edit', $product->id) }}">
                     $csrf
                        <input name="type" type="hidden" value="minus">
                        <button type="submit" class="add-to-cart btn btn-warning"><span class="glyphicon glyphicon-minus"></span></button>
                    </form>             
                    <form class="form-horizontal" method="GET" action="{{ route('cart.edit', $product->id) }}">
                    $csrf
                        <input name="type" type="hidden" value="plus">
                        <button type="submit" class="add-to-cart btn btn-success"><span class="glyphicon glyphicon-plus"></span></button>
                    </form>
                </div>