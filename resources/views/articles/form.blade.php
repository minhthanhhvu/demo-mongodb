<div>
	{!! Form::label('title','Tieu de:') !!}
	{!! Form::text('title') !!}
</div>
<div>
	{!! Form::label('content', 'Noi dung: ') !!}
	{!! Form::text('content') !!}
</div>
{!! Form::submit($submitButtonText) !!}