<div>
	{!! Form::label('name', 'Ho ten:') !!}
	{!! Form::text('name') !!}
</div>
<div>
	{!! Form::label('email', 'Email:') !!}
	{!! Form::text('email') !!}
</div>
{!! Form::submit($submitButtonText) !!}