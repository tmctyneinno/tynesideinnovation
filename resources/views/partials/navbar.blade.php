<body class="custom-cursor">
  {{-- <div class="loader js-preloader">
      <div></div>
      <div></div>
      <div></div>
  </div> --}}
  <div class="page-wrapper">
      <header class="main-header-two">
          <div class="main-menu-two__top">
              <div class="main-menu-two__top-inner">
            
                  <p class="main-menu-two__top-welcome-text"></p>
                  <div class="main-menu-two__top-right">
                      <div class="main-menu-two__top-time">
                          <div class="main-menu-two__top-time-icon">
                              <span class="icon-time"></span>
                          </div>
                      </div>
                      <div class="main-menu-two__social">
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-facebook"></i></a>
                          <a href="#"><i class="fab fa-pinterest-p"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <nav class="main-menu main-menu-two">
              <div class="main-menu-two__wrapper">
                  <div class="main-menu-two__wrapper-inner">
                      <div class="main-menu-two__left">
                          <div class="main-menu-two__logo">
                              <a href="{{route('index')}}"><img src="{{asset('/assets/images/Tyneside.png')}}"  width="130px" alt=""></a>
                          </div>
                      </div>
                      <div class="main-menu-two__main-menu-box">
                          <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                          <ul class="main-menu__list">
                            @foreach ($menuItems as $menuItem)
                            @if ($menuItem->dropdownItems->isEmpty())
                              <li class="">
                                <a href="{{ route('home.pages', $menuItem->slug )}}" class="nav-link ">{{ $menuItem->name }}</a>
                              </li>
                              @else
                              <li class="dropdown">
                                  <a href="{{ route( 'home.pages', $menuItem->slug )}}"> {{ $menuItem->name }}</a>
                                  <ul>
                                    @foreach ($menuItem->dropdownItems as $dropdownItem)
                                      <li>  <a class="" href="{{ str_replace(['https://tynesideinnovation.com/', 'http://127.0.0.1:8000/'], '', route('home.pages', $dropdownItem->slug)) }}">
                                        {{ $dropdownItem->name }}
                                    </a></li>
                                      @endforeach
                                  </ul>
                              </li>
                              @endif
                              @endforeach
                          </ul>
                      </div>
                      <div class="main-menu-two__right">
                          <div class="main-menu-two__btn-box">
                              {{-- <a href="contact.html" class="thm-btn thm-btn-two main-menu-two__btn">Contact us</a> --}}
                          </div>
                      </div>
                  </div>
              </div>
          </nav>
      </header>
      <div class="stricky-header stricked-menu main-menu main-menu-two">
          <div class="sticky-header__content"></div>
      </div>
