<table class="table table-responsive table-striped table-bordered table-hover table-full-width">
    <thead>
        <th>View</th>
        <th>Author Id</th>
        <th>Is Published</th>
        <th>Is Draft</th>
        <th>Title</th>
        <th>Excerpt</th>
        <th>Content</th>
        <th>Slug</th>
        <th>Meta Title</th>
        <th>Fb Title</th>
        <th>Gp Title</th>
        <th>Meta Keywords</th>
        <th>Meta Description</th>
        <th>Path</th>
        <th>File Name</th>
        <th>File Size</th>
        <th>Category Id</th>
        <th>Has Product Link</th>
        <th>Product Link Nofollow</th>
        <th>Link To Product Title</th>
        <th>Link To Product</th>
        <th>Lang</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th colspan="3">Action</th>
        {{--   $product->created_at->format('m-d-Y')
<td>
    @  if ($product->status =='Online')
    <span class="label label-success w-300">{  $product->status !!}</span>
    @  elseif ($product->status =='Offline')
    <span class="label label-dark w-300">{  $product->status !!}</span>
    @  elseif ($product->status =='Removed')
    <span class="label label-danger w-300">{  $product->status !!}</span>
    @  else
    <span class="label  w-300">{  $product->status !!}</span>
    @  endif
</td> --}}
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
        <td> <a href="{!! url('/admin/articles/show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a></td>
            <td>{!! $article->author_id !!}</td>
            <td>{!! $article->is_published !!}</td>
            <td>{!! $article->is_draft !!}</td>
            <td>{!! $article->title !!}</td>
            <td>{!! $article->excerpt !!}</td>
            <td>{!! $article->content !!}</td>
            <td>{!! $article->slug !!}</td>
            <td>{!! $article->meta_title !!}</td>
            <td>{!! $article->fb_title !!}</td>
            <td>{!! $article->gp_title !!}</td>
            <td>{!! $article->meta_keywords !!}</td>
            <td>{!! $article->meta_description !!}</td>
            <td>{!! $article->path !!}</td>
            <td>{!! $article->file_name !!}</td>
            <td>{!! $article->file_size !!}</td>
            <td>{!! $article->category_id !!}</td>
            <td>{!! $article->has_product_link !!}</td>
            <td>{!! $article->product_link_nofollow !!}</td>
            <td>{!! $article->link_to_product_title !!}</td>
            <td>{!! $article->link_to_product !!}</td>
            <td>{!! $article->lang !!}</td>
            <td>{!! $article->created_at !!}</td>
            <td>{!! $article->updated_at !!}</td>
            <td>
                {!! Form::open(['url' => ['/admin/articles/destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>

                    <a href="{!! url('/admin/articles/edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<i class="fa fa-times-circle"></i> &nbsp; Remove', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
