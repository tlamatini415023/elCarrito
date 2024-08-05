@extends('dashboard.master')
@section('titulo','mensaje')
@include('layouts/navigation')
@section('contenido')
<h1>Mensaje</h1>
<div class="container py-4">
    <h2>{{$msg}}</h2>
    <a href="{{url('dashboard/person')}}"class="btn btn-secondary">Regresar</a>
</div>
@endsection