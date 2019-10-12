@extends('layouts.main')

@section('title', $currentPage->title)
@section('description', $currentPage->description)
@section('keywords', $currentPage->keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')

    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">{{ $currentPage->title }}</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">{{ $currentPage->excerpt }}</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
           {{-- <section class="products-intro" style="display: none;">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>История</h2>
                            <p>История швейцарского бренда Switzberg  берет начало в 1949 году, когда Алан Свитсберг, основатель компании, нашел на чердаке дома чертежи тайников, выполненных своим прославленным предком - оружейником. </p>
                            <p>Более 50 лет семейное предприятие Switzberg разрабатывает уникальные  скрытые системы хранения оружия и драгоценных коллекций, продолжая фамильные традиции, совмещая уникальные разработки с современными технологиями.</p>
                        </div>
                    </div>
                </div>
            </section>--}}
            <section class="product-sesction-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-title style-3">
                        <p class="title"><span>Наши товары</span></p>
                    </div>
                    @include('partials.tabs.productsCategoties', compact('productCategories'))

                </div>
            </section>
            {!! $currentPage->body !!}
           {{-- <section class="product-sesction-03-1 padding-top-100 padding-bottom-100"><img src="assets/images/product/product-decorate.jpg" alt="" class="img-responsive img-decorate">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-4"></div>
                        <div class="col-lg-6 col-md-8">
                            <div class="swin-sc swin-sc-title text-left light">
                                <p class="top-title"><span>chef choise</span></p>
                                <h3 class="title">Daily Special</h3>
                            </div>
                            <div class="swin-sc swin-sc-product products-01 style-04 light swin-vetical-slider">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div data-height="200" class="products nav-slider">
                                            <div class="item product-01">
                                                <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                                                    <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                                                        <div class="dot">.....................................................................</div>
                                                        <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                    </div>
                                                </div>
                                                <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                            </div>
                                            <div class="item product-01">
                                                <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                                                    <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                                                        <div class="dot">.....................................................................</div>
                                                        <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                    </div>
                                                </div>
                                                <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                            </div>
                                            <div class="item product-01">
                                                <div class="item-left"><img src="assets/images/product/product-2c.jpg" alt="" class="img img-responsive">
                                                    <div class="content-wrapper"><a class="title">Grandpa's Country Fried Breakfast </a>
                                                        <div class="dot">.....................................................................</div>
                                                        <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                    </div>
                                                </div>
                                                <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>30.0</span></div>
                                            </div>
                                            <div class="item product-01">
                                                <div class="item-left"><img src="assets/images/product/product-2d.jpg" alt="" class="img img-responsive">
                                                    <div class="content-wrapper"><a class="title">Chinese Chicken Bread Spicy Soup</a>
                                                        <div class="dot">.....................................................................</div>
                                                        <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                    </div>
                                                </div>
                                                <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>12.0</span></div>
                                            </div>
                                            <div class="item product-01">
                                                <div class="item-left"><img src="assets/images/product/product-2b.jpg" alt="" class="img img-responsive">
                                                    <div class="content-wrapper"><a class="title">Uncle Herschel's Favorite </a>
                                                        <div class="dot">.....................................................................</div>
                                                        <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                    </div>
                                                </div>
                                                <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>45.0</span></div>
                                            </div>
                                            <div class="item product-01">
                                                <div class="item-left"><img src="assets/images/product/product-2a.jpg" alt="" class="img img-responsive">
                                                    <div class="content-wrapper"><a class="title">The Cracker Barrel's Country Boy Breakfast</a>
                                                        <div class="dot">.....................................................................</div>
                                                        <div class="des">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </div>
                                                    </div>
                                                </div>
                                                <div class="item-right"><span class="price woocommerce-Price-amount amount"><span class="price-symbol">$</span>25.0</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}
        </div>
    </div>

@endsection

@section('footer')
    @include('includes.footer')
@endsection
