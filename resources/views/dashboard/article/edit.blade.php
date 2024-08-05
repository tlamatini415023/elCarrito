@extends('dashboard.master')
@section('titulo','NuevoArticulo')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Editar articulo</h1>
        <br>
       
    </div>
</main>
<br>
<div class="container py-4">
    <form action="{{url('dashboard/article/'.$article->id)}}" method="post">
        @csrf
        @method('PUT')      
        <div class="form-group row">
            <label for="code" class="col-sm-2 col-form-label">Codigo</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="code" id="code" value="{{$article->code}}" placeholder="Ingresa el codigo del articulo">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="name" id="name" value="{{$article->name}}" placeholder="Ingresa el nombre del articulo">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="sale_price" class="col-sm-2 col-form-label">Precio venta</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="sale_price" id="sale_price" value="{{$article->sale_price}}" placeholder="Ingresa el precio del articulo">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="stock" class="col-sm-2 col-form-label">Cantidad disponible</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="stock" id="stock" value="{{$article->stock}}" placeholder="Ingresa la cantidad disponible">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Descripcion</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="description">{{$article->description}}</textarea>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <select class="form-control" name="state" id="state" value="{{$article->state}}">
                    <option value="">Escoja una opcion</option>
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>                    
                </select>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="category_id" class="col-sm-2 col-form-label">Categoria</label>
            <div class="col-sm-10">
                <select class="form-control" name="category_id" id="category_id" value="{{$article->category}}">
                    <option value="">Escoja una opcion</option>
                    @foreach ($category as $category)                    
                    <option value="{{$category->id}}">{{$category->name}}</option>                     
                    @endforeach                 
                </select>          
            </div>
        </div>
        <br>
        <div class="form-group row">            
            <div class="col-sm-10">
                <br>
                <br>
                <button type="submit" class="btn btn-info">Actualizar</button>
                <a href="{{url('dashboard/article')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection