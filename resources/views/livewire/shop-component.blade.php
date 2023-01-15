<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="#" class="link">home</a></li>
            <li class="item-link"><span>DRUGSTORE</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            <div class="wrap-shop-control">

                <h1 class="shop-title">DRUGSTORE</h1>

                <div class="wrap-right">
                    <div class="change-display-mode">
                        <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                        <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                    </div>
                </div>

            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">
                   @foreach ($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem ">
                            <div class="product-thumnail">
                            <img src="{{ asset('assets/images/products') }}/{{$product->image}}" alt="{{$product->name}}"> 
                        </div>   
                            <div class="product-info">
                                <a class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">${{$product->regular_price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:cick.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})" >Add To Cart</a>
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
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Machiaj</a>
                            <!-- <span class="toggle-control">+</span> -->
                            <!-- <ul class="sub-cate">
                                <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                            </ul> -->
                        </li>
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Ingrijire</a>
                        </li>
                        <li class="category-item has-child-cate">
                            <a href="#" class="cate-link">Parfum</a>
                        </li>
                    </ul>
                </div>
            </div><!-- Categories widget-->

        </div><!--end sitebar-->

    </div><!--end row-->

</div><!--end container-->

</main>

