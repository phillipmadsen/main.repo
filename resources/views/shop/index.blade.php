@extends('layouts.canvas')
@section('htmlschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')@endsection
@section('goodrelations')@endsection
@section('ppstyle')@endsection
@section('scripts')@endsection
@section('pp_header_scripts')@endsection
@section('bodytag')@endsection
@section('bodyschema')@endsection

@section('submenu')
submenu here
@endsection

@section('slidert')

        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

            <div class="slider-parallax-inner">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark" style="background-image: url('{!! asset('/frontend/images/slider/swiper/1.jpg') !!}');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">Welcome to Canvas</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide dark">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 data-caption-animate="fadeInUp">Beautifully Flexible</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                                </div>
                            </div>
                            <div class="video-wrap">
                                <video poster="{!! asset('/frontend/images/videos/explore.jpg') !!}" preload="auto" loop autoplay muted>
                                    <source src='{!! asset('/frontend/images/videos/explore.mp4') !!}' type='video/mp4' />
                                    <source src='{!! asset('/frontend/images/videos/explore.webm') !!}' type='video/webm' />
                                </video>
                                <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                            </div>
                        </div>
                        <div class="swiper-slide" style="background-image: url('{!! asset('/frontend/images/slider/swiper/3.jpg') !!}'); background-position: center top;">
                            <div class="container clearfix">
                                <div class="slider-caption">
                                    <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                                    <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                    <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
                    <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
                </div>

            </div>

        </section>

@endsection

@section('intro')@endsection

@section('page-title')
DRIVING ME BONKERS
@endsection

@section('pt-small')@endsection

@section('sidebar')@endsection

@section('widgets')@endsection

@section('content')
        <section id="content">

            <div class="content-wrap">

                <a class="button button-full button-purple center tright header-stick bottommargin-lg">
                    <div class="container clearfix">
                        Canvas comes with Unlimited Customizations &amp; Options. <strong>Check Out</strong> <i class="icon-caret-right" style="top:4px;"></i>
                    </div>
                </a>

                <div class="container clearfix">

                    <div class="heading-block center nobottomborder bottommargin-lg">
                        <h1>New York based Creative Agency</h1>
                        <span>Specializes in creating Brand Identity for emerging Startups</span>
                    </div>

                    <div class="col_one_third nobottommargin">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Why choose <span>Us</span>.</h4>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

                    </div>

                    <div class="col_one_third nobottommargin">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>Our <span>Mission</span>.</h4>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

                    </div>

                    <div class="col_one_third nobottommargin col_last">

                        <div class="heading-block fancy-title nobottomborder title-bottom-border">
                            <h4>What we <span>Do</span>.</h4>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

                    </div>

                    <div class="clear"></div>

                </div>

                <div class="section nobottommargin">

                    <div class="container clearfix">

                        <!-- Portfolio Filter
                        ============================================= -->
                        <ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

                            <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                            <li><a href="#" data-filter=".pf-icons">Icons</a></li>
                            <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                            <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                            <li><a href="#" data-filter=".pf-media">Media</a></li>
                            <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

                        </ul><!-- #portfolio-filter end -->

                        <div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
                            <i class="icon-random"></i>
                        </div>

                        <div class="clear"></div>

                        <!-- Portfolio Items
                        ============================================= -->
                        <div id="portfolio" class="portfolio grid-container portfolio-nomargin clearfix">

                            <article class="portfolio-item pf-media pf-icons">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{!! asset('/frontend/images/portfolio/4/1.jpg') !!}" alt="Open Imagination">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{!! asset('/frontend/images/portfolio/full/1.jpg') !!}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-illustrations">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{!! asset('/frontend/images/portfolio/4/2.jpg') !!}" alt="Locked Steel Gate">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{!! asset('/frontend/images/portfolio/full/2.jpg') !!}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
                                    <span><a href="#">Illustrations</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics pf-uielements">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{!! asset('/frontend/images/portfolio/4/3.jpg') !!}" alt="Mac Sunglasses">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-icons pf-illustrations">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img src="{!! asset('/frontend/images/portfolio/4/4.jpg') !!}" alt="Morning Dew"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img src="{!! asset('/frontend/images/portfolio/4/4-1.jpg') !!}" alt="Morning Dew"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="{!! asset('/frontend/images/portfolio/full/4.jpg') !!}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="{!! asset('/frontend/images/portfolio/full/4-1.jpg') !!}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                                    <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-uielements pf-media">
                                <div class="portfolio-image">
                                    <a href="portfolio-single.html">
                                        <img src="{!! asset('/frontend/images/portfolio/4/5.jpg') !!}" alt="Console Activity">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{!! asset('/frontend/images/portfolio/full/5.jpg') !!}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Console Activity</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics pf-illustrations">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img src="{!! asset('/frontend/images/portfolio/4/6.jpg') !!}" alt="Shake It"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img src="{!! asset('/frontend/images/portfolio/4/6-1.jpg') !!}" alt="Shake It"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img src="{!! asset('/frontend/images/portfolio/4/6-2.jpg') !!}" alt="Shake It"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html"><img src="{!! asset('/frontend/images/portfolio/4/6-3.jpg') !!}" alt="Shake It"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="{!! asset('/frontend/images/portfolio/full/6.jpg') !!}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="{!! asset('/frontend/images/portfolio/full/6-1.jpg') !!}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="{!! asset('/frontend/images/portfolio/full/6-2.jpg') !!}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="{!! asset('/frontend/images/portfolio/full/6-3.jpg') !!}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-uielements pf-icons">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="{!! asset('/frontend/images/portfolio/4/7.jpg') !!}" alt="Backpack Contents">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="http://www.youtube.com/watch?v=kuceVNBTJio" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href=" " class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href=" ">Backpack Contents</a></h3>
                                    <span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics">
                                <div class="portfolio-image">
                                    <a href="">
                                        <img src="{!! asset('/frontend/images/portfolio/4/8.jpg') !!}" alt="Sunset Bulb Glow">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{!! asset('/frontend/images/portfolio/full/8.jpg') !!}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="#">Sunset Bulb Glow</a></h3>
                                    <span><a href="#">Graphics</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-illustrations pf-icons">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="650" data-pause="3500" data-animation="fade">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html">
                                                <img src="{!! asset('/frontend/images/portfolio/4/9.jpg') !!}" alt="Bridge Side"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html">
                                                <img src="{!! asset('/frontend/images/portfolio/4/9-1.jpg') !!}" alt="Bridge Side"></a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html">
                                                <img src="{!! asset('/frontend/images/portfolio/4/9-2.jpg') !!}" alt="Bridge Side"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="{!! asset('/frontend/images/portfolio/full/9.jpg') !!}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="{!! asset('/frontend/images/portfolio/full/9-1.jpg') !!}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="{!! asset('/frontend/images/portfolio/full/9-2.jpg') !!}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Bridge Side</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-graphics pf-media pf-uielements">
                                <div class="portfolio-image">
                                    <a href="portfolio-single-video.html">
                                        <img src="{!! asset('/frontend/images/portfolio/4/10.jpg') !!}" alt="Study Table">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="http://vimeo.com/91973305" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                        <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-video.html">Study Table</a></h3>
                                    <span><a href="#">Graphics</a>, <a href="#">Media</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-media pf-icons">
                                <div class="portfolio-image">
                                    <a href="#">
                                        <img src="{!! asset('/frontend/images/portfolio/4/11.jpg') !!}" alt="Workspace Stuff">
                                    </a>
                                    <div class="portfolio-overlay">
                                        <a href="{!! asset('/frontend/images/portfolio/full/11.jpg') !!}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                        <a href="#" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single.html">Workspace Stuff</a></h3>
                                    <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                </div>
                            </article>

                            <article class="portfolio-item pf-illustrations pf-graphics">
                                <div class="portfolio-image">
                                    <div class="fslider" data-arrows="false" data-speed="700" data-pause="7000">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a href="portfolio-single-gallery.html">
                                                    <img src="{!! asset('/frontend/images/portfolio/4/12.jpg') !!}" alt="Fixed Aperture">
                                                </a></div>
                                                <div class="slide"><a href="portfolio-single-gallery.html">
                                                    <img src="{!! asset('/frontend/images/portfolio/4/12-1.jpg') !!}" alt="Fixed Aperture">
                                                </a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portfolio-overlay" data-lightbox="gallery">
                                        <a href="{!! asset('/frontend/images/portfolio/full/12.jpg') !!}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                                        <a href="{!! asset('/frontend/images/portfolio/full/12-1.jpg') !!}" class="hidden" data-lightbox="gallery-item"></a>
                                        <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                </div>
                                <div class="portfolio-desc">
                                    <h3><a href="portfolio-single-gallery.html">Fixed Aperture</a></h3>
                                    <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                                </div>
                            </article>

                        </div><!-- #portfolio end -->


                    </div>

                </div>

                <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget" data-margin="30" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false"data-items-xxs="3" data-items-xs="4" data-items-sm="5" data-items-md="6" data-items-lg="7" style="padding: 30px 0;">

                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/1.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/2.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/3.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/4.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/5.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/6.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/7.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/8.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/9.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/10.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/11.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/12.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/13.png') !!}" alt="Clients"></a></div>
                    <div class="oc-item"><a href="#"><img src="{!! asset('/frontend/images/clients/14.png') !!}" alt="Clients"></a></div>

                </div>


            </div>

        </section><!-- #content end -->
@endsection

@section('after-content')@endsection
@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection
@section('ppinline')@endsection