@extends('dashboard.master')
@section('titulo','personas')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado de personas</h1>
        <br>
        <a href="{{url('dashboard/person/create')}}"class="btn btn-info">Nueva persona</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id persona</th>
                    <th>Perfil</th>
                    <th>Nombre</th>
                    <th>Apellidos</th> 
                    <th>Tipo de documento</th> 
                    <th>Numero de documento</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Creado</th>
                    <th>Actualizado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>                                    
                </tr>
            </thead>
            <tbody>
                @foreach ($person as $person)                   
               
                <tr>
                    <td scope="row">{{$person->id}}</td>
                    <td>{{$person->type}}</td>
                    <td>{{$person->first_name}}</td>
                    <td>{{$person->last_name}}</td>
                    <td>{{$person->document_type}}</td>
                    <td>{{$person->document_number}}</td>
                    <td>{{$person->email}}</td>
                    <td>{{$person->phone}}</td>
                    <td>{{$person->address}}</td>
                    <td>{{$person->created_at}}</td>
                    <td>{{$person->updated_at}}</td>
                    <td><a href="{{url('dashboard/person/'.$person->id.'/edit')}}"class="bi bi-pencil-fill"></a></td>
                    <td>
                        <form action="{{url('dashboard/person/'.$person->id)}}"method="post">
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