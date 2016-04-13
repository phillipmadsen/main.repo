<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $article->id !!}</p>
</div>

<!-- Active Field -->
<div class="form-group">
    {!! Form::label('active', 'Active:') !!}
    <p>{!! $article->active !!}</p>
</div>

<!-- Author Id Field -->
<div class="form-group">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{!! $article->author_id !!}</p>
</div>

<!-- Is Published Field -->
<div class="form-group">
    {!! Form::label('is_published', 'Is Published:') !!}
    <p>{!! $article->is_published !!}</p>
</div>

<!-- Is Draft Field -->
<div class="form-group">
    {!! Form::label('is_draft', 'Is Draft:') !!}
    <p>{!! $article->is_draft !!}</p>
</div>

<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>{!! $article->is_active !!}</p>
</div>

