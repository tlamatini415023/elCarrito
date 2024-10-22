@extends('dashboard.master')
@section('titulo','DetalleIngresos')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Listado detalle de ingresos</h1>
        <br>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id ingreso</th>                  
                    <th>Cantidad</th>
                    <th>Precio</th>                                                     
                </tr>
            </thead>
            <tbody>
                @foreach ($income_detail as $income_detail)                   
               
                <tr>
                    <td scope="row">{{$income_detail->id}}</td>                   
                    <td>{{$income_detail->quantity}}</td>
                    <td>{{$income_detail->price}}</td>    
                    <td><form action="{{url('dashboard/income/income_detail/'.$income_detail->id.'/edit')}}" method="post"
                        <div class="btn-group me-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-primary">+</button>                       
                        <button type="button" class="btn btn-primary">-</button>
                      </div>>
                    </form></td>                                    
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