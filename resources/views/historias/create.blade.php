@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="background-color: #E8F8F5">
        <center><h3><strong><div  class="alert alert-light" role="alert">Registrar</div></strong></h3></center><hr>
            <div class="card" style="background-color: #E3F2FD " >
                <div class="card-header">{{ __('Register') }}</div>
                {!! Form::open(['route'=> 'historia.store', 'method' => 'POST', 'class' => 'form-inline pull-right']) !!}
                <div class="container">
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-sm">
                                <div class="form-group">
                                    {!! Form::label('codigo', '#H.C:') !!}
                                    <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                        {!! Form::label('cedula', 'Cedula') !!}
                                        <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                        {!! Form::label('apellidos', 'Apellidos') !!}
                                        <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('apellidos', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    {!! Form::label('nombres', 'Nombres') !!}
                                    <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('nombres', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div> 
                            </div>

                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-sm">
                                <div class="form-group">
                                    {!! Form::label('edad', 'Edad', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('edad', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                        {!! Form::label('direccion', 'Dirección') !!}
                                        <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                        {!! Form::label('telefono', 'Telefono') !!}
                                        <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                    {!! Form::label('ocupacion', 'Ocupacion') !!}
                                    <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('ocupacion', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div> 
                            </div>

                        </div>
                    </div>

<!-- datos clinicos-->

            <div class="card" style="background-color: #BBDEFB " >
                <div class="card-header">{{ __('Datos Clinicos') }}</div>
                {!! Form::open(['route'=> 'historia.store', 'method' => 'POST', 'class' => 'form-inline pull-right']) !!}
                <div class="container">
                    <div class="card-body">
                        <div class="row">
                            
                        <div class="col-sm">
                                <div class="form-group">
                                    {!! Form::label('app', 'App:', ['class' => 'col-lg-2 control-label']) !!}
                                    <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('app', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                        {!! Form::label('apf', 'Apf') !!}
                                        <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('apf', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group">
                                        {!! Form::label('ta', 'Ta') !!}
                                        <div class="col-lg-2 col-lg-offset-2">
                                        {!! Form::text('ta', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                          

                        </div>
                    </div>


                    <div class="card-body">
                        <div class="row">
                                <div class="form-group">
                                    <div class="col-sm">
                                         {!! Form::label('montivoConsulta', 'Montivo De la Consulta') !!}
                                    </div>
                                    <div class="col-sm">
                                        {!! Form::text('montivoConsulta', null, ['class' => 'form-control']) !!}
                                </div> 
                            </div>
                            
                                <div class="form-group">
                                    <div class="col-sm">
                                        {!! Form::label('evaluacionFisica', 'Evaluacion Fisica') !!}
                                    </div>
                                    <div class="col-sm ">
                                        {!! Form::text('evaluacionFisica', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>


                    
                    <div class="card-body">
                        <div class="row">

                                <div class="form-group">
                                    <div class="col-sm">
                                         {!! Form::label('diagnostico', 'Diagnostico') !!}
                                    </div>
                                    <div class="col-sm">
                                        {!! Form::text('diagnostico', null, ['class' => 'form-control']) !!}
                                </div> 
                            </div>
                            
                                <div class="form-group">
                                    <div class="col-sm">
                                        {!! Form::label('tratamineto', 'Tratamineto') !!}
                                    </div>
                                    <div class="col-sm ">
                                        {!! Form::text('tratamineto', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm">
                                        {!! Form::label('observaciones', 'Observaciones') !!}
                                    </div>
                                    <div class="col-sm ">
                                        {!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div> 
                            </div>
                        </div>
                   

                    
                   
                    <center> {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}</center>
                        </div>
                    </div>
                </div>
                     
            </div>
        </div>   
    </div>
</div>

  {!! Form::close() !!}
@endsection
