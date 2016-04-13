<table class="table table-responsive table-striped table-bordered table-hover table-full-width">
    <thead>
        <th>View</th>
        <th>Active</th>
        <th>Author Id</th>
        <th>Is Published</th>
        <th>Is Draft</th>
        <th>Is Active</th>
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
            <td>{!! $article->active !!}</td>
            <td>{!! $article->author_id !!}</td>
            <td>{!! $article->is_published !!}</td>
            <td>{!! $article->is_draft !!}</td>
            <td>{!! $article->is_active !!}</td>
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
