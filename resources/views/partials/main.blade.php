<main class="main">
    <style>
        .image-container {
            width: 100%;
            height: 200px;
            /* Đặt chiều cao cố định cho khung chứa */
            overflow: hidden;
            /* Đảm bảo không có phần thừa nào bị hiển thị */
        }

        .equal-height-image {
            height: 200px;
            /* Đặt chiều cao cố định cho tất cả các ảnh */
            width: 100%;
            /* Đảm bảo ảnh chiếm toàn bộ chiều rộng của khung chứa */
            object-fit: cover;
            /* Đảm bảo ảnh phủ kín khung mà không bị méo */
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
            data-owl-options='{
                        "dots": true,
                        "nav": false,
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
            <div class="intro-slide"
                style="background-image: url({{$setting->banner1}});">
            </div><!-- End .intro-slide -->

            <div class="intro-slide"
                style="background-image: url({{$setting->banner2}});">

            </div><!-- End .intro-slide -->

            <div class="intro-slide"
                style="background-image: url({{$setting->banner3}});">

            </div><!-- End .intro-slide -->
        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->



    <div class="container">
        <h2 class="title text-center mb-4"></h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ route('search') }}?category={{ $category->category_id }}" class="cat-block">
                        <figure>
                            <span>
                                <img style=" width: 111px;height: 64px;object-fit: cover;" src="{{ asset($category->image_category ?: '') }}" alt="Category image">
                            </span>
                        </figure>
                        <h3 class="cat-block-title">{{ $category->name_category }}</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 -->
                @endforeach
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->
    <div class="mb-4"></div><!-- End .mb-4 -->



    <div class="mb-3"></div><!-- End .mb-5 -->

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">New Arrivals</h2><!-- End .title -->
            </div><!-- End .heading-left -->


        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="new-all-tab" role="tabpanel" aria-labelledby="new-all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    @foreach ($data as $item)

                        <div class="product product-2">
                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="{{ route('salenew.detail' ,$item->sale_new_id) }}" class="image-container">
                                    @if ($item->images->isNotEmpty())
                                        <img src="{{ $item->images->first()->image_name }}" alt="Image"
                                            class="equal-height-image">
                                    @endif
                                </a>




                            <div class="product-action-vertical">

                                <!-- Thêm data-product-id để lưu id sản phẩm -->
                                <form action="{{ route('addToWishlist') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="sale_new_id" value="{{ $item->sale_new_id }}">
                                    <button type="submit"
                                        class=" btn-product-icon btn-wishlist color-danger add-to-wishlist-btn"
                                        title="Add to WishList  "></button>

                                </form>

                            </div>
                        </figure>
                        <!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{ $item->sub_category->name_sub_category }}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a
                                    href="{{ route('salenew.detail' ,$item->sale_new_id) }}">{{ Str::limit($item->title, 35, '...') }} </a></h3>
                            <div class="product-price">
                                ${{ $item->price }}
                            </div>
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    @endforeach


                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-tv-tab" role="tabpanel" aria-labelledby="new-tv-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Apple - 11 Inch iPad Pro with Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" class="active" style="background: #333333;"><span
                                        class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-2.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundLink Bluetooth
                                    Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-4.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Google - Pixel 3 XL 128GB</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$35.41</span>
                                <span class="old-price">Was $41.67</span>
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span
                                        class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-5.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">TV & Home Theater</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Samsung - 55" Class LED 2160p
                                    Smart</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-computers-tab" role="tabpanel"
                aria-labelledby="new-computers-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-5.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">TV & Home Theater</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Samsung - 55" Class LED 2160p
                                    Smart</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Apple - 11 Inch iPad Pro with Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" class="active" style="background: #333333;"><span
                                        class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-2.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundLink Bluetooth
                                    Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-4.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Google - Pixel 3 XL 128GB</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$35.41</span>
                                <span class="old-price">Was $41.67</span>
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span
                                        class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-phones-tab" role="tabpanel" aria-labelledby="new-phones-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-2.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundLink Bluetooth
                                    Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                    class="product-image">
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Apple - 11 Inch iPad Pro with Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" class="active" style="background: #333333;"><span
                                        class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-5.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">TV & Home Theater</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Samsung - 55" Class LED 2160p
                                    Smart</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-4.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Google - Pixel 3 XL 128GB</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$35.41</span>
                                <span class="old-price">Was $41.67</span>
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span
                                        class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-watches-tab" role="tabpanel" aria-labelledby="new-watches-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-4.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cell Phone</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Google - Pixel 3 XL 128GB</a></h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$35.41</span>
                                <span class="old-price">Was $41.67</span>
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #edd2c8;"><span
                                        class="sr-only">Color name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-2.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundLink Bluetooth
                                    Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Apple - 11 Inch iPad Pro with Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" class="active" style="background: #333333;"><span
                                        class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="new-acc-tab" role="tabpanel" aria-labelledby="new-acc-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                "nav": true,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":5
                                    }
                                }
                            }'>
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-5.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">TV & Home Theater</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Samsung - 55" Class LED 2160p
                                    Smart</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">MacBook Pro 13" Display, i5</a>
                            </h3><!-- End .product-title -->
                            <div class="product-price">
                                $1,199.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-2.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundLink Bluetooth
                                    Speaker</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $79.99
                            </div><!-- End .product-price -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Tablets</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Apple - 11 Inch iPad Pro with Wi-Fi
                                    256GB </a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $899.99
                            </div><!-- End .product-price -->


                            <div class="product-nav product-nav-dots">
                                <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" class="active" style="background: #333333;"><span
                                        class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="container">
        <div class="cta cta-border mb-5" style="background-image: url(assets/images/demos/demo-4/bg-1.jpg);">
            <img src="assets/images/demos/demo-4/camera.png" alt="camera" class="cta-img">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="cta-content">
                        <div class="cta-text text-right text-white">
                            <p>Shop Today’s Deals <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
                        </div><!-- End .cta-text -->
                        <a href="#" class="btn btn-primary btn-round"><span>Shop Now - $429.99</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div><!-- End .cta-content -->
                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .cta -->
    </div><!-- End .container -->

    <div class="container">
        <div class="heading text-center mb-3">
            <h2 class="title">Deals & Outlet</h2><!-- End .title -->
            <p class="title-desc">Today’s deal and more</p><!-- End .title-desc -->
        </div><!-- End .heading -->

        <div class="row">
            <div class="col-lg-6 deal-col">
                <div class="deal" style="background-image: url('assets/images/demos/demo-4/deal/bg-1.jpg');">
                    <div class="deal-top">
                        <h2>Deal of the Day.</h2>
                        <h4>Limited quantities. </h4>
                    </div><!-- End .deal-top -->

                    <div class="deal-content">
                        <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Home Smart Speaker with Google
                                Assistant</a></h3><!-- End .product-title -->

                        <div class="product-price">
                            <span class="new-price">$129.00</span>
                            <span class="old-price">Was $150.99</span>
                        </div><!-- End .product-price -->

                        <a href="salenew-detail/{{ $item->sale_new_id }}" class="btn btn-link"><span>Shop Now</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div><!-- End .deal-content -->

                    <div class="deal-bottom">
                        <div class="deal-countdown daily-deal-countdown" data-until="+10h"></div>
                        <!-- End .deal-countdown -->
                    </div><!-- End .deal-bottom -->
                </div><!-- End .deal -->
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6 deal-col">
                <div class="deal" style="background-image: url('assets/images/demos/demo-4/deal/bg-2.jpg');">
                    <div class="deal-top">
                        <h2>Your Exclusive Offers.</h2>
                        <h4>Sign in to see amazing deals.</h4>
                    </div><!-- End .deal-top -->

                    <div class="deal-content">
                        <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Certified Wireless Charging Pad for
                                iPhone / Android</a></h3><!-- End .product-title -->

                        <div class="product-price">
                            <span class="new-price">$29.99</span>
                        </div><!-- End .product-price -->

                        <a href="login.html" class="btn btn-link"><span>Sign In and Save money</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div><!-- End .deal-content -->

                    <div class="deal-bottom">
                        <div class="deal-countdown offer-countdown" data-until="+11d"></div>
                        <!-- End .deal-countdown -->
                    </div><!-- End .deal-bottom -->
                </div><!-- End .deal -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->

        <div class="more-container text-center mt-1 mb-5">
            <a href="#" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Outlet deals</span><i
                    class="icon-long-arrow-right"></i></a>
        </div><!-- End .more-container -->
    </div><!-- End .container -->


    <div class="bg-light pt-5 pb-6">
        <div class="container trending-products">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Trending Products</h2><!-- End .title -->
                </div><!-- End .heading-left -->

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trending-top-link" data-toggle="tab"
                                href="#trending-top-tab" role="tab" aria-controls="trending-top-tab"
                                aria-selected="true">Top Rated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab"
                                role="tab" aria-controls="trending-best-tab" aria-selected="false">Best
                                Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab"
                                role="tab" aria-controls="trending-sale-tab" aria-selected="false">On Sale</a>
                        </li>
                    </ul>
                </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="row">
                <div class="col-xl-5col d-none d-xl-block">
                    <div class="banner">
                        <a href="#">
                            <img src="assets/images/demos/demo-4/banners/banner-4.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-xl-5col -->

                <div class="col-xl-4-5col">
                    <div class="tab-content tab-content-carousel just-action-icons-sm">
                        <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel"
                            aria-labelledby="trending-top-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                data-toggle="owl"
                                data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>

                                @foreach ($topRated as $item)

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <a href="salenew-detail/{{ $item->sale_new_id }}">
                                            <img src="{{ $item->images->first()->image_name }}" alt="Image"
                                                class="equal-height-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"></a>
                                        </div><!-- End .product-action -->


                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $item->sub_category->name_sub_category }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundSport
                                                wireless headphones</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $199.99
                                        </div><!-- End .product-price -->



                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                @endforeach

                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel"
                            aria-labelledby="trending-best-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                data-toggle="owl"
                                data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                            }'>
                                @foreach ($bestSelling as $item)

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="salenew-detail/{{ $item->sale_new_id }}">
                                            <img src="{{ $item->images->first()->image_name }}" alt="Image"
                                                class="equal-height-image">
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"></a>
                                        </div><!-- End .product-action -->


                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $item->sub_category->name_sub_category }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundSport
                                                wireless headphones</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $199.99
                                        </div><!-- End .product-price -->



                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                @endforeach
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel"
                            aria-labelledby="trending-sale-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow"
                                data-toggle="owl"
                                data-owl-options='{
                                            "nav": true,
                                            "dots": false,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":2
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                }
                                            }
                                        }'>
                                @foreach ($onSale as $item)

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">Sale</span>
                                        <a href="salenew-detail/{{ $item->sale_new_id }}">
                                            <img src="{{ $item->images->first()->image_name }}" alt="Image"
                                                class="equal-height-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist"
                                                title="Add to wishlist"></a>
                                        </div><!-- End .product-action -->


                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">{{ $item->sub_category->name_sub_category }}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundSport
                                                wireless headphones</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $199.99
                                        </div><!-- End .product-price -->



                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                @endforeach
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .col-xl-4-5col -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .bg-light pt-5 pb-6 -->

    <div class="mb-5"></div><!-- End .mb-5 -->

    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Recommendation For You</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <a href="search" class="title-link">View All Recommendadion <i
                        class="icon-long-arrow-right"></i></a>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="products">
            <div class="row justify-content-center">

                @foreach ($recommendation as $item)

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            {{-- <span class="product-label label-circle label-top">Top</span> --}}
                            <a href="salenew-detail/{{ $item->sale_new_id }}">
                                <img src="{{ $item->images->first()->image_name }}" alt="Image"
                                    class="equal-height-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist"
                                    title="Add to wishlist"></a>
                            </div><!-- End .product-action -->


                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{ $item->sub_category->name_sub_category }}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="salenew-detail/{{ $item->sale_new_id }}">Bose - SoundSport
                                    wireless headphones</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                $199.99
                            </div><!-- End .product-price -->



                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                </div>

                @endforeach


            </div><!-- End .row -->
        </div><!-- End .products -->
    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->

    <div class="container">
        <hr class="mb-0">
    </div><!-- End .container -->

    <div class="icon-boxes-container bg-transparent">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                            <p>Orders $50 or more</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                            <p>Within 30 days</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                            <p>when you sign up</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                            <p>24/7 amazing services</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .icon-boxes-container -->

</main><!-- End .main -->

<!-- Trong Blade view -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script>
    var userId = "{{ Auth::check() ? Auth::user()->user_id : '' }}"; // Lấy user_id nếu người dùng đã đăng nhập

    // Lắng nghe sự kiện click vào nút thêm vào danh sách yêu thích
    $(document).on('click', '.add-to-wishlist-btn', function(e) {
        e.preventDefault(); // Ngăn hành vi gửi form mặc định của trình duyệt

        var form = $(this).closest('form'); // Lấy form chứa nút bấm
        var saleNewId = form.find('input[name="sale_new_id"]').val(); // Lấy giá trị sale_new_id từ input hidden

        // Kiểm tra nếu userId không có giá trị (người dùng chưa đăng nhập)
        if (!userId) {
            Swal.fire({
                icon: 'warning', // Hiển thị biểu tượng cảnh báo
                title: 'You need to log in to add this to your favorites!', // Thông báo yêu cầu đăng nhập
                toast: true, // Hiển thị thông báo nhỏ
                position: 'top-end', // Vị trí thông báo ở góc trên cùng bên phải
                showConfirmButton: false, // Không hiển thị nút xác nhận
                timer: 1000, // Thời gian hiển thị thông báo là 1 giây
                timerProgressBar: true // Hiển thị thanh tiến trình đếm ngược
            }).then(() => {
                // Chuyển hướng người dùng đến trang đăng nhập
                window.location.href = @json(route('login'));

            });
            return; // Kết thúc hàm, không thực hiện các bước tiếp theo
        }

        // Gửi yêu cầu AJAX để thêm sản phẩm vào danh sách yêu thích
        $.ajax({
            url: form.attr('action'), // URL lấy từ thuộc tính action của form
            type: 'POST', // Phương thức gửi yêu cầu là POST
            data: {
                _token: '{{ csrf_token() }}', // CSRF token để xác thực yêu cầu
                user_id: userId, // ID của người dùng
                sale_new_id: saleNewId // ID của sản phẩm
            },
            success: function(response) {
                // Xử lý khi server phản hồi thành công
                if (response.type === 'success') {
                    Swal.fire({
                        icon: 'success', // Hiển thị biểu tượng thành công
                        title: response.message, // Nội dung thông báo từ server
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                } else {
                    // Nếu server trả về lỗi
                    Swal.fire({
                        icon: 'error', // Hiển thị biểu tượng lỗi
                        title: response.message, // Nội dung lỗi từ server
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                }
            },
            error: function(xhr, status, error) {
                // Xử lý khi yêu cầu gặp lỗi
                var response = JSON.parse(xhr.responseText); // Phân tích lỗi trả về
                Swal.fire({
                    icon: 'error', // Hiển thị biểu tượng lỗi
                    title: response.message || 'An error occurred!', // Nội dung lỗi
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true
                });
            }
        });
    });

    // Hiển thị thông báo nếu có từ session (sau khi load trang)
    @if(session('alert'))
    Swal.fire({
        icon: "{{ session('alert')['type'] }}", // Loại thông báo (success, error, warning)
        title: "{{ session('alert')['message'] }}", // Nội dung thông báo
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true
    });
    @endif
</script>
