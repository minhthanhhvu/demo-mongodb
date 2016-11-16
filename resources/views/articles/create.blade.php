{!! Form::open(['route'=>'articles.store', 'id'=>'articles-form']) !!}
	@include('articles.form',['submitButtonText'=>'Them bai viet'])
{!! Form::close() !!}