    <div class="form-group">
            {!! Form::label('name','車手')!!}
            {!! Form::text('name', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
            {!! Form::label('tid','所屬車隊')!!}
            {!! Form::select('tid', $fleets, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
            {!! Form::label('number','車號')!!}
            {!! Form::text('number', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
            {!! Form::label('frequency','出賽次數')!!}
            {!! Form::text('frequency', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
            {!! Form::label('integral','生涯積分')!!}
            {!! Form::text('integral', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
            {!! Form::label('birthday','生日')!!}
            {!! Form::date('birthday', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
            {!! Form::label('countryofbirth','出生國家')!!}
            {!! Form::text('countryofbirth', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
            {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control'])!!}
    <div>