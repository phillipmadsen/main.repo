<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook_title', 'Facebook Title:') !!}
    {!! Form::text('facebook_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Google Plus Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('google_plus_title', 'Google Plus Title:') !!}
    {!! Form::text('google_plus_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Short Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    {!! Form::textarea('short_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::select('category_id', ['$category' => '$category'], null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Sku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sku', 'Sku:') !!}
    {!! Form::text('sku', null, ['class' => 'form-control']) !!}
</div>

<!-- Mpn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mpn', 'Mpn:') !!}
    {!! Form::text('mpn', null, ['class' => 'form-control']) !!}
</div>

<!-- Imageurl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imageurl', 'Imageurl:') !!}
    {!! Form::text('imageurl', null, ['class' => 'form-control']) !!}
</div>

<!-- File Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_id', 'File Id:') !!}
    {!! Form::file('file_id') !!}
</div>
<div class="clearfix"></div>

<!-- Is Active Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', false) !!}
        {!! Form::checkbox('is_active', 1, null) !!} 1
    </label>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', ['Online' => 'Online', 'Offline' => 'Offline', 'Removed' => 'Removed', 'Archived' => 'Archived'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.products.index') !!}" class="btn btn-default">Cancel</a>
</div>
