@extends('dashboard.master')
@section('titulo','NuevaVenta')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
        <h1>Crear nueva venta</h1>       
    </div>
</main>
<div class="container py-4">
    <form action="{{route('sale.store')}}" method="post">
        @csrf
        <div class="form-group row">
            <label for="client_id" class="col-sm-2 col-form-label">Id cliente</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="client_id" id="client_id">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="user_id" class="col-sm-2 col-form-label">Id usuario</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="user_id" id="user_id">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_type" class="col-sm-2 col-form-label">Tipo comprobante</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="receipt_type" id="receipt_type" placeholder="Ingresa el tipo de comprobante">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_series" class="col-sm-2 col-form-label">Serie comprobante</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="receipt_series" id="receipt_series" placeholder="Ingresa la serie del comprobante">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="receipt_number" class="col-sm-2 col-form-label">Numero comprobante</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="receipt_number" id="receipt_number" placeholder="Ingresa el numero del comprobante">                
            </div>
        </div>
        <br>        
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Fecha</label>
            <div class="col-sm-10">
                <input type="date" class="date" name="date" id="date" placeholder="Ingresa la fecha">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="tax" class="col-sm-2 col-form-label">Porcentaje</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="tax" id="tax" placeholder="Ingresa el porcentaje">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="total" id="total" placeholder="Registra la venta total">                
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Estatus</label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="status" id="status" placeholder="Ingresa el estatus">                
            </div>
        </div>
        <br>
        <div class="form-group row">            
            <div class="col-sm-10">               
                <button type="submit" class="btn btn-info">Registrar</button>
                <a href="{{url('dashboard/sale')}}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>
@endsection