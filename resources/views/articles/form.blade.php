<div>
	{!! Form::label('title','Tiêu đề:') !!}
	{!! Form::text('title') !!}
</div>
<div>
	{!! Form::label('content', 'Nội dung: ') !!}
	{!! Form::text('content') !!}
</div>
{!! Form::submit($submitButtonText) !!}