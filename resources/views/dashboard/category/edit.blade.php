@extends('dashboard.master')
@section('titulo','NuevaCategoria')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Modificar categoria</h1>
        <br>
       
    </div>
</main>
<br>
<div class="container py-4">
    <form action="{{url('dashboard/category/'.$category->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="name" id="name" value="{{$category->name}}" placeholder="Ingresa el nombre de la categoria">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description">{{$category->description}}</textarea>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state" value="{{$category->state}}">
                    <option value="">Escoja una opcion</option>
                    <option value="1"{{$category->state==1 ?'selected':''}}>Activo</option>
                    <option value="0"{{$category->state==0 ?'selected':''}}>Inactivo</option>                    
                </select>
            </div>
        </div>
        <br>
        <div class="form-group row">            
            <div class="col-sm-10">
                <br>
                <br>
                <button type="submit" class="btn btn-info">Actualizar</button>
                <a href="{{url('dashboard/category')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection