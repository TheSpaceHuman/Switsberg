<div class="swin-sc swin-sc-product products-02 carousel-02">
    <div class="row">
        <div class="col-md-2"></div>
        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
            @foreach($productCategories as $category)
                <div class="item">
                    <div class="cat-icons">
                        {!! $category->icon !!}
                    </div>
                    <h5 class="cat-title">{{$category->title}}</h5>
                </div>
            @endforeach
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="products nav-slider">
        @foreach($productCategories as $category)
            <div class="row slick-padding">
                @foreach($category->products as $product)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="blog-item item swin-transition">
                            <div class="block-img"><img src="{{Voyager::image($product->thumbnail('small'))}}" alt="{{$product->title}}" class="img img-responsive">
                                <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">₽ </span>{{$product->price}}</span></div>
                                <div class="group-btn">
                                    <a class="swin-btn btn-link" href="{{ route('page.products.product', ['slug' => $product->slug]) }}"><i class="icons fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="block-content">
                                <h5 class="title"><a href="{{ route('page.products.product', ['slug' => $product->slug]) }}">{{$product->title}}</a></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>