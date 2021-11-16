<!-- Origin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('origin', 'Origin:') !!}
    {!! Form::text('origin', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Destination Field -->
<div class="form-group col-sm-6">
    {!! Form::label('destination', 'Destination:') !!}
    {!! Form::text('destination', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Flight No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flight_no', 'Flight No:') !!}
    {!! Form::number('flight_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Departure Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departure_date', 'Departure Date:') !!}
    {!! Form::text('departure_date', null, ['class' => 'form-control','id'=>'departure_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#departure_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Arrival Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('arrival_date', 'Arrival Date:') !!}
    {!! Form::text('arrival_date', null, ['class' => 'form-control','id'=>'arrival_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#arrival_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Passengers Field -->
<div class="form-group col-sm-6">
    {!! Form::label('passengers', 'Passengers:') !!}
    {!! Form::text('passengers', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Carrier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('carrier', 'Carrier:') !!}
    {!! Form::text('carrier', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Travel Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('travel_class', 'Travel Class:') !!}
    {!! Form::text('travel_class', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>