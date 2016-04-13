@extends('admin/layouts/clip')

@section('seo')
<meta name="_token" content="{!! csrf_token() !!}"/>
@endsection

@section('ppstyle')

@endsection

@section('pp_header_scripts')@endsection

@section('title')
Dashboard
@endsection

@section('breadlink1')
<li class="active"><a href="{!! url(getLang() . '/admin') !!}"><i class="fa fa-cog"></i> Dashboard</a></li>
@endsection

@section('pagetitle')
Dashboard
@endsection

@section('pt-small')
Control Panel | Version 1.0
@endsection



@section('content')

@include('flash::message')


@include('admin/layouts/partials/dashboard/section-two')

@include('admin/layouts/partials/dashboard/section-three')

@endsection

@section('widgets')
    <div class="row m-t-20">
        <div class="col-md-3 col-sm-12">
            <div class="panel no-bd bd-3 panel-stat">
                <div class="panel-body bg-blue p-15">
                    <div class="row m-b-10">
                        <div class="col-xs-3">
                            <i class="glyph-icon flaticon-visitors"></i>
                        </div>
                        <div class="col-xs-9">
                            <div data-height="56" data-delay="3500" data-direction="vertical" data-mode="carousel" class="live-tile carousel ha" style="height: 56px;">
                                <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slide ha active" style="transition-property: transform; transition-duration: 500ms; transition-timing-function: ease; transform: translate(0%, 0%) translateZ(0px);">
                                    <small class="stat-title">Visits today</small>
                                    <h1 class="m-0 w-300">25 610</h1>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
                                <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slide ha" style="transition-property: transform; transition-duration: 500ms; transition-timing-function: ease; transform: translate(0%, -100%) translateZ(0px);">
                                    <small class="stat-title">Visits yesterday</small>
                                    <h1 class="m-0 w-300">22 420</h1>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <small class="stat-title">New Visitors</small>
                            <div data-height="30" data-delay="3500" data-direction="vertical" data-mode="carousel" class="live-tile carousel ha" style="height: 30px;">
                                <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slide ha active" style="transition-property: transform; transition-duration: 500ms; transition-timing-function: ease; transform: translate(0%, 0%) translateZ(0px);">
                                    <h3 class="m-0 w-300">37.5%</h3>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
                                <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slide ha" style="transition-property: transform; transition-duration: 500ms; transition-timing-function: ease; transform: translate(0%, -100%) translateZ(0px);">
                                    <h3 class="m-0 w-300">34.2%</h3>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <small class="stat-title">Bounce Rate</small>
                            <div data-height="30" data-delay="3500" data-direction="vertical" data-mode="carousel" class="live-tile carousel ha" style="height: 30px;">
                                <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slide ha active" style="transition-property: transform; transition-duration: 500ms; transition-timing-function: ease; transform: translate(0%, 0%) translateZ(0px);">
                                    <h3 class="m-0 w-500">5.6%</h3>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
                                <div class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all slide ha" style="transition-property: transform; transition-duration: 500ms; transition-timing-function: ease; transform: translate(0%, -100%) translateZ(0px);">
                                    <h3 class="m-0 w-500">7.4%</h3>
                                <a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="panel no-bd bd-3 panel-stat">
                <div class="panel-body bg-red p-15">
                    <div class="row m-b-6">
                        <div class="col-xs-3">
                            <i class="glyph-icon flaticon-educational"></i>
                        </div>
                        <div class="col-xs-9">
                            <small class="stat-title">PAGES VIEW</small>
                            <h1 class="m-0 w-500">201k</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <small class="stat-title">Duration</small>
                            <h3 class="m-0 w-500">18:25</h3>
                        </div>
                        <div class="col-xs-6">
                            <small class="stat-title">Pages / visits</small>
                            <h3 class="m-0 w-500">21</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="panel no-bd bd-3 panel-stat">
                <div class="panel-body bg-green p-15">
                    <div class="row m-b-0">
                        <div class="col-xs-3">
                            <i class="glyph-icon flaticon-orders"></i>
                        </div>
                        <div class="col-xs-9">
                            <small class="stat-title">ORDERS THIS MONTH</small>
                            <div data-height="47" data-animation-easing="fade" data-delay="4000" class="live-tile fade" style="height: 47px;">
                                <div class="fade-front" style="display: block;">
                                    <h1 class="m-0 w-500 bg-green">148</h1>
                                </div>
                                <div class="fade-back">
                                    <h1 class="m-0 w-500 bg-green">+28%</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <small class="stat-title">Last month</small>
                            <div data-height="30" data-animation-easing="fade" data-delay="4000" class="live-tile fade" style="height: 30px;">
                                <div class="bg-green fade-front" style="display: block;">
                                    <h3 class="m-0 w-500">126</h3>
                                </div>
                                <div class="bg-green fade-back">
                                    <h3 class="m-0 w-500">$12,545</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <small class="stat-title">Last week</small>
                            <div data-height="30" data-animation-easing="fade" data-delay="4000" class="live-tile fade" style="height: 30px;">
                                <div class="bg-green fade-front" style="display: block;">
                                    <h3 class="m-0 w-500">41</h3>
                                </div>
                                <div class="bg-green fade-back">
                                    <h3 class="m-0 w-500">$4,237</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="panel no-bd bd-3 panel-stat">
                <div class="panel-body bg-dark p-15">
                    <div class="row m-b-6">
                        <div class="col-xs-3">
                            <i class="glyph-icon flaticon-incomes"></i>
                        </div>
                        <div class="col-xs-9">
                            <small class="stat-title">INCOMES THIS MONTH</small>
                            <h1 class="m-0 w-500">$<span data-animation-duration="1400" data-value="42567" class="animate-number">42,567</span></h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <small class="stat-title">Last month</small>
                            <h3 class="m-0 w-500">$<span data-animation-duration="1400" data-value="38547" class="animate-number">38,547</span></h3>
                        </div>
                        <div class="col-xs-6">
                            <small class="stat-title">Last week</small>
                            <h3 class="m-0 w-500">$<span data-animation-duration="1400" data-value="8754" class="animate-number">8,754</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin/layouts/partials/3-widgets')
@endsection


@section('after-content')@endsection
@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection

@section('ppinline')@endsection



@section('clipinline')
UINestable.init();
@endsection