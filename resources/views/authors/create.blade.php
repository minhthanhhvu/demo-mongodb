{!! Form::open(['route'=>'authors.store', 'id'=>'authors-form']) !!}
@include('authors.form',['submitButtonText'=>'Them tac gia'])
{!! Form::close() !!}