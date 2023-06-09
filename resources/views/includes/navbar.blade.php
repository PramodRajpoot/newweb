<body>
    <!-- body wrap start -->
    <div class="body-wrap overflow-hidden">
      <!-- back-to-top start -->
      <div class="backtotop">
        <a href="#!" class="scroll">
          <i class="far fa-arrow-up fw-bold"></i>
        </a>
      </div>
      <!-- back-to-top end -->
      <!-- header section start -->
      <header class="about_header position-relative">
        <!-- top header start -->
        <div class="top_header_main position-relative bg-white">
          <!-- top header start -->
          <div class="top_header_main d-none d-sm-block">
            <div class="container">
              <div class="header_top d-flex align-items-center justify-content-between">
                <div class="header_top_content d-flex pt-2">
                  <div class="mail_text_content d-flex">
                    <p class="mail_icon">
                      <span>
                        <i class="far fa-envelope text-white pe-2"></i>
                      </span>
                    </p>
                    <p class="mail_text">test@gmail.com</p>
                  </div>
                  <div class="address_text_content d-flex">
                    <p class="mail_icon">
                      <span>
                        <i class="fas fa-map-marker-alt text-white pe-2"></i>
                      </span>
                    </p>
                    <p class="address_text">Lorem ipsum dolor sit amet</p>
                  </div>
                </div>
                <div class="header_top_socials pt-2">
                  <ul class="list-unstyled d-flex">
                    <li>
                      <a href="#!">
                        <i class="fab fa-facebook-f text-white pe-3"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        <i class="fab fa-twitter text-white pe-3"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        <i class="fab fa-instagram text-white pe-3"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#!">
                        <i class="fab fa-linkedin-in text-white"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- top header end -->
          <!-- top inner navbar start -->
          <div class="top_inner_main">
            <div class="top_inner_wrap">
              <div class="container">
                <div class="webMenu position-relative d-none d-lg-block">
                  <div class="top_inner_content about_inner_cont d-flex justify-content-between align-items-center border-top">
                    <div class="top_inner_logo d-flex justify-content-between align-items-center">
                      <a class="logo px-sm-4 py-3" href="index.html">
                        <img src="{{asset('public/assets/images/logo/logo.png')}}" alt="image_not_found" />
                      </a>
                    </div>
                    <div class="px-5 top_inner_searchbar">
                      <div class="about_search position-relative d-none d-lg-block">
                        <input class="py-2 px-3" name="search" type="search" placeholder="All   |   What are you shopping for?" />
                        <span>
                          <i class="fas fa-search position-absolute"></i>
                        </span>
                      </div>
                    </div>
                    <div class="main_search_btn3 d-block d-lg-none ms-auto me-3" data-bs-toggle="collapse" data-bs-target="#main_search_collapse" aria-expanded="false" aria-controls="main_search_collapse">
                      <span>
                        <i class="fas fa-search position-absolute search_icon"></i>
                      </span>
                      <span>
                        <i class="fas fa-times search_close"></i>
                      </span>
                    </div>
                    <div class="navbar_user me-4">
                      <div class="navbar_user_icon">
                        <ul class="list-unstyled d-flex mb-0">
                          <li class="pe-3 position-relative">
                            <a href="#collapseExample" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              <i class="far fa-user" data-toggle="collapse" role="button" data-target="#use_deropdown" aria-expanded="false" aria-controls="use_deropdown"></i>
                            </a>
                            <!-- user profile start -->
                            <div id="collapseExample" class="collapse_dropdown collapse">
                              <div class="dropdown_content">
                                <div class="profile_info clearfix">
                                  <div class="user_thumbnail">
                                    <img src="{{asset('public/assets/images/meta/meta1.png')}}" alt="image_not_found" />
                                  </div>
                                  @if (Route::has('login'))
                                  @auth
                                  <div class="user_content">
                                    <h4 class="user_name">Deepak Sigh</h4>
                                    <span class="user_title">Seller</span>
                                  </div>
                                </div>
                                <ul class="settings_options ul_li_block clearfix">
                                  <li>
                                    <a href="#!">
                                      <i class="fas fa-user-circle"></i> Profile </a>
                                  </li>
                                  <li>
                                    <a href="#!">
                                      <i class="fas fa-user-cog"></i> Settings </a>
                                  </li>
                                  <li>
                                    <a href="#!">
                                      <i class="fas fa-sign-out-alt"></i> Logout </a>
                                  </li>
                                </ul>
                                @else
                                <ul class="settings_options ul_li_block clearfix">
                                    <li>
                                      <a href="{{ route('login') }}">
                                        <i class="fas fa-user-circle"></i>Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">
                                          <i class="fas fa-user-circle"></i>Register</a>
                                      </li>
                                      @endif
                                @endauth
                                @endif
                              </div>
                            </div>
                          </li>
                          <li class="pe-3">
                            <a href="#!">
                              <i class="far fa-heart"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#!">
                              <i class="fas fa-shopping-bag position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                              </i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- mobile menubar start -->
                <div class="mobileMenu d-block d-lg-none">
                  <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html">
                      <img src="{{asset('public/assets/images/logo/logo.png')}}" alt="image_not_found" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                      <div class="offcanvas-header">
                        <button type="button" class="btn-close mobile_menu_close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                        <ul class="navbar-nav main_menu_list m-auto">
                          <li class="nav-item pe-4 dropdown">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                          </li>
                          <li class="nav-item pe-4 dropdown">
                            <a class="nav-link" href="#" id="shop_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <div class="dropdown-menu" aria-labelledby="shop_submenu">
                              <div class="sidebar_nav_item">
                                <ul class="list-unstyled">
                                  <li>
                                    <a href="shop-list-sidebar.html">Shop Sidebar</a>
                                  </li>
                                  <li>
                                    <a href="{{url('shop-list-slider')}}" target="_blank">Shop List</a>
                                  </li>
                                  <li>
                                    <a href="#!">
                                      <span class="item_title text-start">Checkout</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#!">
                                      <span class="item_title text-start">Vendor</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#!">
                                      <span class="item_title text-start">Product Details</span>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="nav-item pe-4 dropdown">
                            <a class="nav-link" href="#" id="blog_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="blog_submenu">
                              <div class="sidebar_nav_item">
                                <ul class="list-unstyled">
                                  <li>
                                    <a href="#!">Blog List 1</a>
                                  </li>
                                  <li>
                                    <a href="#!">Blog List 2</a>
                                  </li>
                                  <li>
                                    <a href="#!">Blog List 3</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="nav-item pe-5">
                            <a class="nav-link" href="#!">Portfolio</a>
                          </li>
                          <li class="nav-item pe-4 dropdown">
                            <a class="nav-link" href="#" id="page_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="page_submenu">
                              <div class="sidebar_nav_item">
                                <ul class="list-unstyled">
                                  <li>
                                    <a href="#!">Cart Page</a>
                                  </li>
                                  <li>
                                    <a href="#!">Faqs Page</a>
                                  </li>
                                  <li>
                                    <a href="{{url('about-us')}}">About Us</a>
                                  </li>
                                  <li>
                                    <a href="#!">Vendor Page</a>
                                  </li>
                                  <li>
                                    <a href="#!">Product Details</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="nav-item pe-4 dropdown">
                            <a class="nav-link" href="#" id="contact_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contacts</a>
                            <div class="dropdown-menu" aria-labelledby="contact_submenu">
                              <div class="sidebar_nav_item">
                                <ul class="list-unstyled">
                                  <li>
                                    <a href="">Contact Us</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="navbar_user me-2">
                      <div class="navbar_user_icon">
                        <ul class="list-unstyled d-flex mb-0">
                          <li class="pe-3">
                            <button class="main_search_btn" data-bs-toggle="collapse" data-bs-target="#main_search_collapse" aria-expanded="false" aria-controls="main_search_collapse">
                              <i class="search_icon fas fa-search"></i>
                              <i class="search_close fas fa-times"></i>
                            </button>
                          </li>
                          <li class="pe-2 position-relative">
                            <a href="#collapseExample" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                              <i class="far fa-user" data-toggle="collapse" role="button" data-target="#use_deropdown" aria-expanded="false" aria-controls="use_deropdown"></i>
                            </a>
                            <!-- user profile start -->
                            <div id="collapseExample" class="collapse_dropdown collapse">
                              <div class="dropdown_content">
                                <div class="profile_info clearfix">
                                  <div class="user_thumbnail">
                                    <img src="{{asset('public/a/images/meta/meta1.png')}}" alt="image_not_found" />
                                  </div>
                                  <div class="user_content">
                                    <h4 class="user_name">Deepak Singh</h4>
                                    <span class="user_title">Seller</span>
                                  </div>
                                </div>
                                <ul class="settings_options ul_li_block clearfix">
                                  <li>
                                    <a href="#!">
                                      <i class="fas fa-user-circle"></i> Profile </a>
                                  </li>
                                  <li>
                                    <a href="#!">
                                      <i class="fas fa-user-cog"></i> Settings </a>
                                  </li>
                                  <li>
                                    <a href="#!">
                                      <i class="fas fa-sign-out-alt"></i> Logout </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </li>
                          <li class="pe-2">
                            <a href="#!">
                              <i class="far fa-heart"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#!">
                              <i class="fas fa-shopping-bag position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                              </i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
            <!-- collapse search - start -->
            <div class="main_search_collapse collapse" id="main_search_collapse">
              <div class="main_search_form position-relative card">
                <div class="container">
                  <form action="#">
                    <div class="form_item position-relative">
                      <input type="search" class="form-control rounded-pill py-3" name="search" placeholder="Search Your Product..." />
                      <button type="submit" class="submit_btn">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- collapse search - end -->
            <!-- top inner navbar end -->
            <!-- bottom header start -->
            <div class="header_bottom_main header_border position-relative d-none d-lg-block">
              <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light border-top p-0">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navbar_4 main_menu_list after_navbar">
                      <li class="nav-item nav_item_has_child px-2 dropdown">
                        <a class="nav-link active" aria-current="page" href="index.html" role="button">Home</a>
                      </li>
                      <li class="nav-item nav_item_has_child px-2 dropdown">
                        <a class="nav-link" href="#" id="shop_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <div class="nav_item_submenu dropdown-menu" aria-labelledby="shop_submenu" style="
                              background-image: url(assets/images/mega/mega3.png);
                            ">
                          <div class="nav_submenu_cont">
                            <h4>All Shop Pages</h4>
                            <ul class="list-unstyled ms-3">
                              <li>
                                <a href="shop-list-sidebar.html">
                                  <span class="item_title text-start">Shop Sidebar</span>
                                </a>
                              </li>
                              <li>
                                <a href="{{url('shop-list-slider')}}">
                                  <span class="item_title text-start">Shop List</span>
                                </a>
                              </li>
                              <li>
                                <a href="#!">
                                  <span class="item_title text-start">Checkout</span>
                                </a>
                              </li>
                              <li>
                                <a href="#!">
                                  <span class="item_title text-start">Vendor</span>
                                </a>
                              </li>
                              <li>
                                <a href="#!">
                                  <span class="item_title text-start">Product Details</span>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item nav_item_has_child px-2 dropdown">
                        <a class="nav-link" href="#" id="blog_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
                        <div class="nav_item_submenu dropdown-menu" aria-labelledby="blog_submenu" style="
                              background-image: url(assets/images/mega/mega3.png);
                            ">
                          <div class="nav_submenu_cont">
                            <h4>All Blog Pages</h4>
                            <ul class="list-unstyled ms-3">
                              <li>
                                <a href="#!">Blog List 1</a>
                              </li>
                              <li>
                                <a href="#!">Blog List 2</a>
                              </li>
                              <li>
                                <a href="#!">Blog List 3</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item nav_item_has_child px-2">
                        <a class="nav-link" href="#!">Portfolio</a>
                      </li>
                      <li class="nav-item nav_item_has_child px-2 dropdown">
                        <a class="nav-link" href="#" id="page_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                        <div class="nav_item_megamenu dropdown-menu" aria-labelledby="page_submenu">
                          <div class="container p-0">
                            <div class="row">
                              <div class="col-lg-4">
                                <div class="mega_thumb_area position-relative" style="
                                      background-image: url(assets/images/sales/sale1.png);
                                    "></div>
                              </div>
                              <div class="col-lg-4">
                                <div class="mega_item_area ms-5 my-4 position-relative">
                                  <h4>All Inner Page</h4>
                                  <ul class="list-unstyled">
                                    <li>
                                      <a href="#!">Cart Page</a>
                                    </li>
                                    <li>
                                      <a href="#!">Faqs Page</a>
                                    </li>
                                    <li>
                                        <a href="{{url('about-us')}}">About Us</a>
                                    </li>
                                    <li>
                                      <a href="#!">Checkout Page</a>
                                    </li>
                                  </ul>
                                  <div class="mega_item_thumb1 position-absolute">
                                    <img src="{{asset('public/assets/images/mega/mega1.png')}}" alt="image_not_found" />
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4">
                                <div class="mega_item_area my-4 position-relative">
                                  <h4>All Inner Page</h4>
                                  <ul class="list-unstyled">
                                    <li>
                                      <a href="#!">
                                        <span class="item_title text-start">Vendor Page</span>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#!">
                                        <span class="item_title text-start">Product Details</span>
                                      </a>
                                    </li>
                                  </ul>
                                  <div class="mega_item_thumb2 position-absolute">
                                    <img src="{{asset('public/assets/images/mega/mega2.png')}}" alt="image_not_found" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="nav-item nav_item_has_child px-2">
                        <a class="nav-link" href="#!">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                  <!-- recent view -->
                  <div class="d-none d-sm-flex justify-content-center pe-3">
                    <div class="social me-3">
                      <span>
                        <i class="fas fa-phone-volume"></i>
                      </span>
                    </div>
                    <div class="support_center d-flex flex-column justify-content-center">
                      <span class="support">Hotline:</span>
                      <span class="number">+90 157 058 4567</span>
                    </div>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>