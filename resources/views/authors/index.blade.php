@extends($layout)

@section('content')
<h1>Tác giả</h1>
{!! link_to_route('authors.create','Thêm tác giả') !!}
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>Họ tên</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	@foreach ($authors as $author)
	<tr>
		<td>{!! link_to_route('authors.show', $author->name, $author->id) !!}</td>
		<td>{!! link_to_route('authors.edit', 'Sửa', $author->id) !!}</td>
		<td>
		{!! Form::open(['method'=>'DELETE', 'route'=>['authors.destroy',$author->id]]) !!}
			<button type="submit">Xóa</button>
		{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>
@endsection