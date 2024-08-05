@extends('dashboard.master')
@section('titulo','categorias')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado de categorias</h1>
        <br>
        <a href="{{url('dashboard/category/create')}}"class="btn btn-info">Nueva categoría</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id categoria</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Estado</th> 
                    <th>Editar</th> 
                    <th>Eliminar</th>                   
                </tr>
            </thead>
            <tbody>
                @foreach ($category as $category)                   
               
                <tr>
                    <td scope="row">{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>{{$category->state ?_('activo'):_('inactivo')}}</td>
                    <td><a href="{{url('dashboard/category/'.$category->id.'/edit')}}"class="bi bi-pencil-fill"></a></td>
                    <td>
                        <form action="{{url('dashboard/category/'.$category->id)}}"method="post">
                            @method("DELETE")
                            @csrf
                            <button class="bi bi-eraser-fill" type="submit"></button>
                        </form>                        
                    </td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection