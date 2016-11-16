@extends($layout)

@section('content')
{!! Form::open(['route'=>'articles.store', 'id'=>'articles-form']) !!}
	@include('articles.form',['submitButtonText'=>'Thêm bài viết'])
{!! Form::close() !!}
@endsection