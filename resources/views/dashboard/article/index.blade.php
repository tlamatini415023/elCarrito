@extends('dashboard.master')
@section('titulo','articulos')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado de articulos</h1>
        <br>
        <a href="{{url('dashboard/article/create')}}"class="btn btn-info">Nuevo articulo</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id articulo</th>                   
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Precio de venta</th>
                    <th>Cantidad existencias</th>
                    <th>Descripcion</th>
                    <th>Estado</th> 
                    <th>Categoria</th>
                    <th>Fecha creacion</th> 
                    <th>Fecha actualizacion</th> 
                    <th>Editar</th> 
                    <th>Eliminar</th>                 
                </tr>
            </thead>
            <tbody>
                @foreach ($article as $article)                   
               
                <tr>
                    <td scope="row">{{$article->id}}</td>                   
                    <td>{{$article->code}}</td>
                    <td>{{$article->name}}</td>
                    <td>{{$article->sale_price}}</td>
                    <td>{{$article->stock}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->state ?_('activo'):_('inactivo')}}</td>
                    <td>{{$article->category->name}}</td>
                    <td>{{$article->created_at}}</td>
                    <td>{{$article->updated_at}}</td>
                    <td><a href="{{url('dashboard/article/'.$article->id.'/edit')}}"class="bi bi-pencil-fill"></a></td>
                    <td>
                        <form action="{{url('dashboard/article/'.$article->id)}}"method="post">
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