    <div class="form-group">
        {!! Form::label('name','車隊名稱')!!}
        {!! Form::text('name', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
        {!! Form::label('country','代表國家')!!}
        {!! Form::text('country', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
        {!! Form::label('location','所在地')!!}
        {!! Form::text('location', null, ['class' => 'form-control'])!!}
    <div>
    <div class="form-group">
        {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control'])!!}
   <div>