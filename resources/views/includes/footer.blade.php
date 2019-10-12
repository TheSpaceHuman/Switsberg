<footer>
    <div class="subscribe-section"><img src="assets/images/background/bg5.png" alt="" class="img-subscribe">
        <div class="container">
            <div class="subscribe-wrapper">
                <div class="row">
                    <div class="col-12 col-lg-9 col-lg-offset-2">
                        <div class="subscribe-wrapper__flex">
                            <div class="subscribe-heading">
                                <h3 class="title">Подписка на рассылку</h3>
                                <div class="des">
                                    Вы любите секреты? Вы не пропускаете мимо себя редкие ценности? Подпишитесь на рассылку от Switzberg  и мы будем сообщать Вам то, о чем не знают другие: о новых, интересных скрытых системах хранения и о возможности приобрести их первыми и по лучшей цене.
                                </div>
                            </div>
                            <form class="widget-newsletter" action="{{route('action.subscribe.store')}}" method="POST">@csrf
                                <input placeholder="Email" class="form-control" name="email" required type="email" value="{{old('email')}}">
                                <button style="border: 0; background-color: transparent" type="submit" class="submit"><span><i class="fa fa-paper-plane"></i></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-top"></div>
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ft-widget-area">
                        <div class="ft-area1">
                            <div class="swin-wget swin-wget-about">
                                <div class="clearfix"><a class="wget-logo"><img src="assets/images/switzberg_logo.svg"
                                                                                alt=""
                                                                                class="img img-responsive"></a>
                                    <ul class="socials socials-about list-unstyled list-inline">
                                        @include('includes.socials')
                                    </ul>
                                </div>
                                <div class="wget-about-content">
                                    <p>{{ setting('footer.headline_text') }}</p>
                                </div>
                                <div class="about-contact-info clearfix">
                                    <div class="address-info">
                                        <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                                        <div class="info-content">
                                           <p>{{ setting('contacts.address') }}</p>
                                        </div>
                                    </div>
                                    <div class="phone-info">
                                        <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                                        <div class="info-content">
                                            <p>{{ setting('contacts.phone') }}</p>
                                        </div>
                                    </div>
                                    <div class="email-info">
                                        <div class="info-icon"><i class="fa fa-envelope"></i></div>
                                        <div class="info-content">
                                           <p>{{ setting('contacts.email') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="copyright" style="">
                                     switzberg.ru 2019
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>