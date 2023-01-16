<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">home</a></li>
            <li class="item-link"><span>Categorii</span></li>
            <li class="item-link"><span>{{$category_name}}</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            <div class="wrap-shop-control">

                <h1 class="shop-title">{{$category_name}}</h1>
            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">
                   @foreach ($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                                    <figure><img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                </a>
                        </div>   
                            <div class="product-info">
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">{{$product->regular_price}} lei</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})" >Add To Cart</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div><!--end main products area-->

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">Toate categoriile</h2>
                <div class="widget-content">
                    <ul class="list-category">
                        @foreach($categories as $category)
                        <li class="category-item">
                            <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div><!-- Categories widget-->

        </div><!--end sitebar-->

    </div><!--end row-->

</div><!--end container-->

</main>

