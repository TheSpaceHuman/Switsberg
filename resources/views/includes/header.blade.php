<header class="header-transparent">
    <div class="header-top top-layout-02">
        <div class="container">
            <div class="topbar-left">
                <div class="topbar-content">
                    <div class="item">
                        <div class="wg-contact"><i class="fa fa-map-marker"></i><span>{{ setting('contacts.address') }}</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wg-contact"><i class="fa fa-phone"></i><span>{{ setting('contacts.phone') }}</span></div>
                    </div>
                </div>
            </div>
            <div class="topbar-right">
                <div class="topbar-content">
                    <div class="item">
                        <ul class="socials-nb list-inline wg-social">
                            @include('includes.socials')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="open-offcanvas">&#9776;</div>
            <div class="utility-nav">
                <div class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-haspopup="true"
                                         aria-expanded="false" class="search-bar dropdown-toggle"><i
                                class="fa fa-search"></i></a>
                    <div class="dropdown-menu">
                        <div class="search-form">
                            <form action="{{ route('page.search') }}">
                                <div class="input-group">
                                    <input type="text" name="search" placeholder="Поиск" class="form-control">
                                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-logo">
                <a href="/" class="logo logo-static">
                    <img src="assets/images/switzberg_logo.svg" alt="logo">
                </a>
                <a href="/" class="logo logo-fixed">
                    <img src="assets/images/switzberg_logo_brown.svg" alt="logo">
                </a>
            </div>
            <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                <div class="close-offcanvas-wrapper"><span class="close-offcanvas">x</span></div>
                <div class="main-nav">

                    {!! menu('AppMainMenu', 'partials.navigations.AppMainMenu') !!}

                </div>
            </nav>
        </div>
    </div>
</header>