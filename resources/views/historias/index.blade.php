@extends('layouts.app')


@section('content')

<div class="container">
<div class="page-header">
    <div class="row">
    <div class="col-md-1">
        <label>Busqueda Avanzada</label> 
        </div>
        <div class="d-inline-block align-top" class="col-md-6" > 
             
                {!! Form::open(['route'=> 'historia', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
                
                {{ Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Apellidos']) }}
            
                {{ Form::text('cedula', null, ['class' => 'form-control', 'placeholder' => 'Cedula']) }}
                
                {{ Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'codigo']) }}
                
                
                    <button type='submit' class='btn btn-default'>
                    <span class="glyphicon glyphicon-search">BUSCAR</span>
                    </button>
      

{!! Form::close() !!}

</div>
<div class="col-md-2">
             <a href="{{ route('historia.create') }}" class="btn btn-primary">Registrar Historia</a>
        </div>
<div class="col-md-2">
      
        </div>
    </div>
</div>
<hr>
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
            
                <div class="alert alert-success" class="card-header"  >Listado de historia</div>
                
             <table >
                <thead class="thead-dark">
                    
                <th  class='text-center'>Cedula</th>
                <th class='text-center'>Apellidos</th>
                <th class='text-center'>Nombres</th>
                <th class='text-center'>Codigo</th>
                <th class='text-center'>Fecha De Ingreso</th>
             
               
                <center><th  class='text-center'>Accion</th></center>
                </thead>
                <tbody>
                
                @foreach ($historia as $historias)
                <tr >
                    <td class='text-center'><small class="text-muted">{{ $historias->cedula }}</small></td> 
                    <td class='text-center'><small class="text-muted">{{ $historias->apellidos }}</small></td> 
                    <td class='text-center'><small class="text-muted">{{ $historias->nombres }}</small></td>
                    <td class='text-center'><small class="text-muted">{{ $historias->codigo }}</small></td>
                    <td class='text-center'><small class="text-muted">{{ $historias->fechaIngreso }}</small></td>
                    
                    
                    <td class='text-center'><a href="{{ route('historia.show', $historias->id) }}" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-align-left"></span></a></td>
                    <td class='text-center'><a href="{{ route('historia.edit', $historias->id) }}"  class="btn btn-danger btn-xs">Actualizar</a></td>
                    <td class='text-center'><a href="#"  class="btn btn-default btn-xs">Descargar</a></td>
                </tr>
                <span class="fi-icon-name" title="icon name" aria-hidden="true"></spa
                @endforeach
                </tbody> 
          
             </table>

              {!! $historia->render() !!}
               
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
