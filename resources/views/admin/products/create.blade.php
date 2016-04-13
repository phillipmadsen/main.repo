@extends('admin.layouts.clip')

@section('htmlschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection

@section('title')
Create New Product
@endsection

@section('ppstyle')@endsection
@section('scripts')@endsection
@section('pp_header_scripts')@endsection
@section('bodytag')@endsection
@section('bodyschema')@endsection

@section('pagetitle')
Create New Product
@endsection

@section('ptsmall')@endsection
@section('sidebar')@endsection
@section('widgets')@endsection

@section('content')
<div class="container" style="min-height: 821px;">
    <!-- start: PAGE CONTENT -->
    <div class="row">
        <div class="col-sm-12">
            <!-- start: PANLEL TABS -->
            <div class="panel panel-default">
                <div class="panel-heading"> <i class="fa fa-reorder"></i>
                    Product Panel
                </div>
                <div class="panel-body">
                    <div class="tabbable panel-tabs">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#panel_tab_example1">Tab 1</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#panel_tab_example2">Tab 2</a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#panel_tab_example3">Tab 3</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="panel_tab_example1" class="tab-pane active">
                                @include('core-templates::common.errors')
                            {!! Form::open(['url' => 'admin.products.store']) !!}
                            @include('admin.products.fields')
                            {!! Form::close() !!}
                            </div>
                            <div id="panel_tab_example2" class="tab-pane"></div>
                            <div id="panel_tab_example3" class="tab-pane"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end: PANLEL TABS --> </div>
    </div>

    <!-- end: PAGE CONTENT-->
</div>
@endsection

@section('after-content')@endsection

@section('footer_scripts')@endsection

@section('pp_footer_scripts')@endsection

@section('inlinejs')@endsection

@section('ppinline')@endsection

@section('clipinline')@endsection