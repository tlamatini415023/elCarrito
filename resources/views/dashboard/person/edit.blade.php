@extends('dashboard.master')
@section('titulo','NuevaPersona')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Editar persona</h1>             
    </div>
</main>
<br>
<div class="container py-4">
    <form action="{{url('dashboard/person/'.$person->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="type" class="col-sm-2 col-form-label">Perfil</label>
            <div class="col-sm-10">
                <select class="form-control" name="type" id="type" value="{{$person->type}}">                                    
                    <option value="2"{{$person->type=='Persona Natural' ?'selected':''}}>Persona Natural</option>
                    <option value="1"{{$person->type=='Empresa' ?'selected':''}}>Empresa</option>  
                    <option value="0"{{$person->type=='Proveedor' ?'selected':''}}>Proveedor</option>                   
                </select>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="first_name" id="first_name" value="{{$person->first_name}}" placeholder="Ingresa el nombre de la persona">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Apellidos</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="last_name" id="last_name" value="{{$person->last_name}}" placeholder="Ingresa los apellidos">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="document_type" class="col-sm-2 col-form-label">Tipo de documento</label>
            <div class="col-sm-10">
                <select class="form-control" name="document_type" id="document_type" value="{{$person->document_type}}">
                    <option value="">Escoja una opcion</option>
                    <option value="3"{{$person->document_type==3 ?'selected':''}}>C.C.</option>
                    <option value="2"{{$person->document_type==2 ?'selected':''}}>TI</option>  
                    <option value="1"{{$person->document_type==1 ?'selected':''}}>Pasaporte</option>  
                    <option value="0"{{$person->document_type==0 ?'selected':''}}>Nit</option>                                     
                </select>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="document_number" class="col-sm-2 col-form-label">Numero de documento</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="document_number" id="document_number" value="{{$person->document_number}}" placeholder="Ingresa el numero de documento">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="email" id="email" value="{{$person->email}}" placeholder="Ingresa el correo">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Telefono</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="phone" id="phone" value="{{$person->phone}}" placeholder="Ingresa el telefono">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Direccion</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="address" id="address" placeholder="Ingresa la direccion">                
            </div>
        </div>
        <br>
        <div class="form-group row">            
            <div class="col-sm-10">
                <br>
                <br>
                <button type="submit" class="btn btn-info">Actualizar</button>
                <a href="{{url('dashboard/person')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection