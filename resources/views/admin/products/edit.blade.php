@extends('admin.layout.clip')

@section('htmlschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection

@section('title')
Update Product
@endsection

@section('ppstyle')@endsection
@section('scripts')@endsection

@section('pp_header_scripts')@endsection
@section('bodytag')@endsection
@section('bodyschema')@endsection

@section('pagetitle')
Edit Product
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

                    @include('core-templates::common.errors')

                    {!! Form::model($product, ['url' => ['/admin/products/update', $product->id], 'method' => 'patch']) !!}
                    @include('admin.products.fields')
                    {!! Form::close() !!}
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