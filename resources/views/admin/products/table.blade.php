<table class="table table-responsive table-striped table-bordered table-hover table-full-width">
    <thead>
        <th>View</th>
        <th>Id</th>
        <th>Name</th>
        <th>Category Id</th>
        <th>Price</th>
        <th>Sku</th>
        <th>Mpn</th>
        <th>Created At</th>
        <th>Is Active</th>
        <th>Status</th>
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
    @foreach($products as $product)
        <tr>
        <td> <a href="{!! url('/admin/products/show', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-eye"></i></a></td>
            <td>{!! $product->id !!}</td>
            <td>{!! $product->name !!}</td>
            <td>{!! $product->category_id !!}</td>
            <td>{!! $product->price !!}</td>
            <td>{!! $product->sku !!}</td>
            <td>{!! $product->mpn !!}</td>
            <td>{!! $product->created_at !!}</td>
            <td>{!! $product->is_active !!}</td>
            <td>{!! $product->status !!}</td>
            <td>
                {!! Form::open(['url' => ['/admin/products/destroy', $product->id], 'method' => 'delete']) !!}
                <div class='btn-group'>

                    <a href="{!! url('/admin/products/edit', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="fa fa-pencil"></i></a>
                    {!! Form::button('<i class="fa fa-times-circle"></i> &nbsp; Remove', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
