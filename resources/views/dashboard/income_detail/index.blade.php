@extends('dashboard.master')
@section('titulo','DetalleIngresos')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1 class = "mb-4">Listado detalle de ingresos</h1>       
        <div class="container py-4">
            <form action="{{url('dashboard/income/income_detail'.$income_detail->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="quantity" class="col-sm-2 col-form-label">Cantidad</label>
                    <div class="col-sm-10">
                        <input type="text"class="form-control" name="quantity" id="quantity">                
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                        <input type="text"class="form-control" name="'price" id="'price">                
                    </div>
                </div>                      
                <div class="form-group row">            
                    <div class="col-sm-10">               
                        <button type="submit" class="btn btn-info">Registrar</button>
                        <a href="{{url('dashboard/income/income_detail')}}" class="btn btn-secondary">Regresar</a>
                    </div>
                </div>
            </form>
        </div>       
    </div>
</main>
@endsection