@extends('layouts.main')

@section('title', $currentPage->title)
@section('description', $currentPage->description)
@section('keywords', $currentPage->keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')
    <div class="page-container">
        <div class="top-header top-bg-parallax">
            <div data-parallax="scroll" data-image-src="assets/images/slider/slider2-bg1.jpg"
                 class="slides parallax-window">
                <div class="slide-content slide-layout-02">
                    {!! $currentPage->body !!}
                    {{--<div class="container">
                        <div class="slide-content-inner">
                            <img src="assets/images/slider/slider2-icon.png"
                                 data-ani-in="fadeInUp" data-ani-out="fadeOutDown"
                                 data-ani-delay="500" alt="fooday" class="slide-icon img img-responsive animated">
                            <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1000"
                                class="slide-title animated">{{ setting('site.description') }}</h3>
                            <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500"
                               class="slide-sub-title animated"><span class="line-before"></span><span
                                        class="line-after"></span><span class="text">
                                    {{ setting('site.slogan') }}
                                </span>
                            </p>
                            <div class="slide-content-inner__button">
                                <a href="#" class="swin-btn wow fadeInUp">Заказать</a>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="product-sesction-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-title style-3">
                        <p class="title"><span>Наши системы</span></p>
                    </div>
                    @include('partials.tabs.productsCategoties', compact('productCategories'))

                </div>
            </section>
            <section class="story-section padding-top-100 padding-bottom-100">

                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                             {!! $currentPage->body2 !!}
                           {{-- <div class="swin-sc swin-sc-title text-left wow fadeInUp">
                                <p class="top-title">История</p>
                                <h3 class="title white-color">История Switzberg</h3>
                            </div>
                            <p class="des wow fadeInUp">История швейцарского бренда Switzberg берет начало в 1949 году, когда Алан Свитсберг, основатель компании, нашел на чердаке дома чертежи тайников, выполненных своим прославленным предком - оружейником.</p>
                            <p class="des wow fadeInUp">Более 50 лет семейное предприятие Switzberg разрабатывает уникальные скрытые системы хранения оружия и драгоценных коллекций, продолжая фамильные традиции, совмещая уникальные разработки с современными технологиями.</p>
                            <a class="swin-btn wow fadeInUp" href="about"> Читать подробно</a>--}}
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="swin-sc swin-sc-timeline">
                                <div class="main-slider flexslider">
                                    <div class="slides">
                                        @foreach($historyItems as $historyItem)
                                            <div class="timeline-item item">
                                                @php
                                                    $historyImages = json_decode($historyItem->images)
                                                @endphp
                                                @foreach($historyImages as $historyIMG)
                                                    <div class="col-sm-4 item-inner">
                                                        <div class="img-effect"><img class="img img-responsive" src="{{ Voyager::image($historyItem->getThumbnail($historyIMG->name, 'small')) }}" alt="" />
                                                            <div class="mask"><a class="magnific-item swipebox" href="{{ Voyager::image($historyItem->getThumbnail($historyIMG->name, 'large')) }}">+</a></div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="nav-slider flexslider" data-width="150">
                                    <ul class="slides">
                                        @foreach($historyItems as $historyItem)
                                            <li><a>{{ $historyItem->year }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="service-section-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-title">
                        <p class="top-title"><span>Преимущества</span></p>
                        <h3 class="title">Наши преимущества</h3>
                    </div>
                    <div class="swin-sc swin-sc-iconbox">
                        <div class="row">
                            @foreach($advantages as $advantage)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="item icon-box-02 wow fadeInUpShort">
                                        <div class="wrapper-icon" style="background-image: url({{ Voyager::image($advantage->thumbnail('cropped')) }})!important;">
                                            <svg class="icon">
                                                <use xlink:href="{{$advantage->icon}}"></use>
                                            </svg>
                                            <span class="number">{{ $loop->iteration }}</span></div>
                                        <h4 class="title">{{ $advantage->title }}</h4>
                                        <div class="description">
                                            {{ $advantage->description }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="testimonial-section-01 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="swin-sc swin-sc-title">
                                <h3 class="title white-color">Отзывы</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="swin-sc swin-sc-testimonial style-1">
                                        <div class="main-slider flexslider">
                                            <div class="slides">
                                                @foreach($mainReviews as $comment)
                                                    @include('partials.comments.mainReviewsCard', ['comment' => $comment])
                                                @endforeach
                                            </div>
                                        </div>
                                        <div data-width="150" class="nav-slider" style="display: none;">
                                            <ul class="slides list-inline">
                                                @foreach($mainReviews as $commentSub)
                                                    <li class="swin-transition">
                                                        <a href="javascript:void(0)" class="testimonial-nav-item">
                                                           {{ $commentSub->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--<section class="blog-section padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="swin-sc swin-sc-title">
                                <p class="top-title"><span>Обновляем каждый день</span></p>
                                <h3 class="title">Наш блог</h3>
                            </div>
                            <div class="swin-sc swin-sc-blog-grid"></div>
                        </div>
                        <div class="col-md-12">
                            <div class="swin-sc swin-sc-blog-grid">
                                <div class="row">
                                    @foreach($posts as $post)
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <div data-wow-delay="0s"
                                                 class="blog-item swin-transition item wow fadeInUpShort">
                                                <div class="blog-info clearfix"></div>
                                                <div class="blog-featured-img"><img
                                                            src="{{Voyager::image($post->thumbnail('small'))}}" alt="{{$post->title}}" alt="{{$post->title}}"
                                                            class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-date"><span class="day">{{ $post->created_at->format('d') }}</span><span
                                                                class="month">{{ $post->created_at->format('M') }}</span></div>
                                                    <h3 class="blog-title">
                                                        <a href="{{route('page.blog.post', ['slug' => $post->slug])}}" class="swin-transition">
                                                            {{$post->title}}
                                                        </a>
                                                    </h3>
                                                    <p class="blog-description">{{$post->excerpt}}</p>
                                                    <div class="blog-readmore">
                                                        <a href="{{route('page.blog.post', ['slug' => $post->slug])}}" class="swin-transition">Читать подробно <i class="fa fa-angle-double-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

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