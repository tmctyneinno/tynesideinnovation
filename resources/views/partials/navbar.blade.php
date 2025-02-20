 <!--=================================
    header -->
    <header class="header header-transparent ">
      <div class="topbar bg-white d-none d-lg-block">
        <div class="container-fluid">
          <div class="row"> 
            <div class="col-12">
              <div class="d-block d-md-flex align-items-center text-center">
                {{-- <div class="me-4 d-inline-block py-1">
                  <a href="#"><i class="far fa-envelope me-2 fa-flip-horizontal text-primary"></i>info@tynesideinnovation.com, enquiries@tynesideinnovation.com</a>
                </div> 
                <div class="me-auto d-inline-block py-1">
                  <a href="tel:1-800-555-1234"><i class="fas fa-map-marker-alt text-primary me-2"></i>AFRICA: 1 Adeola Adeoye Street, Off Toyin Street, Ikeja, Lagos Nigeria 2341</a>
                </div> --}}
                <div class="d-inline-block py-1">
                  <ul class="list-unstyled">
                    <li><a href="{{ route('home.pages', 'career') }}">Careers</a></li>
                    <li><a href="{{ route('home.pages','blog')}}">Blog</a></li>
                    <li><a href="{{ route('home.pages', 'faq') }}">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
       
      {{-- <nav class="navbar bg-white navbar-static-top navbar-expand-lg "> --}}
        <nav class="navbar navbar-static-top navbar-expand-lg ">
        <div class="container-fluid">
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
          <a class="navbar-brand" href="index.html">
            <img class="img-fluid" src="{{ asset('assets/images/logo.png')}}" alt="logo">
          </a>
          <div class="navbar-collapse collapse">
          
            <ul class="nav navbar-nav">
              @foreach ($menuItems as $menuItem)
                  @if ($menuItem->dropdownItems->isEmpty())
                      <!-- Render a single menu item without a dropdown -->
                      <li class="nav-item">
                          <a href="{{ route( 'home.pages', $menuItem->slug )}}" class="nav-link ">{{ $menuItem->name }}</a>
                      </li>
                  @else
                      <!-- Render a menu item with dropdown -->
                      <li class="dropdown nav-item">
                          <a href="{{ route( 'home.pages', $menuItem->slug )}}" class="nav-link" >
                            {{ $menuItem->name }}
                          </a>
                          <ul class="dropdown-menu">
                              @foreach ($menuItem->dropdownItems as $dropdownItem)
                                  <li>
                                      <a class="dropdown-item" href="{{ str_replace(['https://tynesideinnovation.com/', 'http://127.0.0.1:8000/'], '', route('home.pages', $dropdownItem->slug)) }}">
                                          {{ $dropdownItem->name }} <i class="fas fa-arrow-right"></i>
                                      </a>

                                  </li>
                              @endforeach
                          </ul>
                      </li>
                  @endif
              @endforeach
          </ul>

          </div>
          <div class="d-none d-sm-flex ms-auto me-5 me-lg-0 pe-4 pe-lg-0">
            <ul class="nav ms-1 ms-lg-2 align-self-center">
              <li class="contact-number nav-item pe-4 ">
                <a class="fw-bold" href="#"><i class="fab fa-whatsapp pe-2"></i>(+234) 915 3414 314</a>
              </li>
              {{-- <li class="header-search nav-item">
                <div class="search">
                  <a class="search-btn not_click" href="javascript:void(0);"></a>
                  <div class="search-box not-click">
                    <form action="#" method="get">
                      <input type="text" class="not-click form-control" name="search" placeholder="Search..">
                      <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                    </form>
                  </div>
                </div>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
    </header>

   
    <!--=================================
    header -->
  