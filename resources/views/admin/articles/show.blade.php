@extends('admin.layout.clip')

@section('htmlschema')@endsection
@section('seo')@endsection
@section('jsonschema')@endsection
@section('title')
Preview Article
@endsection

@section('ppstyle')@endsection
@section('scripts')@endsection

@section('pp_header_scripts')@endsection
@section('bodytag')@endsection
@section('bodyschema')@endsection

@section('page-title')
Preview Article
@endsection

@section('sidebar')@endsection
@section('widgets')@endsection

@section('content')
<div class="container">
    @include('admin.articles.show_fields')
</div>
@endsection

@section('after-content')@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection
@section('ppinline')@endsection
@section('clipinline')@endsection