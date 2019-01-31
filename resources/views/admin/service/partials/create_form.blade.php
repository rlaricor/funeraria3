<div class="row">
    <div class="col-md-12">
        <div class="col-md-3">
            {{ Form::label('name', 'Tipo Contrato') }}
            {{ Form::select('tipo', ['SERVICIO' => 'Servicio', 'PROFORMA' => 'Proforma'], 'SERVICIO',['class'=>'partials']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('name', 'Nro de Contrato') }}
            {{ Form::text('contract_number', null, ['class' => 'form-control', 'id' => 'contract_number']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('name', 'Fecha de Contrato') }}
            {{ Form::text('contract_date', null, ['class' => 'form-control', 'id' => 'contract_date']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('name', 'Contratista') }}
            {{ Form::select('employee_id', $employees, null, ['class' => 'form-control','placeholder' => 'Seleccionar']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-6">
            {{ Form::label('name', 'Lugar de Inscripcion') }}
            {{ Form::select('place_registration_id', $place_registrations , null, ['class' => 'partials', 'placeholder' => 'Seleccionar']) }}
        </div>
        <div class="col-md-6">
            {{ Form::label('name', 'Observacion Registro') }}
            {{ Form::text('registration_observation',null,['class'=>'partials','id'=>'registration_observation']) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="col offset-2 col-md-4">
            {{ Form::label('name', 'Total Servicio') }}
            {{ Form::text('total_servicio', null, ['class' => 'form-control', 'id' => 'total_servicio']) }}
        </div>
        <div class="col-md-4">
            {{ Form::label('name', 'Cobro Seguro') }}
            {{ Form::text('cobro_seguro', null, ['class' => 'partials', 'id' => 'cobro_seguro',]) }}
        </div>
    </div>
</div>