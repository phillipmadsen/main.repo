@extends('admin.layout.clip')

@section('htmlschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection

@section('title')
Update Article
@endsection

@section('ppstyle')@endsection
@section('scripts')@endsection

@section('pp_header_scripts')@endsection
@section('bodytag')@endsection
@section('bodyschema')@endsection

@section('pagetitle')
Edit Article
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
                    Article Panel
                </div>
                <div class="panel-body">

                    @include('core-templates::common.errors')

                    {!! Form::model($article, ['url' => ['/admin/articles/update', $article->id], 'method' => 'patch']) !!}
                    @include('admin.articles.fields')
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