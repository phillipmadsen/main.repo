@extends('layouts/canvas')

@section('htmlschema')
itemscope itemtype="http://schema.org/LocalBusiness
@endsection

@section('seo')
    <meta name="description" content="Grace Frames, manufacturer of fine quality machine and hand quilting frames as well as quilting frame accessories and notions.">
    <meta name="keywords" content="The Grace Company,Machine Quilting Frames,Hand Quilting Frames, Rotary Cutters">
    <meta name="author" content="The Grace Company">
@endsection

@section('jsonschema')@endsection

@section('goodrelations')
<div xmlns="http://www.w3.org/1999/xhtml"xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"xmlns:xsd="http://www.w3.org/2001/XMLSchema#"xmlns:gr="http://purl.org/goodrelations/v1#"xmlns:foaf="http://xmlns.com/foaf/0.1/"xmlns:vcard="http://www.w3.org/2006/vcard/ns#">
  <div typeof="gr:BusinessEntity" about="#company">
    <div property="gr:legalName" content="The Grace Company"></div>
    <div property="vcard:tel" content="800 264 0644"></div>
    <div rel="vcard:adr">
      <div typeof="vcard:Address">
        <div property="vcard:country-name" content="United States"></div>
        <div property="vcard:locality" content="West Valley City"></div>
        <div property="vcard:postal-code" content="84119"></div>
        <div property="vcard:street-address" content="2225 South 3200 West"></div>
      </div>
    </div>
    <div rel="foaf:logo" resource="http://www.graceframe.com/logo.jpg"></div>
    <div rel="foaf:page" resource=""></div>
  </div>
</div>
@endsection

@section('title')
The Grace Company | Machine Quilting Frames | Hand Quilting Frames | Rotary Cutters
@endsection

@section('bodyschema')@endsection

@section('bodytag')
stretched
@endsection


@section('header_styles')@endsection
@section('scripts')@endsection

@section('pphscripts')

<script>
jQuery(document).ready(function($){
    var swiperSlider = new Swiper('.swiper-parent',{
        paginationClickable: false,
        slidesPerView: 1,
        simulateTouch: false,
        grabCursor: false,
        loop: true,
        onSwiperCreated: function(swiper){
            $('[data-caption-animate]').each(function(){
                var $toAnimateElement = $(this);
                var toAnimateDelay = $(this).attr('data-caption-delay');
                var toAnimateDelayTime = 0;
                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                if( !$toAnimateElement.hasClass('animated') ) {
                    $toAnimateElement.addClass('not-animated');
                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                    setTimeout(function() {
                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                    }, toAnimateDelayTime);
                }
            });
            SEMICOLON.slider.swiperSliderMenu();
        },
        onSlideChangeStart: function(swiper){
            $('[data-caption-animate]').each(function(){
                var $toAnimateElement = $(this);
                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
            });
            SEMICOLON.slider.swiperSliderMenu();
        },
        onSlideChangeEnd: function(swiper){
            $('#slider').find('.swiper-slide').each(function(){
                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
            });
            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                if($(this).find('video').length > 0) {
                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                }
            });
            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }

            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                var $toAnimateElement = $(this);
                var toAnimateDelay = $(this).attr('data-caption-delay');
                var toAnimateDelayTime = 0;
                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                if( !$toAnimateElement.hasClass('animated') ) {
                    $toAnimateElement.addClass('not-animated');
                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                    setTimeout(function() {
                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                    }, toAnimateDelayTime);
                }
            });
        }
    });

    $('#slider-arrow-left').on('click', function(e){
        e.preventDefault();
        swiperSlider.swipePrev();
    });

    $('#slider-arrow-right').on('click', function(e){
        e.preventDefault();
        swiperSlider.swipeNext();
    });
});
</script>

@endsection




@section('submenu')

@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_homepage->roots()])

@endsection

@section('slider')@endsection
@section('intro')@endsection
@section('page-title')@endsection
@section('sidebar')@endsection

@section('content')


{{-- @include('frontend.layout.partials.hp.hpslider')  --}}

@include('frontend.layout.partials.hp.hpcontent')

<div class="section-top-ribon" style="background-color:black; height: 31px;"></div>

@include('frontend.layout.partials.hp.parallax')

{{-- <div class="section-bottom-ribon" style="background-color:black; height: 31px;"></div> --}}

{{-- @include('frontend.layout.partials.hp.youtubesection')  --}}
{{-- <div class="section-top-ribon" style="background-color:black; height: 31px;"></div> --}}
{{-- @include('frontend.layout.partials.hp.smallvid')  --}}
{{-- <br style="clear:both" /> --}}
<div class="promo promo-dark promo-full bottommargin-lg topmargin-lg header-stick notopborder">
    <div class="container clearfix">
        <h3>Call us today at <span>+1 (800) 264-0644</span> or Email us at <span>support@graceframe.com</span></h3>
        <span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
        <a href="{{ url(getLang() . '/shop/') }}" class="button button-dark button-xlarge button-rounded">Start Shopping</a>
    </div>
</div>
{{-- <br style="clear:both" /> --}}
{{-- <div class="section-top-ribon" style="background-color:black; height: 31px;"></div>
@include('frontend/layouts/slider', $sliders)
<div class="section-bottom-ribon" style="background-color:black; height: 31px;"></div> --}}


@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection