@extends('layouts.main')

@section('title', $currentPage->title)
@section('description', $currentPage->description)
@section('keywords', $currentPage->keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')

    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">{{ $currentPage->title }}</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">{{ $currentPage->excerpt }}</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="page-main col-md-8">
                            <div class="blog-wrapper swin-sc-blog-list">
                                @forelse($posts as $post)
                                    <div class="swin-sc-blog-slider style-02">
                                        <div class="main-slider">
                                            <div class="slides">
                                                <div class="blog-item swin-transition">
                                                    <div class="blog-featured-img"><img src="{{Voyager::image($post->thumbnail('medium'))}}" alt="{{$post->title}}" class="img img-responsive"></div>
                                                    <div class="blog-content">
                                                        <div class="blog-date"><span class="day">{{ $post->created_at->format('d') }}</span><span class="month">{{ $post->created_at->format('M') }}</span></div>
                                                        <div class="blog-info clearfix"></div>
                                                        <h3 class="blog-title"><a href="{{route('page.blog.post', ['slug' => $post->slug])}}" class="swin-transition">{{ $post->title }}</a></h3>
                                                        <p class="blog-description">{{ $post->excerpt }}</p>
                                                        <div class="blog-readmore"><a href="{{route('page.blog.post', ['slug' => $post->slug])}}" class="swin-transition">Читать <i class="fa fa-angle-double-right"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>Посты отсутствуют</p>
                                @endforelse

                                    {{ $posts->links('partials.pagination.main') }}

                            </div>
                        </div>
                        <div class="page-sidebar col-md-4">
                            <!-- search-->
                            <div class="swin-widget widget-search">
                                <div class="title-widget">
                                    <form action="{{ route('page.search') }}" class="search-form">
                                        <input type="search" placeholder="Поиск" name="search" class="search-input"><span class="search-submit"><i class="fa fa-search"></i></span>
                                    </form>
                                </div>
                            </div>
                            <!-- categories-->
                            <div class="swin-widget widget-categories">
                                <div class="title-widget">Категории</div>
                                <div class="widget-body widget-content clearfix">
                                    @foreach($categories as $category)
                                        <a href="{{ route('page.blog.category', ['slug' => $category->slug]) }}" class="link"><i class="icons fa fa-angle-right"></i><span class="text">{{ $category->name }}</span><span class="badge">{{ $category->posts->count() }}</span></a>
                                    @endforeach
                                </div>
                            </div>
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
