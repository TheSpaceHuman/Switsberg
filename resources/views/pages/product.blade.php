@extends('layouts.main')

@section('title', $product->title)
@section('description', $product->meta_description)
@section('keywords', $product->meta_keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')

    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-product">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">{{ $product->title }}</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">{{ $product->intro }}</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="container">
                <section class="product-single padding-top-100 padding-bottom-100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-image">
                                <div class="product-featured-image">
                                    @if($galleryEmpty)
                                        <div class="main-slider">
                                            <div class="slides">
                                                @php
                                                    $productSlider = json_decode($product->images);
                                                @endphp
                                                @foreach($productSlider as $key => $image)
                                                    <div class="featured-image-item"><img src="{{ Voyager::image($product->getThumbnail($image->name, 'medium')) }}" alt="{{$image->alt}}" class="img img-responsive"></div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div data-width="150" class="nav-slider">
                                            <ul class="slides list-inline">
                                                @foreach($productSlider as $key => $image)
                                                    <li class="swin-transition thumbnail-image-item">
                                                        <a href="javascript:void(0)" class="testimonial-nav-item">
                                                            <img src="{{ Voyager::image($product->getThumbnail($image->name, 'small')) }}" alt="{{$image->alt}}" class="img img-responsive swin-transition">
                                                        </a>
                                                    </li>
                                                @endforeach
                                              </ul>
                                        </div>
                                    @else
                                        <div class="featured-image-item" style="margin-bottom: 35px;"><img src="{{ Voyager::image($product->thumbnail('medium', 'image')) }}" alt="{{$product->title}}" class="img img-responsive"></div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="product-summary">
                                <div class="product-title">
                                    <div class="title">{{ $product->title }}</div>
                                </div>
                                <div class="product-price">
                                    <div class="price"><span class="currency-symbol">₽ </span>{{ $product->price }}</div>
                                </div>
                                <div class="product-desc">
                                    {{ $product->intro }}
                                </div>

                                <div class="product-quanlity">
                                    <form action="#">
{{--                                        <div class="input-group">--}}
{{--                                            <input type="text" name="quanlity" placeholder="" value="1" class="form-control"><a href="javascript:void(0)" class="quanlity-plus"><i class="fa fa-plus"></i></a><a href="javascript:void(0)" class="quanlity-minus"><i class="fa fa-minus"></i></a>--}}
{{--                                        </div>--}}
                                        <div class="add-to-cart"><a href="javascript:void(0)" class="swin-btn"> <span>Купить</span></a></div>
                                    </form>
                                </div>
                                <div class="product-share"><span class="caption">Социальные сети:</span>
                                    <ul class="socials list-unstyled list-inline">
                                        @include('includes.socials')
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="product-tab-content">
                                <!-- Nav tabs-->
                                <ul role="tablist" class="nav nav-tabs">
                                    <li role="presentation" class="active"><a href="#product-desc-tab" aria-controls="product-desc-tab" role="tab" data-toggle="tab">Описание</a></li>
{{--                                    <li role="presentation"><a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Отзывы</a></li>--}}
                                </ul>
                                <!-- Tab panes-->
                                <div class="tab-content">
                                    <div id="product-desc-tab" role="tabpanel" class="tab-pane active">
                                        {!! $product->description !!}
                                    </div>
                                    <div id="product-review" role="tabpanel" class="tab-pane">
                                        <div id="reviews">
                                            <div id="comments">
                                                <h3 class="product-reviews-title">1 review</h3>
                                                <ul class="commentlist list-unstyled">
                                                    <li>
                                                        <div class="comment_container"><img src="http://2.gravatar.com/avatar/59c82b1d2c60537f900fb191b3cb611b?s=60&amp;d=mm&amp;r=g" width="60" height="60" alt="" class="avatar avatar-60wp-user-avatar wp-user-avatar-60 alignnone photo avatar-default">
                                                            <div class="comment-text">
                                                                <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div>
                                                                <p class="meta"><strong itemprop="author">Maria</strong> –
                                                                    <time itemprop="datePublished" datetime="2013-06-07T15:56:24+00:00">June 7, 2017</time>:
                                                                </p>
                                                                <div itemprop="description" class="description">
                                                                    <p>This product is Awesome!!!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="comment_container"><img src="assets/images/blog/blog-comment-avatar03.jpg" width="60" height="60" alt="" class="avatar avatar-60wp-user-avatar wp-user-avatar-60 alignnone photo avatar-default">
                                                            <div class="comment-text">
                                                                <div class="star-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                                                                <p class="meta"><strong itemprop="author">Kelvin</strong> –
                                                                    <time itemprop="datePublished" datetime="2013-06-07T15:56:24+00:00">June 8, 2017</time>:
                                                                </p>
                                                                <div itemprop="description" class="description">
                                                                    <p>I recommended it!!!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('includes.footer')
@endsection
