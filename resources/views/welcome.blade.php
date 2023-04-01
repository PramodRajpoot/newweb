@include('includes.header')
@include('includes.navbar')

      <!-- main body start -->
      <main>
        <!-- sidebar section start -->
        <section class="sidebar_section">
          <div class="sidebar_content_wrap">
            <div class="container">
              <div class="row">
                <div
                  class="offcanvas offcanvas-end"
                  tabindex="-1"
                  id="offcanvasRight"
                  aria-labelledby="offcanvasRightLabel"
                >
                  <div class="offcanvas-header align-items-center">
                    <h5 class="mb-0">Organic Products</h5>
                    <button
                      type="button"
                      class="btn-close text-reset text-end"
                      data-bs-dismiss="offcanvas"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="offcanvas-body">
                    <div
                      class="prdc_ctg_product_content mt-1 d-flex align-items-center"
                    >
                      <div
                        class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3"
                      >
                        <img
                          src="{{asset('public/assets/images/category/cat6.png')}}"
                          alt="image_not_found"
                        />
                      </div>
                      <div class="prdc_ctg_product_text">
                        <div class="prdc_ctg_product_title my-2">
                          <a href="#!">
                            <h5>Organic Cabbage</h5>
                          </a>
                        </div>
                        <div class="prdc_ctg_product_price mt-1 product_price">
                          <span class="sale_price pe-1">$50.00</span>
                          <del>$70.00</del>
                        </div>
                      </div>
                    </div>
                    <div
                      class="prdc_ctg_product_content mt-1 d-flex align-items-center"
                    >
                      <div
                        class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3"
                      >
                        <img
                          src="{{asset('public/assets/images/category/cat7.png')}}"
                          alt="image_not_found"
                        />
                      </div>
                      <div class="prdc_ctg_product_text">
                        <div class="prdc_ctg_product_title my-2">
                          <a href="#!">
                            <h5>Organic Cabbage</h5>
                          </a>
                        </div>
                        <div class="prdc_ctg_product_price mt-1 product_price">
                          <span class="sale_price pe-1">$40.00</span>
                          <del>$60.00</del>
                        </div>
                      </div>
                    </div>
                    <div
                      class="prdc_ctg_product_content mt-1 d-flex align-items-center"
                    >
                      <div
                        class="prdc_ctg_product_img d-flex justify-content-center align-items-center me-3"
                      >
                        <img
                          src="{{asset('public/assets/images/category/cat8.png')}}"
                          alt="image_not_found"
                        />
                      </div>
                      <div class="prdc_ctg_product_text">
                        <div class="prdc_ctg_product_title my-2">
                          <a href="#!">
                            <h5>Organic Cabbage</h5>
                          </a>
                        </div>
                        <div class="prdc_ctg_product_price mt-1 product_price">
                          <span class="sale_price pe-1">$70.00</span>
                          <del>$90.00</del>
                        </div>
                      </div>
                    </div>
                    <div class="total_price">
                      <ul class="ul_li_block mb_30 clearfix">
                        <li>
                          <span>Subtotal:</span>
                          <span>$215</span>
                        </li>
                        <li>
                          <span>Vat 5%:</span>
                          <span>$10.75</span>
                        </li>
                        <li>
                          <span>Discount 15%:</span>
                          <span>- $32.25</span>
                        </li>
                        <li>
                          <span>Total:</span>
                          <span>$191.8875</span>
                        </li>
                      </ul>
                    </div>
                    <div class="sidebar_btns">
                      <ul class="btns_group ul_li_block clearfix">
                        <li><a href="#!">View Cart</a></li>
                        <li><a href="#!">Checkout</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- sidebar section end -->
        
        <!-- banner4 section start -->
        <section class="banner4_section position-relative sec_space_large">
          <div class="banner4_section_wrap">
            <div class="container">
              <div
                class="row slide_content slideshow6_slider mx-3"
                data-slick='{"dots": false}'
              >
                <div
                  class="slide_item_content d-flex justify-content-center align-items-center"
                >
                  <div class="col-lg-6">
                    <div class="banner4_sub_cont position-relative">
                      <h6 class="text-white text-uppercase position-absolute">
                        100% Organic Foods
                      </h6>
                      <img
                        class="banner4_sub_bg mb-4"
                        src="{{asset('public/assets/images/shapes/shape2.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="banner4_title text-effect">
                      <h1>
                        Organic Veggies Foods
                        <font class="text-effect">
                          <span>H</span><span>e</span><span>a</span
                          ><span>l</span><span>t</span><span>h</span
                          ><span>y</span>
                        </font>
                      </h1>
                    </div>
                    <p class="banner4_desc">
                      Morbi eget congue lectus. Donec eleifend ultricies urna et
                      euismod. Sed consectetur tellus eget odio aliquet, vel
                      vestibulum tellus sollicitudin. Morbi maximus metus eu
                      eros tincidunt
                    </p>
                    <div class="banner4_btn">
                      <a href="#!"
                        ><button
                          type="button"
                          class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white"
                        >
                          Subscribe
                          <i class="fas fa-long-arrow-alt-right"></i></button
                      ></a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="banner10_img img_moving_anim1">
                      <img
                        src="{{asset('public/assets/images/banner/banner7.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="slide_item_content d-flex justify-content-center align-items-center"
                >
                  <div class="col-lg-6">
                    <div class="banner4_sub_cont position-relative">
                      <h6 class="text-white text-uppercase position-absolute">
                        100% Organic Foods
                      </h6>
                      <img
                        class="banner4_sub_bg mb-4"
                        src="{{asset('public/assets/images/shapes/shape2.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="banner4_title">
                      <h1>
                        Organic Veggies Foods
                        <font class="text-effect">
                          <span>H</span><span>e</span><span>a</span
                          ><span>l</span><span>t</span><span>h</span
                          ><span>y</span>
                        </font>
                      </h1>
                    </div>
                    <p class="banner4_desc">
                      Morbi eget congue lectus. Donec eleifend ultricies urna et
                      euismod. Sed consectetur tellus eget odio aliquet, vel
                      vestibulum tellus sollicitudin. Morbi maximus metus eu
                      eros tincidunt
                    </p>
                    <div class="banner4_btn">
                      <a href="#!"
                        ><button
                          type="button"
                          class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white"
                        >
                          Subscribe
                          <i class="fas fa-long-arrow-alt-right"></i></button
                      ></a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="banner10_img img_moving_anim1">
                      <img
                        src="{{asset('public/assets/images/banner/banner7.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="banner4_slide_arrow_cont">
              <div
                class="banner4_arrow1 d-flex align-items-center position-absolute ss6_left_arrow"
              >
                <i class="fas fa-arrow-left"></i>
                <div
                  class="slide_arrow_left shadow d-flex justify-content-center align-items-center"
                >
                  <img
                    src="{{asset('public/assets/images/product/product49.png')}}"
                    alt="image_not_found"
                  />
                </div>
              </div>
              <div
                class="banner4_arrow2 d-flex align-items-center position-absolute ss6_right_arrow"
              >
                <a
                  class="slide_arrow_right shadow d-flex justify-content-center align-items-center"
                  href="#!"
                  ><img
                    src="{{asset('public/assets/images/product/product23.png')}}"
                    alt="image_not_found"
                /></a>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </div>
          <!-- banner left img -->
          <div class="banner_left_img position-absolute">
            <img src="{{asset('public/assets/images/shapes/shape35.png" alt="image_not_found')}}" />
          </div>
        </section>
        <!-- banner section end -->

        <!-- sale-3 section start -->
        <section
          class="sale3_sec sec_inner_bottom_80"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div class="sale3_sec_wrap">
            <div class="container">
              <div class="row gx-3">
                <div class="col-lg-6">
                  <div
                    class="sale3_content d-flex flex-column justify-content-center align-items-center overflow-hidden sec_space_xs_70"
                    style="
                      background-image: url(public/assets/images/offer/offer8.png);
                    "
                    data-aos="fade-right"
                    data-aos-duration="1000"
                  >
                    <h3 class="sale3_title">
                      Sale 68% Off All Fruite Products
                    </h3>
                    <span class="sale3_subtitle text-uppercase"
                      >tast of nature</span
                    >
                  </div>
                </div>
                <div class="col-lg-6">
                  <div
                    class="sale3_content2 sec_space_xs_70"
                    style="
                      background-image: url(public/assets/images/offer/offer9.png);
                    "
                    data-aos="fade-left"
                    data-aos-duration="1000"
                  >
                    <div class="row">
                      <div class="col-6"></div>
                      <div class="col-6">
                        <div class="sale3_text">
                          <h3 class="sale3_title">
                            Sale 68% Off All Fruite Products
                          </h3>
                          <span class="sale3_subtitle text-uppercase"
                            >tast of nature</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- sale-3 section end -->
        <!-- category section start -->
        <section
          class="category_section sec_ptb_100 position-relative overflow-hidden clearfix"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div class="container">
            <div class="row">
              <div class="category_top_content d-flex justify-content-between">
                <div class="category_top_content_text">
                  <div class="category_sub_title d-flex align-items-center">
                    <i class="far fa-circle"></i>
                    <i class="far fa-circle"></i>
                    <i class="far fa-circle"></i>
                    <span class="ps-2">FRESH FROM OUR FARM</span>
                  </div>
                  <div class="category_title pb-3">
                    <h2>Popular Categories</h2>
                  </div>
                </div>
                <div class="category_top_btn_cont d-flex">
                  <button
                    type="button"
                    class="ss1_left_arrow rounded-pill me-2"
                  >
                    <i class="fas fa-arrow-left"></i>
                  </button>
                  <button type="button" class="ss1_right_arrow rounded-pill">
                    <i class="fas fa-arrow-right"></i>
                  </button>
                </div>
              </div>
              <div
                class="category_slick slideshow1_slider clearfix d-flex justify-content-center align-items-center justify-content-between px-0"
                data-slick='{"dots": false}'
              >
                <div
                  class="col item_content slider_item text-center"
                  data-aos="fade-up"
                  data-aos-duration="300"
                >
                  <a href="#!" target="_blank">
                    <div
                      class="item_image_content overflow-hidden position-relative"
                    >
                      <img
                        src="{{asset('public/assets/images/category/cat1.png')}}"
                        alt="image_not_found"
                      />
                      <h6 class="item_title position-absolute rounded-pill">
                        Awesome Broccoli
                      </h6>
                    </div>
                  </a>
                </div>
                <div
                  class="col item_content slider_item text-center"
                  data-aos="fade-up"
                  data-aos-duration="600"
                >
                  <a href="#!" target="_blank">
                    <div
                      class="item_image_content overflow-hidden position-relative"
                    >
                      <img
                        src="{{asset('public/assets/images/category/cat2.png')}}"
                        alt="image_not_found"
                      />
                      <h6 class="item_title position-absolute rounded-pill">
                        Fruits & Vegetables
                      </h6>
                    </div>
                  </a>
                </div>
                <div
                  class="col item_content slider_item text-center"
                  data-aos="fade-up"
                  data-aos-duration="900"
                >
                  <a href="#!" target="_blank">
                    <div
                      class="item_image_content overflow-hidden position-relative"
                    >
                      <img
                        src="{{asset('public/assets/images/category/cat3.png')}}"
                        alt="image_not_found"
                      />
                      <h6 class="item_title position-absolute rounded-pill">
                        Grocery & Staples
                      </h6>
                    </div>
                  </a>
                </div>
                <div
                  class="col item_content slider_item text-center"
                  data-aos="fade-up"
                  data-aos-duration="1200"
                >
                  <a href="#!" target="_blank">
                    <div
                      class="item_image_content overflow-hidden position-relative"
                    >
                      <img
                        src="{{asset('public/assets/images/category/cat4.png')}}"
                        alt="image_not_found"
                      />
                      <h6 class="item_title position-absolute rounded-pill">
                        Health & Wellness
                      </h6>
                    </div>
                  </a>
                </div>
                <div
                  class="col item_content slider_item text-center"
                  data-aos="fade-up"
                  data-aos-duration="1500"
                >
                  <a href="#!" target="_blank">
                    <div
                      class="item_image_content overflow-hidden position-relative"
                    >
                      <img
                        src="{{asset('public/assets/images/category/cat5.png')}}"
                        alt="image_not_found"
                      />
                      <h6 class="item_title position-absolute rounded-pill">
                        Package Foods
                      </h6>
                    </div>
                  </a>
                </div>
                <div
                  class="col item_content slider_item text-center"
                  data-aos="fade-up"
                  data-aos-duration="1800"
                >
                  <a href="#!" target="_blank">
                    <div
                      class="item_image_content overflow-hidden position-relative"
                    >
                      <img
                        src="{{asset('public/assets/images/category/cat3.png')}}"
                        alt="image_not_found"
                      />
                      <h6 class="item_title position-absolute rounded-pill">
                        Package Foods
                      </h6>
                    </div>
                  </a>
                </div>
                <div
                  class="col item_content slider_item text-center"
                  data-aos="fade-up"
                  data-aos-duration="2100"
                >
                  <a href="#!" target="_blank">
                    <div
                      class="item_image_content overflow-hidden position-relative"
                    >
                      <img
                        src="{{asset('public/assets/images/category/cat2.png')}}"
                        alt="image_not_found"
                      />
                      <h6 class="item_title position-absolute rounded-pill">
                        Package Foods
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- banner side image start -->
          <img
            class="category_left_thumb position-absolute"
            src="{{asset('public/assets/images/shapes/shape3.png')}}"
            alt="image_not_found"
          />
          <!-- banner side image end -->
        </section>
        <!-- category section end -->
        <!-- trend section start -->
        <section
          class="trend_section position-relative sec_top_space_70"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div
            class="trend_section_wrap position-relative overflow-hidden sec_space_xlarge"
            style="background-image: url(public/assets/images/trends/trend1.png)"
          >
            <div class="container">
              <div class="trend_top_content">
                <div
                  class="trend_sub_title d-flex align-items-center justify-content-center"
                >
                  <i class="far fa-circle"></i>
                  <i class="far fa-circle"></i>
                  <i class="far fa-circle"></i>
                  <span class="text-uppercase px-3">FRESH FROM OUR FARM</span>
                  <i class="far fa-circle"></i>
                  <i class="far fa-circle"></i>
                  <i class="far fa-circle"></i>
                </div>
                <div class="trend_top_title text-center pb-4">
                  <h2>Best Trending</h2>
                </div>
              </div>
              <div class="row justify-content-center text-center">
                <div class="col-sm-6 col-lg-4">
                  <div
                    class="trend_inner_content position-relative"
                    data-aos="fade-right"
                    data-aos-duration="1500"
                  >
                    <div class="trend_thumb">
                      <img
                        src="{{asset('public/assets/images/trends/trend4.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trend_inner_text position-absolute">
                      <h4 class="text-white">Get Every Vegetable You Need</h4>
                      <a href="#!" class="text-white"
                        >SHOP NOW
                        <i class="fas fa-long-arrow-alt-right text-white"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div
                    class="trend_inner_content position-relative"
                    data-aos="fade-up"
                    data-aos-duration="1500"
                  >
                    <div class="trend_thumb">
                      <img
                        src="{{asset('public/assets/images/trends/trend5.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trend_inner_text position-absolute">
                      <h4 class="text-white">Get Every Vegetable You Need</h4>
                      <a href="#!" class="text-white"
                        >SHOP NOW
                        <i class="fas fa-long-arrow-alt-right text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                  <div
                    class="trend_inner_content position-relative"
                    data-aos="fade-left"
                    data-aos-duration="1500"
                  >
                    <div class="trend_thumb">
                      <img
                        src="{{asset('public/assets/images/trends/trend6.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trend_inner_text position-absolute">
                      <h4 class="text-white">Get Every Vegetable You Need</h4>
                      <a href="#!" class="text-white"
                        >SHOP NOW
                        <i class="fas fa-long-arrow-alt-right text-white"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- trend section end -->
        <!-- sale2 section start -->
        <section
          class="sale2_section_2 mt-5"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div
            class="sale2_section_wrap sec_space_small sale2_bg d-flex justify-content-center align-items-center"
          >
            <div class="container">
              <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                  <div class="sale_pro_thumb img_moving_anim1">
                    <img
                      src="{{asset('public/assets/images/product/product42.png')}}"
                      alt="image_not_found"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="sale2_content_wrap ps-3">
                    <div class="sale2_sub_cont position-relative">
                      <h6 class="text-white text-uppercase position-absolute">
                        New Foods
                      </h6>
                      <img
                        class="sale2_sub_bg mb-4"
                        src="{{asset('public/assets/images/shapes/shape2.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="sale2_title text-effect py-2">
                      <h2>
                        Sale 68% Off <br />
                        All
                        <font>
                          <span>F</span><span>r</span><span>u</span
                          ><span>i</span><span>t</span><span>e</span>
                          <span>P</span><span>r</span><span>o</span
                          ><span>d</span><span>u</span><span>c</span
                          ><span>t</span><span>s</span>
                        </font>
                      </h2>
                    </div>
                    <div class="sale2_desc">
                      <p>
                        Morbi eget congue lectus. Donec eleifend ultricies urna
                        et euismod. Sed consectetur tellus eget odio aliquet,
                        vel vestibulum tellus sollicitudin. Morbi maximus metus
                        eu eros tincidunt.
                      </p>
                    </div>
                    <div class="countdown_box2 py-2">
                      <ul
                        class="countdown_timer2 ul_li"
                        data-countdown="2022/12/24"
                      ></ul>
                    </div>
                    <div class="sale2_btn load_more_1">
                      <a href="#!"
                        ><button
                          type="button"
                          class="btn custom_btn rounded-pill px-5 py-3 text-white"
                        >
                          Explore More
                          <i class="fas fa-long-arrow-alt-right"></i></button
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- sale2 section end -->

        <!-- product section start -->
        <section
          class="product_section sec_space_xxs_50"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="product_sec_content">
                  <div
                    class="product_sec_sub_title d-flex align-items-center pb-2"
                  >
                    <i class="far fa-circle"></i>
                    <i class="far fa-circle"></i>
                    <i class="far fa-circle"></i>
                    <span class="ps-2">FRESH FROM OUR FARM</span>
                  </div>
                  <h2 class="product_sec_title pb-3">Our Products</h2>
                </div>
              </div>
              <div class="col-lg-6">
                <ul
                  class="product_tabnav_1 nav nav-pills ul_li_right mb-3"
                  id="pills-tab"
                  role="tablist"
                >
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link rounded-pill me-1 active"
                      id="pills-all-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-all"
                      type="button"
                      role="tab"
                      aria-controls="pills-all"
                      aria-selected="true"
                    >
                      All
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link rounded-pill me-1"
                      id="pills-vegetables-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-vegetables"
                      type="button"
                      role="tab"
                      aria-controls="pills-vegetables"
                      aria-selected="false"
                    >
                      Vegetables
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link rounded-pill me-1"
                      id="pills-fruits-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-fruits"
                      type="button"
                      role="tab"
                      aria-controls="pills-fruits"
                      aria-selected="false"
                    >
                      Fruits
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link rounded-pill me-1"
                      id="pills-bread-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-bread"
                      type="button"
                      role="tab"
                      aria-controls="pills-bread"
                      aria-selected="false"
                    >
                      Bread
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link rounded-pill me-1"
                      id="pills-meat-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-meat"
                      type="button"
                      role="tab"
                      aria-controls="pills-meat"
                      aria-selected="false"
                    >
                      Meat
                    </button>
                  </li>
                </ul>
              </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="pills-all"
                role="tabpanel"
                aria-labelledby="pills-all-tab"
              >
                <div class="row g-4">
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product1.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product2.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product2.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product3.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product3.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product4.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product4.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product10.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product11.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="tab-pane fade"
                id="pills-vegetables"
                role="tabpanel"
                aria-labelledby="pills-vegetables-tab"
              >
                <div class="row g-4">
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product1.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product2.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product2.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product3.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product3.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product4.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product4.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product9.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-fruits"
                role="tabpanel"
                aria-labelledby="pills-fruits-tab"
              >
                <div class="row g-4">
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product3.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product9.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product10.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product9.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product11.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product10.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-bread"
                role="tabpanel"
                aria-labelledby="pills-bread-tab"
              >
                <div class="row g-4">
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product3.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product9.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product10.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product9.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product11.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product10.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-meat"
                role="tabpanel"
                aria-labelledby="pills-meat-tab"
              >
                <div class="row g-4">
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product3.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product9.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product7.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product10.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product9.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product5.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product11.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product8.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-xl-3">
                    <div
                      class="product_layout_1 overflow-hidden position-relative"
                    >
                      <div
                        class="product_layout_content bg-white position-relative"
                      >
                        <div class="product_image_wrap">
                          <a
                            class="product_image d-flex justify-content-center align-items-center"
                            href="#!"
                            target="_blank"
                          >
                            <img
                              class="pic-1"
                              src="{{asset('public/assets/images/product/product6.png')}}"
                              alt="image_not_found"
                            />
                            <img
                              class="pic-2"
                              src="{{asset('public/assets/images/product/product10.png')}}"
                              alt="image_not_found"
                            />
                          </a>
                          <ul class="product_badge_group ul_li_block">
                            <li>
                              <span
                                class="product_badge badge_meats position-absolute rounded-pill text-uppercase"
                                >Meats</span
                              >
                            </li>
                            <li>
                              <span
                                class="product_badge badge_discount position-absolute rounded-pill"
                                >-27%</span
                              >
                            </li>
                          </ul>
                          <ul class="product_action_btns ul_li_block d-flex">
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Search Product"
                                href="#!"
                                ><i class="fas fa-search"></i
                              ></a>
                            </li>
                            <li>
                              <a
                                class="tooltips"
                                data-placement="top"
                                title="Add To Cart"
                                href="#product_quick_view"
                                data-bs-toggle="modal"
                                ><i class="fas fa-shopping-bag"></i
                              ></a>
                            </li>
                          </ul>
                        </div>
                        <div class="rating_wrap d-flex">
                          <ul class="rating_star ul_li">
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li class="active"><i class="fas fa-star"></i></li>
                            <li><i class="far fa-star"></i></li>
                          </ul>
                          <span class="shop_review_text">( 4.0 )</span>
                        </div>
                        <div class="product_content">
                          <h3 class="product_title">
                            <a href="#!" target="_blank">Organic Cabbage</a>
                          </h3>
                          <div class="product_price">
                            <span class="sale_price pe-1">$50.00</span>
                            <del>$65.00</del>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- product section start -->
        <!-- testimonial section start -->
        <section
          class="testimonial_section sec_space_xxs_50"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div class="testimonial_sec_content">
            <div class="container">
              <div
                class="product_sec_sub_title d-flex justify-content-center align-items-center pb-2"
              >
                <i class="far fa-circle"></i>
                <i class="far fa-circle"></i>
                <i class="far fa-circle"></i>
                <span class="text-uppercase px-2">testimonials</span>
                <i class="far fa-circle"></i>
                <i class="far fa-circle"></i>
                <i class="far fa-circle"></i>
              </div>
              <h2 class="testimonial2_title text-center pb-4">
                What People Think About
              </h2>
              <div class="row">
                <div class="col">
                  <div
                    class="slider_item_content slideshow3_slider"
                    data-slick='{"dots": false}'
                  >
                    <div class="slider_item">
                      <div
                        class="testimonial_layout_1 d-flex justify-content-center align-items-center"
                      >
                        <div class="testimonial_author2 position-relative me-5">
                          <img
                            src="{{asset('public/assets/images/testimonials/testimonial3.png')}}"
                            alt="image_not_found"
                          />
                          <div class="testimonial_back_img1 position-absolute">
                            <img
                              src="{{asset('public/assets/images/shapes/shape32.png')}}"
                              alt="image_not_found"
                            />
                          </div>
                          <div class="testimonial_back_img2 position-absolute">
                            <img
                              src="{{asset('public/assets/images/shapes/shape24.png')}}"
                              alt="image_not_found"
                            />
                          </div>
                        </div>
                        <div class="testimonial_text">
                          <span class="testimonial_qoute"
                            ><i class="fas fa-quote-left"></i
                          ></span>
                          <div class="testimonial_comment py-3">
                            <p>
                              This is due to their excellent service,
                              competitive pricing and customer support. It’s
                              throughly refresing to get such a personal touch.
                            </p>
                          </div>
                          <div class="testimonial_author_title">
                            <h6>Shirley Smith <font> - Director</font></h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slider_item">
                      <div
                        class="testimonial_layout_1 d-flex justify-content-center align-items-center"
                      >
                        <div class="testimonial_author2 position-relative me-5">
                          <img
                            src="{{asset('public/assets/images/testimonials/testimonial3.png')}}"
                            alt="image_not_found"
                          />
                          <div class="testimonial_back_img1 position-absolute">
                            <img
                              src="{{asset('public/assets/images/shapes/shape32.png')}}"
                              alt="image_not_found"
                            />
                          </div>
                          <div class="testimonial_back_img2 position-absolute">
                            <img
                              src="{{asset('public/assets/images/shapes/shape24.png')}}"
                              alt="image_not_found"
                            />
                          </div>
                        </div>
                        <div class="testimonial_text">
                          <span class="testimonial_qoute"
                            ><i class="fas fa-quote-left"></i
                          ></span>
                          <div class="testimonial_comment py-3">
                            <p>
                              This is due to their excellent service,
                              competitive pricing and customer support. It’s
                              throughly refresing to get such a personal touch.
                            </p>
                          </div>
                          <div class="testimonial_author_title">
                            <h6>Shirley Smith <font> - Director</font></h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- testimonial section end -->
        <!-- brand section start -->
        <section
          class="brand_section sec_bottom_space_50 pb-0 pt-5"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div class="container">
            <div class="brand_thumb text-center">
              <img
                src="{{asset('public/assets/images/brands/brand1.png')}}"
                alt="image_not_found"
              />
            </div>
          </div>
        </section>
        <!-- brand section end -->
        <!-- service section start -->
        <section
          class="service_setion sec_space_xs_70 pb-0"
          data-aos="fade-up"
          data-aos-duration="2000"
        >
          <div
            class="service_content_wrap service_content_3 sec_space_xs_70"
            style="background-image: url(public/assets/images/backgrounds/bg19.png)"
          >
            <div class="container">
              <div
                class="service_inner_wrap d-flex justify-content-between align-items-center"
              >
                <div
                  class="service_inner_content"
                  data-aos="fade-up"
                  data-aos-duration="500"
                >
                  <div
                    class="service_inner_content3 bg-white d-flex flex-column align-items-center justify-content-center"
                  >
                    <div class="service_icon2 mb-2">
                      <img
                        src="{{asset('public/assets/images/services/service10.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="service_content py-1 text-center">
                      <h6>Free Delivery</h6>
                      <span>from $50</span>
                    </div>
                  </div>
                </div>
                <div
                  class="service_inner_content"
                  data-aos="fade-up"
                  data-aos-duration="1000"
                >
                  <div
                    class="service_inner_content3 bg-white d-flex flex-column align-items-center justify-content-center"
                  >
                    <div class="service_icon2 mb-2">
                      <img
                        src="{{asset('public/assets/images/services/service11.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="service_content py-1 text-center">
                      <h6>99 % Customer</h6>
                      <span>Feedbacks</span>
                    </div>
                  </div>
                </div>
                <div
                  class="service_inner_content"
                  data-aos="fade-up"
                  data-aos-duration="1500"
                >
                  <div
                    class="service_inner_content3 bg-white d-flex flex-column align-items-center justify-content-center"
                  >
                    <div class="service_icon2 mb-2">
                      <img
                        src="{{asset('public/assets/images/services/service12.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="service_content py-1 text-center">
                      <h6>365 Days</h6>
                      <span>for free return</span>
                    </div>
                  </div>
                </div>
                <div
                  class="service_inner_content"
                  data-aos="fade-up"
                  data-aos-duration="2000"
                >
                  <div
                    class="service_inner_content3 bg-white d-flex flex-column align-items-center justify-content-center"
                  >
                    <div class="service_icon2 mb-2">
                      <img
                        src="{{asset('public/assets/images/services/service13.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="service_content py-1 text-center">
                      <h6>Payment</h6>
                      <span>Secure System</span>
                    </div>
                  </div>
                </div>
                <div
                  class="service_inner_content"
                  data-aos="fade-up"
                  data-aos-duration="2500"
                >
                  <div
                    class="service_inner_content3 bg-white d-flex flex-column align-items-center justify-content-center"
                  >
                    <div class="service_icon2 mb-2">
                      <img
                        src="{{asset('public/assets/images/services/service14.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="service_content py-1 text-center">
                      <h6>Only Best</h6>
                      <span>Brands</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- service section end -->
      </main>
      <!-- main body end -->
@include('includes.footer')