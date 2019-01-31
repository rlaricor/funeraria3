<div class="row">
    <div class="col-md-12">
        <div class="col-md-4">
            {{ Form::label('name', 'Documento de Indeitidad') }}
            {{ Form::text('document_id', null ,['class'=>'form-control','id' => 'document_id']) }}
        </div>
        <div class="col-md-4">
            {{ Form::label('name', 'Sexo') }}
            {{ Form::select('tipo', ['Male' => 'Masculino', 'Female' => 'Femenino'], 'Masculino',['class'=>'form-control']) }}
        </div>
        <div class="col-md-4">
            {{ Form::label('name', 'Fecha de Nacimiento') }}
            {{ Form::text('birthday', null, ['class' => 'form-control', 'id' => 'birthday']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-6">
            {{ Form::label('name', 'Nombres') }}
            {{ Form::text('name',null,['class'=>'form-control','id'=>'name']) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('name', 'Apellidos') }}
            {{ Form::text('lastname',null,['class'=>'form-control','id'=>'lastname']) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('name', 'Correo Electronico') }}
            {{ Form::text('email',null,['class'=>'form-control','id'=>'email']) }}
        </div>
    </div>
</div>