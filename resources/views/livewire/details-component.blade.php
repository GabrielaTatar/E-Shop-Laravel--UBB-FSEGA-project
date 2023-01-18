<main id="main" class="main-site">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Home</a></li>
            <li class="item-link"><span>Details</span></li>
        </ul>
    </div>


        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            <div class="wrap-product-detail">
                <div class="detail-media">
                

                        <li data-thumb="{{ asset('assets/images/products')}}/{{$product->image}}">
                            <img src="{{asset('assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}"  />
                        </li>

                </div>
                <div class="detail-info">
                    
                    <h2 class="product-name">{{$product->name}}</h2>
                    <div class="short-desc">
                        {{$product->description}}
                    </div>
                    
                    <div class="wrap-price"><span class="product-price">{{$product->regular_price}} lei</span></div>
                    
                    <div class="wrap-butons">
                        <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">Add to Cart</a>
                    </div> 
                </div>
            </div>
        </div>

    </div>

</div>

</main>
