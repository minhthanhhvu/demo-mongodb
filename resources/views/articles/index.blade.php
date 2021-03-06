@extends($layout)

@section('content')
<h1>Bài viết</h1>
{!! link_to_route('articles.create', 'Thêm bài viết', null, ['class'=>'btn btn-primary btn-lg']) !!}
<table class="table">
	<tr>
		<th>Tiêu đề</th>
		<th>Sửa</th>
		<th>Xóa</th>
	</tr>
	@foreach ($articles as $article)
	<tr>
		<td>{!! link_to_route('articles.show', $article->title, $article->id) !!}</td>
		<td>{!! link_to_route('articles.edit','Sửa',$article->id) !!}</td>
		<td>
		{!! Form::open(['method'=>'DELETE', 'route'=>['articles.destroy',$article->id]]) !!}
			<button type="submit" class="btn btn-warning">Xóa</button>
		{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>
@endsection