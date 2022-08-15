            <!--====== Primary Slider ======-->
            <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-1" id="hero-slider">
                    <div class="hero-slide hero-slide--1">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <h2 class="content-span-1 u-c-secondary">THE DALTON GROUP</h2>

        

                                        <span class="content-span-3 u-c-secondary">
																							Lorem ipsum dolor sit amet,
																							consectetur adipiscing elit,
																							sed do eiusmod tempor
																							incididunt ut labore et
																							dolore magna aliqua. Quis
																							ipsum suspendisse ultrices
																							gravida. Risus commodo
																							viverra maecenas accumsan
																							lacus vel facilisis. </span>


                                        <a class="shop-now-link btn--e-brand" href="">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                    <h2 class="content-span-1 u-c-secondary">THE DALTON GROUP</h2>

        

                                    <span class="content-span-3 u-c-secondary"> 
                                                    Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit,
                                                    sed do eiusmod tempor
                                                    incididunt ut labore et
                                                    dolore magna aliqua. Quis
                                                    ipsum suspendisse ultrices
                                                    gravida. Risus commodo
                                                    viverra maecenas accumsan
                                                    lacus vel facilisis. </span>

                                        <a class="shop-now-link btn--e-brand" href="">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                    <h2 class="content-span-1 u-c-secondary">THE DALTON GROUP</h2>

        

                                        <span class="content-span-3 u-c-secondary">
                                                    Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit,
                                                    sed do eiusmod tempor
                                                    incididunt ut labore et
                                                    dolore magna aliqua. Quis
                                                    ipsum suspendisse ultrices
                                                    gravida. Risus commodo
                                                    viverra maecenas accumsan
                                                    lacus vel facilisis. </span>

                                        <a class="shop-now-link btn--e-brand" href="">SHOP NOW</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Primary Slider ======-->


            <!--====== Section 1 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">OUR PRODUCTS</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="product-o product-o--hover-on u-h-100">
                                    <div class="product-o__wrap">

                                        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="">

                                            <img class="aspect__img" src="{{URL::asset('images/gloves.png')}}" alt=""></a>
                                        <div class="product-o__action-wrap">
                                            <ul class="product-o__action-list">
                                                <li>

                                                    <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a></li>
                                               </ul>
                                        </div>
                                    </div>

                                    <span class="product-o__category">

                                        <a href="">{{$product->location->name}}</a></span>

                                    <span class="product-o__name">

                                        <a href="">{{$product->title}}</a></span>

                                    <span class="product-o__price">${{$product->amount}}

                                        </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->

                            <!--====== Section 9 ======-->
            <div class="u-s-p-b-60">

<!--====== Section Content ======-->
<div class="section__content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                <div class="service u-h-100">
                    <div class="service__icon"><i class="fas fa-truck"></i></div>
                    <div class="service__info-wrap">

                        <span class="service__info-text-1">Free Shipping</span>

                        <span class="service__info-text-2">Free shipping on all US order or order above $200</span></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                <div class="service u-h-100">
                    <div class="service__icon"><i class="fas fa-redo"></i></div>
                    <div class="service__info-wrap">

                        <span class="service__info-text-1">Shop with Confidence</span>

                        <span class="service__info-text-2">Our Protection covers your purchase from click to delivery</span></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                <div class="service u-h-100">
                    <div class="service__icon"><i class="fas fa-headphones-alt"></i></div>
                    <div class="service__info-wrap">

                        <span class="service__info-text-1">24/7 Help Center</span>

                        <span class="service__info-text-2">Round-the-clock assistance for a smooth shopping experience</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section Content ======-->
</div>
<!--====== End - Section 9 ======-->


<div class="section__content home-about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
            <img width="550" height="556" align="left"
            src="https://i0.wp.com/daltongroupsupply.wpcomstaging.com/wp-content/uploads/2022/04/bg.png?fit=550%2C556&amp;ssl=1" 
            >
            </div>
   
            <div class="col-lg-6 home-about-text">
                <h2 class="title">ABOUT DALTON GROUP</h2>
                <hr />
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            </div>
        </div>
    </div>
</div>

            <!--====== Section 10 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">LATEST FROM BLOG</h1>

                                    <span class="section__span u-c-silver">START YOU DAY WITH FRESH AND LATEST NEWS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="bp-mini bp-mini--img u-h-100">
                                    <div class="bp-mini__thumbnail">

                                        <!--====== Image Code ======-->

                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="">

                                            <img class="aspect__img" src="{{URL::asset('images/medical-facility.webp')}}" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <span class="bp-mini__h1">

                                            <a href="#">MEDICAL FACILITYX</a></span>
                                        <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <div class="blog-t-w">

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="bp-mini bp-mini--img u-h-100">
                                    <div class="bp-mini__thumbnail">

                                        <!--====== Image Code ======-->

                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="">

                                            <img class="aspect__img" src="{{URL::asset('images/hotel.webp')}}" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <span class="bp-mini__h1">

                                            <a href="#">HOTEL</a></span>
                                        <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <div class="blog-t-w">

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="bp-mini bp-mini--img u-h-100">
                                    <div class="bp-mini__thumbnail">

                                        <!--====== Image Code ======-->

                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="">

                                            <img class="aspect__img" src="{{URL::asset('images/construction.webp')}}" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp-mini__content">
                                        <span class="bp-mini__h1">

                                            <a href="#">CONSTRUCTION</a></span>
                                        <p class="bp-mini__p">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <div class="blog-t-w">

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Travel</a>

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Culture</a>

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2">Place</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 10 ======-->