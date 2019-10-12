@extends('layouts.main')

@section('title', $post->seo_title)
@section('description', $post->meta_description)
@section('keywords', $post->meta_keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')

    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-blog">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">Детальный пост</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">{{ $post->title }}</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <div class="container">
                <div class="padding-top-100 padding-bottom-100">
                    <div class="row">
                        <div class="page-main col-md-8">
                            <div class="blog-wrapper swin-blog-single">
                                <div class="swin-sc-blog-slider style-02">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="blog-item">
                                                <div class="blog-featured-img"><img src="{{Voyager::image($post->thumbnail('medium'))}}" alt="{{$post->title}}" class="img img-responsive"></div>
                                                <div class="blog-content">
                                                    <div class="blog-meta-info">
                                                        <div class="blog-date"><span class="day">{{ $post->created_at->format('d') }}</span><span class="month">{{ $post->created_at->format('M') }}</span></div>
                                                        <div class="blog-info clearfix"></div>
                                                        <h3 class="blog-title">{{$post->title}}</h3>
                                                    </div>
                                                   <div class="blog-content-inner">
                                                       {!! $post->body !!}
                                                   </div>
                                                    <div class="blog-footer clearfix">
                                                        <div class="blog-share">
                                                            <ul class="socials list-unstyled list-inline">
                                                                <li><a href="{{ setting('socials.facebook') }}"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="{{ setting('socials.twitter') }}"><i class="fa fa-twitter"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="blog-comment">
                                    <div class="comment-heading swin-sc swin-sc-title style-2 text-left">
                                        <p class="title"><span>Комментарии {{$comments->count()}} </span></p>
                                    </div>
                                    <div class="comment-area">
                                        <div class="comment-list media-list list-unstyledl">
                                            @forelse($comments as $comment)
                                                <div class="comment-item media">
                                                    <div class="media-body">
                                                        <p class="author-comment-name media-heading">{{$comment->name}}</p>
                                                        <p>{{$comment->message}}</p>
                                                        <ul class="list-inline">
                                                            <li class="comment-date">{{$comment->created_at->format('d.m.Y')}}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                @empty
                                                <p>Комментарии отсутствуют</p>
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="comment-form">
                                        <div class="comment-heading swin-sc swin-sc-title style-2 text-left">
                                            <p class="title"><span>Оставить комментарий</span></p>
                                        </div>
                                        <div class="swin-sc swin-sc-contact-form light mtl margin-bottom-100">
                                            <form action="{{route('action.comment.store')}}" method="POST">@csrf
                                                <input type="hidden" name="post_id" value="{{$post->id}}">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                        <input name='name' type="text" placeholder="Имя" class="form-control" value="{{old('name')}}" required>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                        <input name='email' type="email" placeholder="Email" class="form-control" value="{{old('email')}}" required>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" required>{{old('message')}}</textarea>
                                                    @if($errors->any())
                                                        <ul>
                                                            @foreach($errors->all() as $error)
                                                                <li class="text-danger">{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </div>

                                                <div class="form-group">
                                                    <div class="swin-btn-wrap">
                                                        <button type="submit" class="swin-btn form-submit"><span>Отправить</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-sidebar col-md-4">
                            <!-- search-->
                            <div class="swin-widget widget-search">
                                <div class="title-widget">
                                    <form accept-charset="utf-8" class="search-form">
                                        <input type="search" placeholder="Search" name="s" value="" class="search-input"><span class="search-submit"><i class="fa fa-search"></i></span>
                                    </form>
                                </div>
                            </div>
                            <!-- categories-->
                            <div class="swin-widget widget-categories">
                                <div class="title-widget">Категории</div>
                                <div class="widget-body widget-content clearfix">
                                    @if($categories->isNotEmpty())
                                        @foreach($categories as $category)
                                            <a href="{{ route('page.blog.category', ['slug' => $category->slug]) }}" class="link {{ $post->category->name === $category->name ? 'active' : '' }}"><i class="icons fa fa-angle-right"></i><span class="text">{{ $category->name }}</span><span class="badge">{{ $category->posts->count() }}</span></a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('includes.footer')
@endsection
