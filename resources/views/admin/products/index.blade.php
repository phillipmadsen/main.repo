@extends('admin.layouts.clip')

@section('htmlschema')@endsection

@section('seo')@endsection

@section('jsonschema')@endsection

@section('title')
Products
@endsection



@section('scripts')@endsection


@section('pp_header_scripts')@endsection

@section('bodytag')@endsection

@section('bodyschema')@endsection

@section('pagetitle')
Products
@endsection

@section('ptsmall')

@endsection

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
                    Products Panel
                </div>
                <div class="panel-body">
                    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! url('/admin/products/create') !!}">Add New</a>
                    <div class="clearfix"></div>

                    @include('flash::message')

                    <div class="clearfix"></div>
                    @if($products->isEmpty())
                    <div class="well text-center">No Products found.</div>
                    @else
                    @include('admin.products.table')
                    @endif
                    
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