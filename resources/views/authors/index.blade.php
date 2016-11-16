<h1>Tac gia</h1>
{!! link_to_route('authors.create','Them tac gia') !!}
<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>Ho ten</th>
		<th>Sua</th>
		<th>Xoa</th>
	</tr>
	@foreach ($authors as $author)
	<tr>
		<td>{!! link_to_route('authors.show', $author->name, $author->id) !!}</td>
		<td>{!! link_to_route('authors.edit', 'Sua', $author->id) !!}</td>
		<td>
		{!! Form::open(['method'=>'DELETE', 'route'=>['authors.destroy',$author->id]]) !!}
			<button type="submit">Xoa</button>
		{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>