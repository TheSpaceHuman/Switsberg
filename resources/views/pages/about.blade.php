@extends('layouts.main')

@section('title', $currentPage->title)
@section('description', $currentPage->description)
@section('keywords', $currentPage->keywords)

@section('header')
    @include('includes.header')
@endsection

@section('content')

    <div class="page-container">
        <div data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -50px;" class="page-title page-about">
            <div class="container">
                <div class="title-wrapper">
                    <div data-top="transform: translateY(0px);opacity:1;" data--120-top="transform: translateY(-30px);opacity:0;" data-anchor-target=".page-title" class="title">{{ $currentPage->title }}</div>
                    <div data-top="opacity:1;" data--120-top="opacity:0;" data-anchor-target=".page-title" class="divider"><span class="line-before"></span><span class="dot"></span><span class="line-after"></span></div>
                    <div data-top="transform: translateY(0px);opacity:1;" data--20-top="transform: translateY(5px);" data--50-top="transform: translateY(15px);opacity:0.8;" data--120-top="transform: translateY(30px);opacity:0;" data-anchor-target=".page-title" class="subtitle">{{ $currentPage->excerpt }}</div>
                </div>
            </div>
        </div>
        <div class="page-content-wrapper">
            <section class="ab-timeline-section padding-top-100 padding-bottom-100">
                <div class="container">
                    {!! $currentPage->body !!}
                    <div data-item="6" class="swin-sc swin-sc-timeline-2">
                        <div class="main-slider">
                            <div class="slides">
                            @foreach($history_companies as $history_item)
                                <div class="timeline-item item swin-transition">
                                    <div class="timeline-item-wrap"><span class="timeline-year swin-transition">{{ $history_item->year }}</span></div><img src="{{ Voyager::image($history_item->thumbnail('cropped')) }}" alt="{{$history_item->title}}" class="img img-responsive">
                                </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="nav-slider">
                            <div class="slides">
                                @foreach($history_companies as $history_item)
                                <div class="timeline-content-item">
                                    <p class="timeline-heading"><strong>{{ $history_item->title }}</strong> </p>
                                    <div class="timeline-content-detail">
                                        <p>{{ $history_item->description }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {!! $currentPage->body2 !!}
           {{-- <section data-bottom-top="background-position: 50% 50px;" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -150px;" class="ab-testimonial-section padding-top-100 padding-bottom-100">
                <div class="container"><img src="assets/images/background/ab_team_01.png" alt="" class="img-left img-bg img-deco img-responsive">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                            <div class="swin-sc swin-sc-testimonial style-2 option-2">
                                <div class="main-slider flexslider">
                                    <div class="slides">
                                        <div class="testi-item item"><i class="testi-icon fa fa-quote-left"></i>
                                            <div class="testi-content">
                                                <p>Людям свойственно баловать себя предметами роскоши. Материальный мир прекрасен богатством визуальных и тактильных образов, воплощенных в вещи которые нам дороги</p>
                                            </div><img src="assets/images/testi/testi-signal.png" alt="" class="testi-signal">
                                            <div class="testi-info"><span class="name">Timothy Doe</span> <span class="position">Customer</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="featured-section padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="swin-sc swin-sc-title">
                                <p class="top-title"><span>Наши технологии</span></p>
                                <h3 class="title">Как это устроено?</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="swin-sc sc-featured-box item wow fadeInUp"><img src="assets/images/featured-box-bg-1.jpg" alt="fooday" class="box-bg">
                                        <div class="box-inner">
                                            <h4 class="box-title">Управление</h4>
                                            <div class="box-content">Открывайте взору Ваши сокровища, управляя сейфом с дистанционного пульта.</div>
                                            <div class="btn-wrap text-center"><a href="javascript:void(0)" class="btn swin-btn"><span>Читать подробно</span></a></div>
                                            <div class="showcase"><img src="assets/images/feature-box-bg.jpg" alt="" class="img-responsive img-showcase">
                                                <div class="title-showcase">Управление</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div data-wow-delay="0.5s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="assets/images/featured-box-bg-1.jpg" alt="fooday" class="box-bg">
                                        <div class="box-inner">
                                            <h4 class="box-title">Оформление</h4>
                                            <div class="box-content">Позвольте себе впечатляться внутренним пространством сейфа, достойным коллекции.</div>
                                            <div class="btn-wrap text-center"><a href="javascript:void(0)" class="btn swin-btn"><span>Читать подробно</span></a></div>
                                            <div class="showcase"><img src="assets/images/feature-box-bg-2.jpg" alt="" class="img-responsive img-showcase">
                                                <div class="title-showcase">Оформление</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div data-wow-delay="1s" class="swin-sc sc-featured-box item wow fadeInUp"><img src="assets/images/featured-box-bg-1.jpg" alt="fooday" class="box-bg">
                                        <div class="box-inner">
                                            <h4 class="box-title">Безопасность</h4>
                                            <div class="box-content">Чувствуйте себя абсолютно защищенным благодаря передовым технологиям высшего класса.</div>
                                            <div class="btn-wrap text-center"><a href="javascript:void(0)" class="btn swin-btn"><span>Читать подробно</span></a></div>
                                            <div class="showcase"><img src="assets/images/feature-box-bg-3.jpg" alt="" class="img-responsive img-showcase">
                                                <div class="title-showcase">Безопасность</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>--}}


 
{{--            {!! $currentPage->body3 !!}--}}
            <section class="counter-section-03 padding-top-100 padding-bottom-100">
                <div class="container"> 
                    <div class="swin-sc swin-sc-counter">
                        <div class="row">
                            @foreach($counters as $counter)
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="counter-info item"><span data-from="0" data-to="{{ $counter->number }}" data-speed="1000" data-refresh-interval="5" class="number timer">0</span><span class="caption"> {{ $counter->intro }}</span></div>
                                    <div class="counter-avatar"><img src="{{ Voyager::image( $counter->image) }}" alt="fooday" class="img img-responsive"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-reservation-form padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="section-content">
                        <div class="swin-sc swin-sc-title style-2">
                            <h3 class="title"><span>Заказать</span></h3>
                        </div>
                        <div class="reservation-form layout-2">
                            <div class="reservation-form-inner">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <p class="reservation-form-title text-center">
                                            Горячая линия по номеру:
                                            <a href="tel:{{ setting('contacts.phone') }}" class="text-default">{{ setting('contacts.phone') }}</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="swin-sc swin-sc-contact-form light mtl">
                                    <form method="POST" action="{{ route('action.mail.aboutFeedback') }}">@CSRF
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="text" placeholder="Имя" class="form-control" name="name">
                                            </div>
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
                                            <div class="swin-btn-wrap center"><button type="submit" class="swin-btn center form-submit"> <span>Заказать</span></button></div>
                                        </div>
                                    </form>
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
