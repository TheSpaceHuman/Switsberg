@extends('layouts.main')

@section('title', $currentPage->title)
@section('description', $currentPage->description)
@section('keywords', $currentPage->keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')

    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-contact">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">{{ $currentPage->title }}</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">{{ $currentPage->excerpt }}</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="ct-info-section padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="swin-sc swin-sc-title style-2 text-left">
                                <p class="title"><span>Как с нами связаться</span></p>
                            </div>
                            <div class="reservation-form style-02">
                                <div class="swin-sc swin-sc-contact-form light mtl style-full">
                                    <form method="POST" action="{{ route('action.mail.contactFeedback') }}">@CSRF
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="text" placeholder="Имя" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                <input type="text" placeholder="Email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <div class="fa fa-phone"></div>
                                                </div>
                                                <input type="text" placeholder="Телефон" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <textarea placeholder="Сообщение" class="form-control" name="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="swin-btn-wrap">
                                                <button type="submit" class="swin-btn center form-submit"><span>Отправить</span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="swin-sc swin-sc-title style-2 text-left">
                                <p class="title"><span>Наши контакты</span></p>
                            </div>
                            <div class="swin-sc swin-sc-contact">
                                <div class="media item">
                                    <div class="media-left">
                                        <div class="wrapper-icon"><i class="icons fa fa-map-marker"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading title">Адрес</h4>
                                        <div class="description">{{ setting('contacts.address') }}</div>
                                    </div>
                                </div>
                                <div class="media item">
                                    <div class="media-left">
                                        <div class="wrapper-icon"><i class="icons fa fa-phone"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading title">Телефон</h4>
                                        <div class="description">{{ setting('contacts.phone') }}</div>
                                    </div>
                                </div>
                                <div class="media item">
                                    <div class="media-left">
                                        <div class="wrapper-icon"><i class="icons fa fa-envelope"></i></div>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading title">Почта</h4>
                                        <div class="description">
                                            <p>{{ setting('contacts.email') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map-section padding-bottom-100">
                <div class="container">
                        {!! setting('map.map-1') !!}
                </div>
            </section>
        </div>
    </div>

@endsection

@section('footer')
    @include('includes.footer')
@endsection
