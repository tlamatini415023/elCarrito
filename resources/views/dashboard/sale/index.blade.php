@extends('dashboard.master')
@section('titulo','ventas')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado de ventas</h1>
        <br>
        <a href="{{url('dashboard/sale/create')}}"class="btn btn-info">Nueva venta</a>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id venta</th>
                    <th>Id cliente</th>
                    <th>Id usuario</th>
                    <th>Tipo comprobante</th>
                    <th>Serie comprobante</th> 
                    <th>Numero comprobante</th> 
                    <th>Fecha</th> 
                    <th>Porcentaje</th> 
                    <th>Total</th> 
                    <th>Estatus</th>  
                    <th>Editar</th> 
                    <th>Eliminar</th>                     
                </tr>
            </thead>
            <tbody>
                @foreach ($sale as $sale)                   
               
                <tr>
                    <td scope="row">{{$sale->id}}</td>
                    <td>{{$sale->client_id}}</td>
                    <td>{{$sale->user_id}}</td>
                    <td>{{$sale->receipt_type}}</td>
                    <td>{{$sale->receipt_series}}</td>
                    <td>{{$sale->receipt_number}}</td>
                    <td>{{$sale->date}}</td>
                    <td>{{$sale->tax}}</td>
                    <td>{{$sale->total}}</td>
                    <td>{{$sale->status}}</td>                    
                    <td><a href="{{url('dashboard/sale/'.$sale->id.'/edit')}}"class="bi bi-pencil-fill"></a></td>
                    <td>
                        <form action="{{url('dashboard/sale/'.$sale->id)}}"method="post">
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