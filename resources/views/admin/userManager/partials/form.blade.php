<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email Address:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::text('start_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('region', 'Region:') !!}
    {!! Form::select('region', $regions,'SO', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('active_flag', 'Active:') !!}
    {!! Form::select('active_flag', array('Y' => 'Yes', 'N' => 'No'),'Y', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('admin_flag', 'Administrator:') !!}
    {!! Form::select('admin_flag', array('Y' => 'Yes', 'N' => 'No'),'Y', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>


<script>
    $('#start_date').datepicker({dateFormat: 'yy-mm-dd'})
</script>