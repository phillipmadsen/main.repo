<!-- 'Boolean FIELD_NAME_TITLE$ Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('active', 'Active:') !!}
    <label class="checkbox-inline">
   {!! Form::checkbox('active', 1, true) !!}
    </label>
</div>

<!-- Author Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author_id', 'Author Id:') !!}
    {!! Form::number('author_id', null, ['class' => 'form-control']) !!}
</div>

<!-- 'Boolean FIELD_NAME_TITLE$ Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('is_published', 'Is Published:') !!}
    <label class="checkbox-inline">
   {!! Form::checkbox('is_published', 1, true) !!}
    </label>
</div>

<!-- Is Draft Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_draft', 'Is Draft:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_draft', false) !!}
        {!! Form::checkbox('is_draft', true, null) !!} true
    </label>
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', false) !!}
        {!! Form::checkbox('is_active', 1, null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.articles.index') !!}" class="btn btn-default">Cancel</a>
</div>
