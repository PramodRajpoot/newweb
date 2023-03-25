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
                      <h5>Organic Cabbage</h5>
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
                      <h5>Organic Cabbage</h5>
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
                      <h5>Organic Cabbage</h5>
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

    <!-- Breadcrumb section start -->
    <section class="breadcrumb_sec_1 position-relative">
      <div
        class="breadcrumb_wrap sec_space_mid_small"
        style="
          background-image: url(assets/images/breadcrumb/breadcrumb1.png);
        "
      >
        <div class="breadcrumb_cont text-center">
          <div class="breadcrumb_title">
            <h2 class="text-white">About us</h2>
          </div>
          <ul
            class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white"
          >
            <li>
              <a href="index.html"
                ><i class="fas fa-home active"></i>Home</a
              >
            </li>
            <li><i class="fas fa-chevron-right"></i>About</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- product section-2 start -->
    <section
      class="product_section_2 sec_space_small"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <div class="product_section_2_wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div
                class="product_gallery d-flex justify-content-center align-items-center"
              >
                <img
                  src="{{asset('public/assets/images/sales/sale9.png')}}"
                  alt="image_not_found"
                />
              </div>
            </div>
            <div class="col-lg-6">
              <div class="product_section_content">
                <div
                  class="product_sec_sub_title d-flex align-items-center pb-2"
                >
                  <i class="far fa-circle"></i>
                  <i class="far fa-circle"></i>
                  <i class="far fa-circle"></i>
                  <span class="ps-1 text-uppercase organi"
                    >welcome to organi</span
                  >
                </div>
                <div class="product_section_title py-2">
                  <h2>Unbelievable Super Fast Broadband</h2>
                </div>
                <div class="product_section_desc product_about_desc">
                  <p>
                    We are a strong community of 100,000+ customers and 600+
                    sellers who aspire to be good, do good, and spread
                    goodness. We are a democratic, self-sustaining,
                    two-sided marketplace which thrives on trust and is
                    built on community and quality content.
                  </p>
                </div>
                <div class="product_services_cont d-flex flex-column my-5">
                  <span>Superfast and ultra-reliable.</span>
                  <span>Browse and download around the clock.</span>
                  <span>Our fastest ever router.</span>
                </div>
                <div class="product_section_btn">
                  <a href="#"
                    ><button
                      type="button"
                      class="btn custom_btn load_more_1 rounded-pill px-5 py-3 text-white"
                    >
                      Subscribe
                      <i class="fas fa-long-arrow-alt-right"></i></button
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- product section-2 end -->

    <!-- product-9 section start -->
    <section
      class="product9_sec mb_50 position-relative"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <div
        class="product9_sec_wrap sec_space_large"
        style="background-image: url(assets/images/backgrounds/bg13.png)"
      >
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div
                class="row gx-5 justify-content-center align-items-center"
              >
                <div class="col-lg-6">
                  <div
                    class="product9_gallery img_moving_anim1 overflow-hidden shadow-lg"
                  >
                    <img
                      src="{{asset('public/assets/images/product/product31.png"
                      alt="image_not_found"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="product9_sec_cont">
                    <div
                      class="product_sec_sub_title d-flex align-items-center pb-2"
                    >
                      <i class="far fa-circle"></i>
                      <i class="far fa-circle"></i>
                      <i class="far fa-circle"></i>
                      <span class="ps-1 text-uppercase organi"
                        >welcome to organi</span
                      >
                    </div>
                    <div class="product9_section_title text-effect py-2">
                      <h2>
                        Commited to Giving you
                        <font
                          ><span>T</span><span>r</span><span>u</span
                          ><span>e</span> <span>V</span><span>a</span
                          ><span>l</span><span>u</span><span>e.</span></font
                        >
                      </h2>
                    </div>
                    <div class="product9_section_desc">
                      <p>
                        We are a strong community of 100,000+ customers and
                        600+ sellers who aspire to be good, do good, and
                        spread goodness.
                      </p>
                    </div>
                    <div class="product9_inner_cont">
                      <div
                        class="inner_item bg-white position-relative shadow-sm"
                      >
                        <span
                          class="item_num d-flex justify-content-center align-items-center rounded-pill text-white position-absolute"
                          >01</span
                        >
                        <h6 class="item_title">
                          Treating you with respect and courtesy
                        </h6>
                        <span class="item_subtitle text-uppercase"
                          >hight quality organic
                          <i class="fas fa-long-arrow-alt-right"></i
                        ></span>
                      </div>
                      <div
                        class="inner_item bg-white position-relative shadow-sm"
                      >
                        <span
                          class="item_num d-flex justify-content-center align-items-center rounded-pill text-white position-absolute"
                          >02</span
                        >
                        <h6 class="item_title">
                          Explaining the coverages and options
                        </h6>
                        <span class="item_subtitle text-uppercase"
                          >100% Natural
                          <i class="fas fa-long-arrow-alt-right"></i
                        ></span>
                      </div>
                      <div
                        class="inner_item bg-white position-relative shadow-sm"
                      >
                        <span
                          class="item_num d-flex justify-content-center align-items-center rounded-pill text-white position-absolute"
                          >03</span
                        >
                        <h6 class="item_title">
                          Helping you solve problems
                        </h6>
                        <span class="item_subtitle text-uppercase"
                          >Curated Products
                          <i class="fas fa-long-arrow-alt-right"></i
                        ></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <img
        class="product9_right_thumb position-absolute"
        src="{{asset('public/assets/images/product/product32.png')}}"
        alt="image_not_found"
      />
    </section>
    <!-- product-9 section end -->

    <!-- facts section start -->
    <section
      class="fact_section"
      data-aos="fade-up"
      data-aos-duration="2000"
    >
      <div class="fact_section_wrap">
        <div class="container-sm">
          <div class="facts_cont_wrap d-flex justify-content-between">
            <div
              class="fact_content d-flex flex-column"
              data-aos="fade-up"
              data-aos-duration="500"
            >
              <span class="fact_number">2347</span>
              <span class="fact_title text-uppercase"
                >business insured</span
              >
            </div>
            <div
              class="fact_content d-flex flex-column"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <span class="fact_number">1473</span>
              <span class="fact_title text-uppercase">People Saved</span>
            </div>
            <div
              class="fact_content d-flex flex-column"
              data-aos="fade-up"
              data-aos-duration="1500"
            >
              <span class="fact_number">7450</span>
              <span class="fact_title text-uppercase">Active clinets</span>
            </div>
            <div
              class="fact_content d-flex flex-column"
              data-aos="fade-up"
              data-aos-duration="2000"
            >
              <span class="fact_number">3240</span>
              <span class="fact_title text-uppercase">happy clients</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- facts section end -->
  </main>
  <!-- main body end -->
@include('includes.footer')