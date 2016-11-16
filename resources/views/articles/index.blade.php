<h1>Bai viet</h1>
{!! link_to_route('articles.create','Them bai viet') !!}
<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>Tieu de</th>
		<th>Sua</th>
		<th>Xoa</th>
	</tr>
	@foreach ($articles as $article)
	<tr>
		<td>{!! link_to_route('articles.show', $article->title, $article->id) !!}</td>
		<td>{!! link_to_route('articles.edit','Sua',$article->id) !!}</td>
		<td>
		{!! Form::open(['method'=>'DELETE', 'route'=>['articles.destroy',$article->id]]) !!}
			<button type="submit">Xoa</button>
		{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>