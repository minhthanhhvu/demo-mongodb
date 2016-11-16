<div>
	{!! Form::label('name', 'Họ tên:') !!}
	{!! Form::text('name') !!}
</div>
<div>
	{!! Form::label('email', 'Email:') !!}
	{!! Form::text('email') !!}
</div>
{!! Form::submit($submitButtonText) !!}