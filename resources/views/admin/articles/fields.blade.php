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

<!-- 'Boolean FIELD_NAME_TITLE$ Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('is_draft', 'Is Draft:') !!}
    <label class="checkbox-inline">
   {!! Form::checkbox('is_draft', 1, true) !!}
    </label>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Excerpt Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('excerpt', 'Excerpt:') !!}
    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::text('meta_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Fb Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fb_title', 'Fb Title:') !!}
    {!! Form::text('fb_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Gp Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gp_title', 'Gp Title:') !!}
    {!! Form::text('gp_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Keywords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('meta_keywords', 'Meta Keywords:') !!}
    {!! Form::text('meta_keywords', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_description', 'Meta Description:') !!}
    {!! Form::textarea('meta_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- File Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_name', 'File Name:') !!}
    {!! Form::text('file_name', null, ['class' => 'form-control']) !!}
</div>

<!-- File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_size', 'File Size:') !!}
    {!! Form::number('file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- 'Boolean FIELD_NAME_TITLE$ Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('has_product_link', 'Has Product Link:') !!}
    <label class="checkbox-inline">
   {!! Form::checkbox('has_product_link', 1, true) !!}
    </label>
</div>

<!-- 'Boolean FIELD_NAME_TITLE$ Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('product_link_nofollow', 'Product Link Nofollow:') !!}
    <label class="checkbox-inline">
   {!! Form::checkbox('product_link_nofollow', 1, true) !!}
    </label>
</div>

<!-- Link To Product Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_to_product_title', 'Link To Product Title:') !!}
    {!! Form::text('link_to_product_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Link To Product Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link_to_product', 'Link To Product:') !!}
    {!! Form::text('link_to_product', null, ['class' => 'form-control']) !!}
</div>

<!-- Lang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lang', 'Lang:') !!}
    {!! Form::text('lang', null, ['class' => 'form-control']) !!}
</div>

<!-- Created At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Updated At Field -->
<div class="form-group col-sm-6">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! Form::date('updated_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.articles.index') !!}" class="btn btn-default">Cancel</a>
</div>
