@extends('layouts.main')

@section('title', 'Поиск')
@section('description', 'Поиск по сайту')
@section('keywords', 'поиск')

@section('header')
    @include('includes.header')
@endsection

@section('content')

    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-menu">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(-5px);" data--50-top="transform: translateY(-15px);opacity:0.8;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Поиск</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">Поиск по сайту</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="product-sesction-02 padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="swin-sc swin-sc-title style-3">
                        <p class="title"><span>Поиск</span></p>
                    </div>
                   <div class="row">
                       <div class="col-md-12">
                           @if($products->isNotEmpty() || $posts->isNotEmpty())
                               @if($products->isNotEmpty())
                                   <h2><strong>Продукты: {{ $products->count() }}</strong></h2>
                                   @foreach($products as $product)
                                       <h3><a href="{{route('page.products.product', $product->slug)}}">{{$product->title}}</a></h3>
                                       <p>{!!  $product->description !!}</p>
                                   @endforeach
                               @endif

                               {{--@if($posts->isNotEmpty())
                                   <h2><strong>Посты: {{ $posts->count() }}</strong></h2>
                                   @foreach($posts as $post)
                                       <h3><a href="{{route('page.blog.post', $post->slug)}}">{{$post->title}}</a></h3>
                                       <p>{!! $post->body !!}</p>
                                   @endforeach
                               @endif--}}
                           @else
                               <p>Поиск не дал результатов...</p>
                           @endif
                       </div>
                   </div>

                </div>
            </section>
        </div>
    </div>

@endsection

@section('footer')
    @include('includes.footer')
@endsection
